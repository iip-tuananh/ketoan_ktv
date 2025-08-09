
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination clearfix">
            @if (!$paginator->onFirstPage())
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"
                                                                       aria-hidden="true"></i></a>
                </li>
                <li class="page-item disabled"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                            class="fa fa-angle-left" aria-hidden="true"></i></a></li>

            @endif

                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active page-item disabled"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                                         href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())

                    <li class="page-item"><a class="page-link"
                                             href="{{ $paginator->nextPageUrl() }}"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li class="page-item disabled"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                @endif

        </ul>
    </nav>
@endif

