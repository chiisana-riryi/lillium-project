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

        <div class="row d-flex justify-content-center">
            <div class="col-8 col-lg-4 col-xl-3 pe-0 mb-4 mb-md-0">
                <h3> Properties </h3>

                @include('partials.elements.categorymenu')
            </div>

            <hr class="d-md-none">

            <div class ="col-12 col-lg-8 col-xl-9">
                <div class="row d-flex justify-content-center py-3">
                    <div class="col-8">
                        @include('partials.elements.paginatorcontrols')
                    </div>
                </div>

                <div class="row my-2 mx-2 d-flex justify-content-end">
                    @include('partials.elements.pageslabel')
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="d-inline-flex flex-wrap justify-content-start">
                        {{-- @for ($i = 0; $i < 100; $i++) --}}
                        @foreach ($paginator as $p)
                            <div class="p-1 col-4 col-xl-3 my-1">
                                <div class="item-card card border-1 text-light rounded-3 p-1">
                                    <img class="img rounded-3 w-100" src="https://placehold.co/200">
                                    <h6 class="my-2 text-end"> {{ $p->subcategory_name }}</h6>
                                    <h5 class="pt-2 my-0 text-truncate"> {{ $p->product_name }} </h5>
                                    <hr class="my-1">
                                    <h6 class="my-0 text-end"> {{ $p->price }} </h6>
                                    <hr class="my-1">
                                    <p class="fs-smaller truncate-multiline m-0">
                                        {{ $p->description }}
                                    </p>
                                    <hr class="my-1">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
