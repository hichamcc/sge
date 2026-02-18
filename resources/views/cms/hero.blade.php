<x-layouts.app :title="__('Hero Section | Site Content')">
<section class="w-full">
    @include('partials.cms-heading')

    <x-cms.layout :heading="__('Hero Section')" :subheading="__('Update the hero banner content on the homepage')">
        <x-form method="put" action="{{ route('cms.hero.update') }}" class="my-6 w-full space-y-6">
            <x-input type="text" :label="__('Headline')" :value="$hero['headline'] ?? ''" name="headline" required />

            <div>
                <x-label :value="__('Subline')" for="subline" />
                <x-textarea name="subline" id="subline" rows="3" class="mt-1 block w-full" required>{{ old('subline', $hero['subline'] ?? '') }}</x-textarea>
                <x-error for="subline" />
            </div>

            <x-input type="text" :label="__('Primary CTA Text')" :value="$hero['cta_primary_text'] ?? ''" name="cta_primary_text" required />
            <x-input type="text" :label="__('Primary CTA Link')" :value="$hero['cta_primary_link'] ?? ''" name="cta_primary_link" required />
            <x-input type="text" :label="__('Secondary CTA Text')" :value="$hero['cta_secondary_text'] ?? ''" name="cta_secondary_text" required />
            <x-input type="text" :label="__('Secondary CTA Link')" :value="$hero['cta_secondary_link'] ?? ''" name="cta_secondary_link" required />

            <div class="flex items-center gap-4">
                <x-button>{{ __('Save') }}</x-button>
                <x-action-message on="hero-updated">{{ __('Saved.') }}</x-action-message>
            </div>
        </x-form>
    </x-cms.layout>
</section>
</x-layouts.app>
