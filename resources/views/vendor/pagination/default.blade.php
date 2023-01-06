@if ($paginator->hasPages())
<div class="pagionation-wrapper m-t-20">
  <nav class="pagination is-centered">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a class="pagination-previous" disabled>&laquo;</a>
    @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous">&lsaquo; Previous</a>
    @endif
      <ul class="pagination-list">
          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
                  <li><span class="pagination-ellipsis">&hellip;</span></li>
              @endif

              {{-- Array Of Links --}}
              @if (is_array($element))
                  @foreach ($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                          <li>
                            <a class="pagination-link is-current" aria-current="page">{{ $page }}</a>
                          </li>
                      @else
                          <li>
                            <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                          </li>
                      @endif
                  @endforeach
              @endif
          @endforeach
      </ul>
      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
              <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">Next &rsaquo;</a>
      @else
          <a class="pagionation-next" disabled>&raquo;</a>
      @endif
  </nav>
</div>
@endif
