@if ($paginator->hasPages())
<div class="d-flex justify-content-between align-items-center mb-2">

    {{-- Showing Results --}}
    <div class="small text-muted">
        Showing {{ $paginator->firstItem() }}
        to {{ $paginator->lastItem() }}
        of {{ $paginator->total() }} results
    </div>

    {{-- Pagination --}}
    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">

    {{-- Previous Page Link --}}
    <li>
        <a href="{{ $paginator->previousPageUrl() ?? 'javascript:void(0);' }}"
           class="{{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <i class="bi bi-arrow-left"></i>
        </a>
    </li>

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)

        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li>
                <a href="javascript:void(0);">
                    <i class="bi bi-dot"></i>
                </a>
            </li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                <li>
                    <a href="{{ $url }}"
                       class="{{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        {{ $page }}
                    </a>
                </li>
            @endforeach
        @endif

    @endforeach

    {{-- Next Page Link --}}
    <li>
        <a href="{{ $paginator->nextPageUrl() ?? 'javascript:void(0);' }}"
           class="{{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
            <i class="bi bi-arrow-right"></i>
        </a>
    </li>

</ul>
</div>
@endif
