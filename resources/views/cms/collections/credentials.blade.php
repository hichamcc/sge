<x-layouts.app :title="__('Credentials | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Credentials')" :subheading="__('Manage the credentials and certifications displayed on the homepage')" :fullWidth="true">
        <div class="mb-4 flex justify-between items-center">
            <x-action-message on="credentials-created">{{ __('Credential added.') }}</x-action-message>
            <x-action-message on="credentials-updated">{{ __('Credential updated.') }}</x-action-message>
            <x-action-message on="credentials-deleted">{{ __('Credential deleted.') }}</x-action-message>
            <x-button type="button" x-data="" x-on:click="$dispatch('modal:open', 'add-credential')">{{ __('Add Credential') }}</x-button>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Label</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                    @forelse($items as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item->label }}</td>
                            <td class="px-6 py-4 text-right text-sm space-x-2">
                                <x-button variant="secondary" size="sm" type="button" x-data="" x-on:click="$dispatch('modal:open', 'edit-credential-{{ $item->id }}')">{{ __('Edit') }}</x-button>
                                <x-form method="delete" action="{{ route('cms.content.destroy', [$type, $item->id]) }}" class="inline" x-data="" x-on:submit.prevent="if(confirm('Delete this credential?')) $el.submit()">
                                    <x-button variant="danger" size="sm">{{ __('Delete') }}</x-button>
                                </x-form>
                            </td>
                        </tr>

                        <x-modal id="edit-credential-{{ $item->id }}">
                            <div class="p-6">
                                <x-heading size="lg">{{ __('Edit Credential') }}</x-heading>
                                <x-form method="put" action="{{ route('cms.content.update', [$type, $item->id]) }}" class="mt-4 space-y-4">
                                    <x-input type="text" :label="__('Label')" :value="$item->label" name="label" required />
                                    <div class="flex justify-end gap-2">
                                        <x-button variant="secondary" form="edit-credential-{{ $item->id }}_close">{{ __('Cancel') }}</x-button>
                                        <x-button>{{ __('Save') }}</x-button>
                                    </div>
                                </x-form>
                            </div>
                        </x-modal>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">{{ __('No credentials yet. Add your first credential.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <x-modal id="add-credential">
            <div class="p-6">
                <x-heading size="lg">{{ __('Add Credential') }}</x-heading>
                <x-form method="post" action="{{ route('cms.content.store', $type) }}" class="mt-4 space-y-4">
                    <x-input type="text" :label="__('Label')" name="label" required />
                    <div class="flex justify-end gap-2">
                        <x-button variant="secondary" form="add-credential_close">{{ __('Cancel') }}</x-button>
                        <x-button>{{ __('Add') }}</x-button>
                    </div>
                </x-form>
            </div>
        </x-modal>
    </x-cms.layout>
</section>
</x-layouts.app>
