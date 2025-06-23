<form id="searchForm" class="m-0">
    <div class="input-group">
        <i class="bi bi-search"></i>
        <input type="text" name="search_query" class="form-control border-0 border-5 rounded-0 py-0 shadow-none bg-invisible text-light"
            id="search" value="{{ isset($search_query) ? $search_query : '' }}" placeholder="Search">
    </div>
    <hr class="m-1">
</form>

<script>
    document.getElementById('searchForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const input = document.getElementById('search').value;
        const url = new URL(window.location.href);  

        url.searchParams.set('search_query', input);
        console.log(url);

        window.location.href = url.toString();
    });
</script>