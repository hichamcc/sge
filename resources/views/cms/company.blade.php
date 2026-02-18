<x-layouts.app :title="__('Company Info | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Company Info')" :subheading="__('Update your company details displayed on the website')">
        <x-form method="put" action="{{ route('cms.company.update') }}" class="my-6 w-full space-y-6">
            <x-input type="text" :label="__('Company Name')" :value="$company['name'] ?? ''" name="name" required />
            <x-input type="text" :label="__('Legal Name')" :value="$company['legal'] ?? ''" name="legal" required />
            <x-input type="text" :label="__('Tagline')" :value="$company['tagline'] ?? ''" name="tagline" required />
            <x-input type="text" :label="__('Location')" :value="$company['location'] ?? ''" name="location" required />
            <x-input type="text" :label="__('Address')" :value="$company['address'] ?? ''" name="address" required />
            <x-input type="text" :label="__('Phone')" :value="$company['phone'] ?? ''" name="phone" required />
            <x-input type="email" :label="__('Email')" :value="$company['email'] ?? ''" name="email" required />
            <x-input type="text" :label="__('Years')" :value="$company['years'] ?? ''" name="years" required />
            <x-input type="text" :label="__('Established')" :value="$company['established'] ?? ''" name="established" required />

            <div class="flex items-center gap-4">
                <x-button>{{ __('Save') }}</x-button>
                <x-action-message on="company-updated">{{ __('Saved.') }}</x-action-message>
            </div>
        </x-form>
    </x-cms.layout>
</section>
</x-layouts.app>
