@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link maincl2"><i class="{{trans('css.icon1')}}"></i> @lang('pagination.prev') </span>

            </li>
        @else
            <li class="page-item">
                <a class="page-link maincl2" href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="{{trans('css.icon1')}}"></i> @lang('pagination.prev')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link maincl2" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next1') <i class="{{trans('css.icon')}}"></i></a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link maincl2">@lang('pagination.next1') <i class="{{trans('css.icon')}}"></i></span>
            </li>
        @endif
    </ul>
@endif
