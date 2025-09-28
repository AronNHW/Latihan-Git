@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            {{-- Mobile view: Only show page numbers --}}
            {{-- No Previous/Next buttons in mobile view as per request --}}
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                {{-- Result count removed as per user request --}}
            </div>

            <div>
                {{-- Pagination removed as per user request --}}
            </div>
        </div>
    </nav>
@endif