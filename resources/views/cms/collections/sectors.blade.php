<x-layouts.app :title="__('Sectors | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Sectors')" :subheading="__('Manage the industry sectors displayed on the homepage')" :fullWidth="true">
        <div class="mb-4 flex justify-between items-center">
            <x-action-message on="sectors-created">{{ __('Sector added.') }}</x-action-message>
            <x-action-message on="sectors-updated">{{ __('Sector updated.') }}</x-action-message>
            <x-action-message on="sectors-deleted">{{ __('Sector deleted.') }}</x-action-message>
            <x-button type="button" x-data="" x-on:click="$dispatch('modal:open', 'add-sector')">{{ __('Add Sector') }}</x-button>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Description</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400 max-w-md truncate">{{ Str::limit($item->description, 80) }}</td>
                            <td class="px-6 py-4 text-right text-sm space-x-2">
                                <x-button variant="secondary" size="sm" type="button" x-data="" x-on:click="$dispatch('modal:open', 'edit-sector-{{ $item->id }}')">{{ __('Edit') }}</x-button>
                                <x-form method="delete" action="{{ route('cms.content.destroy', [$type, $item->id]) }}" class="inline" x-data="" x-on:submit.prevent="if(confirm('Delete this sector?')) $el.submit()">
                                    <x-button variant="danger" size="sm">{{ __('Delete') }}</x-button>
                                </x-form>
                            </td>
                        </tr>

                        <x-modal id="edit-sector-{{ $item->id }}">
                            <div class="p-6">
                                <x-heading size="lg">{{ __('Edit Sector') }}</x-heading>
                                <x-form method="put" action="{{ route('cms.content.update', [$type, $item->id]) }}" class="mt-4 space-y-4">
                                    <x-input type="text" :label="__('Name')" :value="$item->name" name="name" required />
                                    <div>
                                        <x-label :value="__('Description')" for="description-{{ $item->id }}" />
                                        <x-textarea name="description" id="description-{{ $item->id }}" rows="3" class="mt-1 block w-full" required>{{ $item->description }}</x-textarea>
                                        <x-error for="description" />
                                    </div>
                                    <div class="flex justify-end gap-2">
                                        <x-button variant="secondary" form="edit-sector-{{ $item->id }}_close">{{ __('Cancel') }}</x-button>
                                        <x-button>{{ __('Save') }}</x-button>
                                    </div>
                                </x-form>
                            </div>
                        </x-modal>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">{{ __('No sectors yet. Add your first sector.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <x-modal id="add-sector">
            <div class="p-6">
                <x-heading size="lg">{{ __('Add Sector') }}</x-heading>
                <x-form method="post" action="{{ route('cms.content.store', $type) }}" class="mt-4 space-y-4">
                    <x-input type="text" :label="__('Name')" name="name" required />
                    <div>
                        <x-label :value="__('Description')" for="new-sector-description" />
                        <x-textarea name="description" id="new-sector-description" rows="3" class="mt-1 block w-full" required></x-textarea>
                        <x-error for="description" />
                    </div>
                    <div class="flex justify-end gap-2">
                        <x-button variant="secondary" form="add-sector_close">{{ __('Cancel') }}</x-button>
                        <x-button>{{ __('Add') }}</x-button>
                    </div>
                </x-form>
            </div>
        </x-modal>
    </x-cms.layout>
</section>
</x-layouts.app>
