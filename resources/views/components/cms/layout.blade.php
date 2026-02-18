@props(['fullWidth' => false])

<div class="flex items-start max-md:flex-col w-full">
    <div class="mr-10 w-full pb-4 md:w-[220px]">
        <x-navlist variant="secondary">
            <x-navlist.group :heading="__('General')">
                <x-navlist.item :href="route('cms.company')" :current="request()->routeIs('cms.company')">{{ __('Company Info') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.hero')" :current="request()->routeIs('cms.hero')">{{ __('Hero Section') }}</x-navlist.item>
            </x-navlist.group>
            <x-navlist.group :heading="__('Content')">
                <x-navlist.item :href="route('cms.content.index', 'stats')" :current="request()->is('cms/stats')">{{ __('Stats') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'services')" :current="request()->is('cms/services')">{{ __('Services') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'sectors')" :current="request()->is('cms/sectors')">{{ __('Sectors') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'projects')" :current="request()->is('cms/projects')">{{ __('Projects') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'leaders')" :current="request()->is('cms/leaders')">{{ __('Leadership') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'differentiators')" :current="request()->is('cms/differentiators')">{{ __('Differentiators') }}</x-navlist.item>
                <x-navlist.item :href="route('cms.content.index', 'credentials')" :current="request()->is('cms/credentials')">{{ __('Credentials') }}</x-navlist.item>
            </x-navlist.group>
        </x-navlist>
    </div>

    <x-separator class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <x-heading>{{ $heading ?? '' }}</x-heading>
        <x-subheading>{{ $subheading ?? '' }}</x-subheading>

        <div class="mt-5 w-full {{ $fullWidth ? '' : 'max-w-lg' }}">
            {{ $slot }}
        </div>
    </div>
</div>
