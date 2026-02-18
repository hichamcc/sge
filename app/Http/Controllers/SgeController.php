<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Credential;
use App\Models\Differentiator;
use App\Models\Leader;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Stat;
use Illuminate\Http\Request;

class SgeController extends Controller
{
    public function index()
    {
        $company = SiteSetting::get('company', []);

        $heroData = SiteSetting::get('hero', []);
        $hero = [
            'headline' => $heroData['headline'] ?? '',
            'subline' => $heroData['subline'] ?? '',
            'cta_primary' => [
                'text' => $heroData['cta_primary_text'] ?? '',
                'link' => $heroData['cta_primary_link'] ?? '#',
            ],
            'cta_secondary' => [
                'text' => $heroData['cta_secondary_text'] ?? '',
                'link' => $heroData['cta_secondary_link'] ?? '#',
            ],
        ];

        $stats = Stat::orderBy('sort_order')->get()->map(fn ($s) => [
            'value' => $s->value,
            'label' => $s->label,
        ])->all();

        $services = Service::orderBy('sort_order')->get()->map(fn ($s) => array_filter([
            'title' => $s->title,
            'description' => $s->description,
            'capabilities' => $s->capabilities,
            'icon' => $s->icon,
            'badge' => $s->badge,
        ], fn ($v) => $v !== null))->all();

        $sectors = Sector::orderBy('sort_order')->get()->map(fn ($s) => [
            'name' => $s->name,
            'description' => $s->description,
        ])->all();

        $projects = Project::orderBy('sort_order')->get()->map(fn ($p) => array_filter([
            'name' => $p->name,
            'scope' => $p->scope,
            'detail' => $p->detail,
            'image' => $p->image,
            'highlight' => $p->highlight,
        ], fn ($v) => $v !== null))->all();

        $leadership = Leader::orderBy('sort_order')->get()->map(fn ($l) => array_filter([
            'name' => $l->name,
            'title' => $l->title,
            'experience' => $l->experience,
            'description' => $l->description,
            'credentials' => $l->credentials,
        ], fn ($v) => $v !== null))->all();

        $differentiators = Differentiator::orderBy('sort_order')->get()->map(fn ($d) => [
            'title' => $d->title,
            'description' => $d->description,
        ])->all();

        $credentials = Credential::orderBy('sort_order')->pluck('label')->all();

        return view('welcome', compact(
            'company', 'hero', 'stats', 'services', 'sectors',
            'projects', 'leadership', 'differentiators', 'credentials'
        ));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        return redirect()->route('home')->with('success',
            'Thank you for your inquiry. A member of our team will be in touch shortly.'
        );
    }

    public function contacts()
    {
        $contacts = Contact::latest()->paginate(15);

        return view('contacts.index', compact('contacts'));
    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('status', 'contact-deleted');
    }
}
