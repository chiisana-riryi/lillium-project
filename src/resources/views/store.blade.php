@extends('templates.main')

@section('title')
    Lilium - Store
@endsection

@section('head-content')
    <style>
        .truncate-multiline {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endsection



@section('content')
    <div class="container text-light">
        <div class="row">
            <div class="col">
                <h1>
                    Store
                </h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                @include('partials.elements.searchbar')
            </div>
        </div>
        <hr class="border-light">

        <div class="row">
            <div class="col-12 col-md-3 pe-0 mb-4 mb-md-0">
                <h3> Categories</h3>
                <div class="item-card card pt-2 px-2 text-light">
                    <a class="p-2 mb-2 rounded-2 border border-1 text-reset text-decoration-none">
                        Category 1
                    </a>
                    <a class="p-2 mb-2 rounded-2 border border-1 text-reset text-decoration-none">
                        Category 2
                    </a>
                    <a class="p-2 mb-2 rounded-2 border border-1 text-reset text-decoration-none">
                        Category 3
                    </a>
                </div>
            </div>

            <hr class="d-md-none">

            <div class ="col-12 col-md-9">
                <div class="row d-flex justify-content-center">
                    <div class="d-inline-flex flex-wrap justify-content-start">
                        @for ($i = 0; $i < 100; $i++)
                            <div class="p-1 col-3 col-lg-2 my-1">
                                <div class="item-card card border-1 text-light rounded-3 p-1">
                                    <img class="img rounded-3 w-100" src="https://picsum.photos/id/{{ $i * 10 }}/200">
                                    <h5 class="pt-2 my-0 text-truncate"> Item {{ $i }} </h5>
                                    <hr class="my-1">
                                    <h6 class="my-0 text-end"> Price </h6>
                                    <hr class="my-1">
                                    <p class="fs-smaller truncate-multiline m-0">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. In possimus libero
                                        nesciunt
                                        atque
                                        ad
                                        cum? Harum reiciendis sit nostrum ab sed accusamus accusantium blanditiis, fuga eum
                                        omnis
                                        dolore
                                        laboriosam officia?
                                    </p>
                                    <hr class="my-1">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
