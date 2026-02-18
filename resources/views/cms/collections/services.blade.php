<x-layouts.app :title="__('Services | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Services')" :subheading="__('Manage the core services displayed on the homepage')" :fullWidth="true">
        <div class="mb-4 flex justify-between items-center">
            <x-action-message on="services-created">{{ __('Service added.') }}</x-action-message>
            <x-action-message on="services-updated">{{ __('Service updated.') }}</x-action-message>
            <x-action-message on="services-deleted">{{ __('Service deleted.') }}</x-action-message>
            <x-button type="button" x-data="" x-on:click="$dispatch('modal:open', 'add-service')">{{ __('Add Service') }}</x-button>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Icon</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Capabilities</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Badge</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->icon }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ count($item->capabilities ?? []) }} items</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item->badge ?? '—' }}</td>
                            <td class="px-6 py-4 text-right text-sm space-x-2">
                                <x-button variant="secondary" size="sm" type="button" x-data="" x-on:click="$dispatch('modal:open', 'edit-service-{{ $item->id }}')">{{ __('Edit') }}</x-button>
                                <x-form method="delete" action="{{ route('cms.content.destroy', [$type, $item->id]) }}" class="inline" x-data="" x-on:submit.prevent="if(confirm('Delete this service?')) $el.submit()">
                                    <x-button variant="danger" size="sm">{{ __('Delete') }}</x-button>
                                </x-form>
                            </td>
                        </tr>

                        <x-modal id="edit-service-{{ $item->id }}">
                            <div class="p-6 max-h-[80vh] overflow-y-auto">
                                <x-heading size="lg">{{ __('Edit Service') }}</x-heading>
                                <x-form method="put" action="{{ route('cms.content.update', [$type, $item->id]) }}" class="mt-4 space-y-4">
                                    <x-input type="text" :label="__('Title')" :value="$item->title" name="title" required />
                                    <div>
                                        <x-label :value="__('Description')" for="description-{{ $item->id }}" />
                                        <x-textarea name="description" id="description-{{ $item->id }}" rows="3" class="mt-1 block w-full" required>{{ $item->description }}</x-textarea>
                                        <x-error for="description" />
                                    </div>
                                    <x-input type="text" :label="__('Icon')" :value="$item->icon" name="icon" required />
                                    <x-input type="text" :label="__('Badge (optional)')" :value="$item->badge" name="badge" />

                                    <div x-data="{ caps: {{ json_encode($item->capabilities ?? []) }} }">
                                        <x-label :value="__('Capabilities')" />
                                        <template x-for="(cap, index) in caps" :key="index">
                                            <div class="flex gap-2 mt-2">
                                                <input type="text" :name="'capabilities[' + index + ']'" x-model="caps[index]" class="flex-1 rounded-md border border-gray-300 px-3 py-2 text-sm dark:border-gray-600 dark:bg-gray-800 dark:text-white" />
                                                <button type="button" x-on:click="caps.splice(index, 1)" class="text-red-500 hover:text-red-700 text-sm px-2">Remove</button>
                                            </div>
                                        </template>
                                        <button type="button" x-on:click="caps.push('')" class="mt-2 text-sm text-blue-600 dark:text-blue-400 hover:underline">+ Add capability</button>
                                    </div>

                                    <div class="flex justify-end gap-2">
                                        <x-button variant="secondary" form="edit-service-{{ $item->id }}_close">{{ __('Cancel') }}</x-button>
                                        <x-button>{{ __('Save') }}</x-button>
                                    </div>
                                </x-form>
                            </div>
                        </x-modal>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">{{ __('No services yet. Add your first service.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <x-modal id="add-service">
            <div class="p-6 max-h-[80vh] overflow-y-auto">
                <x-heading size="lg">{{ __('Add Service') }}</x-heading>
                <x-form method="post" action="{{ route('cms.content.store', $type) }}" class="mt-4 space-y-4">
                    <x-input type="text" :label="__('Title')" name="title" required />
                    <div>
                        <x-label :value="__('Description')" for="new-description" />
                        <x-textarea name="description" id="new-description" rows="3" class="mt-1 block w-full" required></x-textarea>
                        <x-error for="description" />
                    </div>
                    <x-input type="text" :label="__('Icon')" name="icon" required />
                    <x-input type="text" :label="__('Badge (optional)')" name="badge" />

                    <div x-data="{ caps: [''] }">
                        <x-label :value="__('Capabilities')" />
                        <template x-for="(cap, index) in caps" :key="index">
                            <div class="flex gap-2 mt-2">
                                <input type="text" :name="'capabilities[' + index + ']'" x-model="caps[index]" class="flex-1 rounded-md border border-gray-300 px-3 py-2 text-sm dark:border-gray-600 dark:bg-gray-800 dark:text-white" />
                                <button type="button" x-on:click="caps.splice(index, 1)" class="text-red-500 hover:text-red-700 text-sm px-2" x-show="caps.length > 1">Remove</button>
                            </div>
                        </template>
                        <button type="button" x-on:click="caps.push('')" class="mt-2 text-sm text-blue-600 dark:text-blue-400 hover:underline">+ Add capability</button>
                    </div>

                    <div class="flex justify-end gap-2">
                        <x-button variant="secondary" form="add-service_close">{{ __('Cancel') }}</x-button>
                        <x-button>{{ __('Add') }}</x-button>
                    </div>
                </x-form>
            </div>
        </x-modal>
    </x-cms.layout>
</section>
</x-layouts.app>
