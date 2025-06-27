@php
    if (!isset($page) || $page == null) {
        $page = 1;
    }

    $last_page = isset($paginator) ? $paginator->lastPage() ?? 1 : 1;
@endphp

<div class="row d-flex justify-content-center">
    <button onclick="changePage({{ $page - 1 }})" {{ (bool) ($page > 1) ? '' : 'disabled' }}
        class="col-1 btn btn-white d-flex align-items-center justify-content-center border-0 text-reset">

        @if ((bool) ($page > 1))
            <i class="bi bi-chevron-left"></i>
        @else
            <i class="bi bi-chevron-bar-left"></i>
        @endif

    </button>
    @for ($i = 1; $i <= 9; $i++)
        @php
            $target_page = $page + ($i - 5);
        @endphp
        <button onclick="changePage({{ $target_page }})"
            {{ (bool) ($target_page > 0) && (bool) ($target_page <= $last_page) ? '' : 'disabled' }}
            class="col-1 btn btn-white rounded-2 d-flex align-items-center justify-content-center {{ $target_page == $page ? 'text-reset border-1 border' : 'border-0' }}">
            {{ $target_page }}
        </button>
    @endfor

    <button onclick="changePage({{ $page + 1 }})" {{ (bool) ($page < $last_page) ? '' : 'disabled' }}
        class="col-1 btn btn-white d-flex align-items-center justify-content-center border-0 text-reset">

        @if ((bool) ($page < $last_page))
            <i class="bi bi-chevron-right"></i>
        @else
            <i class="bi bi-chevron-bar-right"></i>
        @endif
    </button>
</div>

<script>
    function changePage(page) {
        const url = new URL(window.location.href);

        url.searchParams.set('page', page);
        window.location.href = url.toString();
    }
</script>
