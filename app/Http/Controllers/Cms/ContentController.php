<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Credential;
use App\Models\Differentiator;
use App\Models\Leader;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Service;
use App\Models\Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    protected array $models = [
        'stats' => Stat::class,
        'services' => Service::class,
        'sectors' => Sector::class,
        'projects' => Project::class,
        'leaders' => Leader::class,
        'differentiators' => Differentiator::class,
        'credentials' => Credential::class,
    ];

    protected function resolveModel(string $type): string
    {
        return $this->models[$type];
    }

    public function index(string $type)
    {
        $model = $this->resolveModel($type);
        $items = $model::orderBy('sort_order')->get();

        return view("cms.collections.{$type}", compact('items', 'type'));
    }

    public function store(Request $request, string $type)
    {
        $model = $this->resolveModel($type);
        $validated = $this->validateForType($request, $type);

        // Auto sort_order
        $validated['sort_order'] = $model::max('sort_order') + 1;

        // Handle image upload for projects
        if ($type === 'projects' && $request->hasFile('image_file')) {
            $validated['image'] = '/storage/' . $request->file('image_file')->store('projects', 'public');
        }

        // Handle capabilities for services
        if ($type === 'services' && isset($validated['capabilities'])) {
            $validated['capabilities'] = array_values(array_filter($validated['capabilities']));
        }

        $model::create($validated);

        return redirect()->route('cms.content.index', $type)->with('status', "{$type}-created");
    }

    public function update(Request $request, string $type, int $id)
    {
        $model = $this->resolveModel($type);
        $item = $model::findOrFail($id);
        $validated = $this->validateForType($request, $type);

        // Handle image upload for projects
        if ($type === 'projects' && $request->hasFile('image_file')) {
            // Delete old uploaded image if exists
            if ($item->image && str_starts_with($item->image, '/storage/')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $item->image));
            }
            $validated['image'] = '/storage/' . $request->file('image_file')->store('projects', 'public');
        }

        // Handle capabilities for services
        if ($type === 'services' && isset($validated['capabilities'])) {
            $validated['capabilities'] = array_values(array_filter($validated['capabilities']));
        }

        $item->update($validated);

        return redirect()->route('cms.content.index', $type)->with('status', "{$type}-updated");
    }

    public function destroy(string $type, int $id)
    {
        $model = $this->resolveModel($type);
        $item = $model::findOrFail($id);

        // Clean up uploaded images for projects
        if ($type === 'projects' && $item->image && str_starts_with($item->image, '/storage/')) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $item->image));
        }

        $item->delete();

        return redirect()->route('cms.content.index', $type)->with('status', "{$type}-deleted");
    }

    public function reorder(Request $request, string $type)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer',
        ]);

        $model = $this->resolveModel($type);

        foreach ($request->ids as $index => $id) {
            $model::where('id', $id)->update(['sort_order' => $index]);
        }

        return response()->json(['success' => true]);
    }

    protected function validateForType(Request $request, string $type): array
    {
        return $request->validate(match ($type) {
            'stats' => [
                'value' => 'required|string|max:50',
                'label' => 'required|string|max:255',
            ],
            'services' => [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:2000',
                'capabilities' => 'required|array|min:1',
                'capabilities.*' => 'nullable|string|max:255',
                'icon' => 'required|string|max:50',
                'badge' => 'nullable|string|max:255',
            ],
            'sectors' => [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:1000',
            ],
            'projects' => [
                'name' => 'required|string|max:255',
                'scope' => 'required|string|max:255',
                'detail' => 'required|string|max:2000',
                'image' => 'nullable|string|max:500',
                'image_file' => 'nullable|image|max:5120',
                'highlight' => 'nullable|string|max:255',
            ],
            'leaders' => [
                'name' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'experience' => 'required|string|max:100',
                'description' => 'required|string|max:5000',
                'credentials' => 'nullable|string|max:255',
            ],
            'differentiators' => [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:1000',
            ],
            'credentials' => [
                'label' => 'required|string|max:255',
            ],
        });
    }
}
