<x-layouts.app :title="__('Leadership | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Leadership')" :subheading="__('Manage the leadership team displayed on the homepage')" :fullWidth="true">
        <div class="mb-4 flex justify-between items-center">
            <x-action-message on="leaders-created">{{ __('Leader added.') }}</x-action-message>
            <x-action-message on="leaders-updated">{{ __('Leader updated.') }}</x-action-message>
            <x-action-message on="leaders-deleted">{{ __('Leader deleted.') }}</x-action-message>
            <x-button type="button" x-data="" x-on:click="$dispatch('modal:open', 'add-leader')">{{ __('Add Leader') }}</x-button>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Experience</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Credentials</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->experience }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->credentials ?? '—' }}</td>
                            <td class="px-6 py-4 text-right text-sm space-x-2">
                                <x-button variant="secondary" size="sm" type="button" x-data="" x-on:click="$dispatch('modal:open', 'edit-leader-{{ $item->id }}')">{{ __('Edit') }}</x-button>
                                <x-form method="delete" action="{{ route('cms.content.destroy', [$type, $item->id]) }}" class="inline" x-data="" x-on:submit.prevent="if(confirm('Delete this leader?')) $el.submit()">
                                    <x-button variant="danger" size="sm">{{ __('Delete') }}</x-button>
                                </x-form>
                            </td>
                        </tr>

                        <x-modal id="edit-leader-{{ $item->id }}">
                            <div class="p-6 max-h-[80vh] overflow-y-auto">
                                <x-heading size="lg">{{ __('Edit Leader') }}</x-heading>
                                <x-form method="put" action="{{ route('cms.content.update', [$type, $item->id]) }}" class="mt-4 space-y-4">
                                    <x-input type="text" :label="__('Name')" :value="$item->name" name="name" required />
                                    <x-input type="text" :label="__('Title')" :value="$item->title" name="title" required />
                                    <x-input type="text" :label="__('Experience')" :value="$item->experience" name="experience" required />
                                    <x-input type="text" :label="__('Credentials (optional)')" :value="$item->credentials" name="credentials" />
                                    <div>
                                        <x-label :value="__('Description')" for="description-{{ $item->id }}" />
                                        <x-textarea name="description" id="description-{{ $item->id }}" rows="5" class="mt-1 block w-full" required>{{ $item->description }}</x-textarea>
                                        <x-error for="description" />
                                    </div>
                                    <div class="flex justify-end gap-2">
                                        <x-button variant="secondary" form="edit-leader-{{ $item->id }}_close">{{ __('Cancel') }}</x-button>
                                        <x-button>{{ __('Save') }}</x-button>
                                    </div>
                                </x-form>
                            </div>
                        </x-modal>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">{{ __('No leaders yet. Add your first leader.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <x-modal id="add-leader">
            <div class="p-6 max-h-[80vh] overflow-y-auto">
                <x-heading size="lg">{{ __('Add Leader') }}</x-heading>
                <x-form method="post" action="{{ route('cms.content.store', $type) }}" class="mt-4 space-y-4">
                    <x-input type="text" :label="__('Name')" name="name" required />
                    <x-input type="text" :label="__('Title')" name="title" required />
                    <x-input type="text" :label="__('Experience')" name="experience" required />
                    <x-input type="text" :label="__('Credentials (optional)')" name="credentials" />
                    <div>
                        <x-label :value="__('Description')" for="new-leader-description" />
                        <x-textarea name="description" id="new-leader-description" rows="5" class="mt-1 block w-full" required></x-textarea>
                        <x-error for="description" />
                    </div>
                    <div class="flex justify-end gap-2">
                        <x-button variant="secondary" form="add-leader_close">{{ __('Cancel') }}</x-button>
                        <x-button>{{ __('Add') }}</x-button>
                    </div>
                </x-form>
            </div>
        </x-modal>
    </x-cms.layout>
</section>
</x-layouts.app>
