<div class="item-card card pt-2 px-2 text-light">

    @foreach ($categories_map as $key => $subcats)
        @php
            $category = unserialize($key);
            $collapse_id = "cat-collapse-{$category['value']}";
        @endphp

        <div class="p-2 mb-2 rounded-2 border border-1">
            <div
                class="row h3 text-reset text-decoration-none d-flex justify-content-center align-items-center m-0">
                <div class="col">
                    <a class= "text-reset text-decoration-none" id="category-collapse-{{ $collapse_id }}"
                        data-bs-toggle="collapse" onclick="storeCollapseState('{{ $collapse_id }}')"
                        href="#{{ $collapse_id }}">
                        <i id="category-chevron-down-{{ $collapse_id }}"
                            class="bi bi-chevron-down d-none btn btn-white fs-3"></i>
                        <i id="category-chevron-up-{{ $collapse_id }}"
                            class="bi bi-chevron-right btn btn-white fs-3"></i>
                    </a>
                </div>

                <div class="col-auto me-2 p-0">
                    {{ $category['value'] }}
                </div>

            </div>
            <div class="collapse" id={{ $collapse_id }}>
                @foreach ($subcats as $subcat)
                    <div class="row px-3">
                        <hr class="m-0">
                        <button
                            class="btn btn-white text-decoration-none my-1 text-end {{ in_array($subcat['key'], $active_subcats) ? 'bg-light text-dark' : '' }}"
                            onclick="subcategoryPressed({{ $subcat['key'] }})">
                            {{ $subcat['value'] }}
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

</div>

<script>
    let shown = localStorage.getItem('category-collapse-shown');

    if (shown == null) {
        shown = [];
    } else {
        shown = shown.split(",")
    }

    // shows elements stored in localstorage of key 'shown'
    for (let i = 0; i < shown.length; i++) {
        const shownId = shown[i];
        try {
            const shownElement = document.getElementById(shownId);
            const chevronUp = document.getElementById("category-chevron-up-" + shownId)
            const chevronDown = document.getElementById("category-chevron-down-" + shownId)

            shownElement.classList.add("show")

            chevronUp.classList.add("d-none");
            chevronDown.classList.remove("d-none");
        } catch (e) {
            console.log(e);
        }
    }

    // stores collapse states of category dropdowns to local storage of key 'shown'
    function storeCollapseState(id) {
        console.log("category-collapse-" + id)
        const element = document.getElementById("category-collapse-" + id);
        const ariaExpanded = element.getAttribute('aria-expanded');

        const chevronUp = document.getElementById("category-chevron-up-" + id)
        const chevronDown = document.getElementById("category-chevron-down-" + id)


        if (ariaExpanded == "true") {
            shown.push(id);
            chevronUp.classList.add("d-none");
            chevronDown.classList.remove("d-none");

            localStorage.setItem('category-collapse-shown', shown);
        } else {
            chevronUp.classList.remove("d-none");
            chevronDown.classList.add("d-none");

            shown = shown.filter(x => x != id);
            localStorage.setItem('category-collapse-shown', shown);
        }

    }

    function subcategoryPressed(subcategoryId) {
        subcategoryId = "" + subcategoryId

        const urlParams = new URLSearchParams(window.location.search);
        let subcategories = urlParams.get('subcats');

        if (subcategories != null) {
            subcategories = subcategories.split(",");


            if (Array.isArray(subcategories)) {
                if (subcategories.includes(subcategoryId)) {
                    subcategories = subcategories.filter(x => x != subcategoryId);
                } else {
                    subcategories.push(subcategoryId);
                }
            }
        } else {
            subcategories = [, subcategoryId];
        }

        const url = new URL(window.location.href);
        url.searchParams.set('subcats', subcategories);
        url.searchParams.set('page', 1);

        window.location.href = url.toString();
    };
</script>