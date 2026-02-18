<x-layouts.app :title="__('Projects | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Projects')" :subheading="__('Manage project experience displayed on the homepage')" :fullWidth="true">
        <div class="mb-4 flex justify-between items-center">
            <x-action-message on="projects-created">{{ __('Project added.') }}</x-action-message>
            <x-action-message on="projects-updated">{{ __('Project updated.') }}</x-action-message>
            <x-action-message on="projects-deleted">{{ __('Project deleted.') }}</x-action-message>
            <x-button type="button" x-data="" x-on:click="$dispatch('modal:open', 'add-project')">{{ __('Add Project') }}</x-button>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Scope</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Highlight</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                            <td class="px-6 py-4">
                                @if($item->image)
                                    <img src="{{ $item->image }}" alt="" class="h-10 w-16 rounded object-cover" />
                                @else
                                    <span class="text-gray-400">—</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->scope }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->highlight ?? '—' }}</td>
                            <td class="px-6 py-4 text-right text-sm space-x-2">
                                <x-button variant="secondary" size="sm" type="button" x-data="" x-on:click="$dispatch('modal:open', 'edit-project-{{ $item->id }}')">{{ __('Edit') }}</x-button>
                                <x-form method="delete" action="{{ route('cms.content.destroy', [$type, $item->id]) }}" class="inline" x-data="" x-on:submit.prevent="if(confirm('Delete this project?')) $el.submit()">
                                    <x-button variant="danger" size="sm">{{ __('Delete') }}</x-button>
                                </x-form>
                            </td>
                        </tr>

                        <x-modal id="edit-project-{{ $item->id }}">
                            <div class="p-6 max-h-[80vh] overflow-y-auto">
                                <x-heading size="lg">{{ __('Edit Project') }}</x-heading>
                                <x-form method="put" action="{{ route('cms.content.update', [$type, $item->id]) }}" :upload="true" class="mt-4 space-y-4">
                                    <x-input type="text" :label="__('Name')" :value="$item->name" name="name" required />
                                    <x-input type="text" :label="__('Scope')" :value="$item->scope" name="scope" required />
                                    <div>
                                        <x-label :value="__('Detail')" for="detail-{{ $item->id }}" />
                                        <x-textarea name="detail" id="detail-{{ $item->id }}" rows="3" class="mt-1 block w-full" required>{{ $item->detail }}</x-textarea>
                                        <x-error for="detail" />
                                    </div>
                                    <x-input type="text" :label="__('Image URL (or upload below)')" :value="$item->image" name="image" />
                                    <x-cms.image-upload name="image_file" :current="$item->image" />
                                    <x-input type="text" :label="__('Highlight')" :value="$item->highlight" name="highlight" />
                                    <div class="flex justify-end gap-2">
                                        <x-button variant="secondary" form="edit-project-{{ $item->id }}_close">{{ __('Cancel') }}</x-button>
                                        <x-button>{{ __('Save') }}</x-button>
                                    </div>
                                </x-form>
                            </div>
                        </x-modal>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">{{ __('No projects yet. Add your first project.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <x-modal id="add-project">
            <div class="p-6 max-h-[80vh] overflow-y-auto">
                <x-heading size="lg">{{ __('Add Project') }}</x-heading>
                <x-form method="post" action="{{ route('cms.content.store', $type) }}" :upload="true" class="mt-4 space-y-4">
                    <x-input type="text" :label="__('Name')" name="name" required />
                    <x-input type="text" :label="__('Scope')" name="scope" required />
                    <div>
                        <x-label :value="__('Detail')" for="new-detail" />
                        <x-textarea name="detail" id="new-detail" rows="3" class="mt-1 block w-full" required></x-textarea>
                        <x-error for="detail" />
                    </div>
                    <x-input type="text" :label="__('Image URL (or upload below)')" name="image" />
                    <x-cms.image-upload />
                    <x-input type="text" :label="__('Highlight')" name="highlight" />
                    <div class="flex justify-end gap-2">
                        <x-button variant="secondary" form="add-project_close">{{ __('Cancel') }}</x-button>
                        <x-button>{{ __('Add') }}</x-button>
                    </div>
                </x-form>
            </div>
        </x-modal>
    </x-cms.layout>
</section>
</x-layouts.app>
