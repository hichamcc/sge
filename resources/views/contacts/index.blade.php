<x-layouts.app :title="__('Contact Submissions')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Contact Submissions</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Inquiries received from the website contact form.</p>
            </div>
            <span class="inline-flex items-center rounded-md bg-green-50 px-3 py-1 text-sm font-medium text-green-700 ring-1 ring-inset ring-green-600/20 dark:bg-green-500/10 dark:text-green-400 dark:ring-green-500/20">
                {{ $contacts->total() }} total
            </span>
        </div>

        <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Organization</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Subject</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Message</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-900">
                        @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-400 dark:text-gray-500">{{ $contact->id }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $contact->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                    <a href="mailto:{{ $contact->email }}" class="hover:underline">{{ $contact->email }}</a>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $contact->organization ?? '—' }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    @if($contact->subject)
                                        <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 dark:bg-blue-500/10 dark:text-blue-400 dark:ring-blue-500/20">
                                            {{ ucfirst(str_replace('-', ' ', $contact->subject)) }}
                                        </span>
                                    @else
                                        <span class="text-gray-400 dark:text-gray-500">—</span>
                                    @endif
                                </td>
                                <td class="max-w-xs truncate px-6 py-4 text-sm text-gray-500 dark:text-gray-400" title="{{ $contact->message }}">
                                    {{ Str::limit($contact->message, 80) }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-400 dark:text-gray-500">
                                    {{ $contact->created_at->format('M d, Y') }}<br>
                                    <span class="text-xs">{{ $contact->created_at->format('g:i A') }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-gray-300 dark:text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">No contact submissions yet</p>
                                        <p class="text-gray-400 dark:text-gray-500 text-xs mt-1">Submissions from the website contact form will appear here.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($contacts->hasPages())
            <div class="flex justify-center">
                {{ $contacts->links() }}
            </div>
        @endif
    </div>
</x-layouts.app>
