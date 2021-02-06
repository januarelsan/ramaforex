@if ($paginator->hasPages())
    <nav>
        <ul class="uk-pagination uk-flex-center uk-margin-medium-top">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                
            @else
                <li>                    
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-left fa-xs"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            
                            <li class="uk-active"><a href="#">{{ $page }}</a></li>
                        @else                        
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>                    
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-angle-right fa-xs"></i></a>
                </li>
            @else
                
            @endif
        </ul>
    </nav>
@endif
