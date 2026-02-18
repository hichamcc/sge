<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        {{-- Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Dashboard') }}</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ __('Welcome back, :name.', ['name' => auth()->user()->name]) }}</p>
        </div>

        {{-- Stats Cards --}}
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            {{-- Contact Submissions --}}
            <a href="{{ route('contacts.index') }}" class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5 hover:border-gray-300 dark:hover:border-gray-600 transition-colors">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Contacts') }}</span>
                    <span class="rounded-lg bg-blue-50 dark:bg-blue-500/10 p-2 text-blue-600 dark:text-blue-400">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                    </span>
                </div>
                <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $contactsCount }}</p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ $contactsThisWeek }} {{ __('this week') }}</p>
            </a>

            {{-- Projects --}}
            <a href="{{ route('cms.content.index', 'projects') }}" class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5 hover:border-gray-300 dark:hover:border-gray-600 transition-colors">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Projects') }}</span>
                    <span class="rounded-lg bg-green-50 dark:bg-green-500/10 p-2 text-green-600 dark:text-green-400">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/></svg>
                    </span>
                </div>
                <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $projectsCount }}</p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __('project experiences') }}</p>
            </a>

            {{-- Services --}}
            <a href="{{ route('cms.content.index', 'services') }}" class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5 hover:border-gray-300 dark:hover:border-gray-600 transition-colors">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Services') }}</span>
                    <span class="rounded-lg bg-amber-50 dark:bg-amber-500/10 p-2 text-amber-600 dark:text-amber-400">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.049.58.025 1.194-.14 1.743"/></svg>
                    </span>
                </div>
                <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $servicesCount }}</p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __('core services') }}</p>
            </a>

            {{-- Sectors --}}
            <a href="{{ route('cms.content.index', 'sectors') }}" class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5 hover:border-gray-300 dark:hover:border-gray-600 transition-colors">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Sectors') }}</span>
                    <span class="rounded-lg bg-purple-50 dark:bg-purple-500/10 p-2 text-purple-600 dark:text-purple-400">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
                    </span>
                </div>
                <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $sectorsCount }}</p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __('industry sectors') }}</p>
            </a>
        </div>

        {{-- Quick Links + Recent Contacts --}}
        <div class="grid gap-6 lg:grid-cols-3">
            {{-- Quick Links --}}
            <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white mb-4">{{ __('Quick Links') }}</h2>
                <div class="space-y-2">
                    <a href="{{ route('cms.company') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="size-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21"/></svg>
                        {{ __('Edit Company Info') }}
                    </a>
                    <a href="{{ route('cms.hero') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="size-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z"/></svg>
                        {{ __('Edit Hero Section') }}
                    </a>
                    <a href="{{ route('cms.content.index', 'projects') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="size-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/></svg>
                        {{ __('Manage Projects') }}
                    </a>
                    <a href="{{ route('cms.content.index', 'leaders') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="size-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                        {{ __('Manage Leadership') }}
                    </a>
                    <a href="{{ route('contacts.index') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <svg class="size-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        {{ __('View All Contacts') }}
                    </a>
                </div>
            </div>

            {{-- Recent Contacts --}}
            <div class="lg:col-span-2 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Recent Contact Submissions') }}</h2>
                    <a href="{{ route('contacts.index') }}" class="text-xs text-blue-600 dark:text-blue-400 hover:underline">{{ __('View all') }}</a>
                </div>
                @if($recentContacts->count())
                    <div class="space-y-3">
                        @foreach($recentContacts as $contact)
                            <div class="flex items-start gap-3 rounded-lg border border-gray-100 dark:border-gray-800 p-3">
                                <span class="mt-0.5 shrink-0 size-8 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-xs font-medium text-gray-600 dark:text-gray-400">
                                    {{ strtoupper(substr($contact->name, 0, 2)) }}
                                </span>
                                <div class="min-w-0 flex-1">
                                    <div class="flex items-center justify-between gap-2">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white truncate">{{ $contact->name }}</p>
                                        <span class="shrink-0 text-xs text-gray-400 dark:text-gray-500">{{ $contact->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $contact->email }}</p>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300 line-clamp-2">{{ $contact->message }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="flex flex-col items-center py-8">
                        <svg class="w-10 h-10 text-gray-300 dark:text-gray-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('No contact submissions yet') }}</p>
                    </div>
                @endif
            </div>
        </div>

        {{-- Site Content Overview --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-5">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Site Content Overview') }}</h2>
                <a href="{{ route('cms.company') }}" class="text-xs text-blue-600 dark:text-blue-400 hover:underline">{{ __('Manage content') }}</a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                <a href="{{ route('cms.content.index', 'stats') }}" class="text-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $statsCount }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Stats') }}</p>
                </a>
                <a href="{{ route('cms.content.index', 'services') }}" class="text-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $servicesCount }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Services') }}</p>
                </a>
                <a href="{{ route('cms.content.index', 'sectors') }}" class="text-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $sectorsCount }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Sectors') }}</p>
                </a>
                <a href="{{ route('cms.content.index', 'projects') }}" class="text-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $projectsCount }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Projects') }}</p>
                </a>
                <a href="{{ route('cms.content.index', 'leaders') }}" class="text-center p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $leadersCount }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Leaders') }}</p>
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
