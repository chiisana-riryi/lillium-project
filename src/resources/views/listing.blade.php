@extends('templates.main')

@section('title')
    Lilium - Listing
@endsection


@section('content')
    <div class="container text-light">
        <div class="row">
            <div class="col">
                <h1>
                    Product Listing
                </h1>
            </div>
        </div>
        <hr class="border-light">

        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-12 mb-4 mb-md-0">
                        <h3> Properties </h3>
                        {{-- categories --}}
                        @include('partials.elements.categorymenu', ['compact_mode' => true])
                    </div>
                </div>
                <div class="card back-card rounded-4 text-light pb-1">
                    <div class="row d-flex justify-content-center align-items-end pt-3">
                        <div class="col-8">
                            {{-- page controls --}}
                            @include('partials.elements.paginatorcontrols')
                            <hr class="mt-4 mb-2 opacity-50">
                        </div>
                    </div>
                    <div class="row my-2 mx-2 mb-3 d-flex justify-content-between align-items-end">
                        {{-- showing --}}
                        @include('partials.elements.pageslabel')

                        <div class="col-auto d-flex align-items-center justify-content-end border p-2 rounded-3">
                            {{-- search bar --}}
                            @include('partials.elements.searchbar')
                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col item-card card rounded-top-4 p-3">
                            {{-- header --}}
                            <div class="p-0 row text-light d-flex">
                                <div class="col-2 col-md-1 border-end border-2 py-3">
                                    <h3 class="text-center m-0"> ID </h3>
                                </div>
                                <div class="col-2 border-end border-2 py-3 d-none d-md-block">
                                    <h3 class="text-center m-0"> Main Img </h3>
                                </div>
                                <div class="col-3 col-md-2 border-end border-2 py-3">
                                    <h3 class="text-center m-0"> Name </h3>
                                </div>
                                <div class="col-2 border-end border-2 py-3 d-none d-md-block">
                                    <h3 class="text-center m-0"> Price </h3>
                                </div>
                                <div class="col-7 col-md-5">
                                    <h3 class="text-center m-0 py-3"> Edit </h3>
                                </div>
                            </div>
                            <div class="row">
                                <hr class="border-5 m-0 border-light opacity-50">
                            </div>
                            {{-- items --}}
                            @foreach ($paginator as $p)
                                <div class="p-0 row d-flex align-items-center text-light">
                                    <div class="col-2 col-md-1 border-end border-2 py-3 h-100">
                                        <h6 class="text-start m-0"> {{ $p->product_id }} </h6>
                                    </div>
                                    <div class="col-2 border-end border-2 py-3 d-none d-md-block">
                                        <h6 class="text-center m-0 d-block"> <img class="img-fluid"
                                                src="https://placehold.co/200"> </h6>
                                    </div>
                                    <div class="col-3 col-md-2 border-end border-2 py-3 h-100">
                                        <h6 class="text-start m-0 "> {{ $p->product_name }} </h6>
                                    </div>
                                    <div class="col-2 border-end border-2 py-3 h-100 d-none d-md-block">
                                        <h6 class="text-end m-0"> Price </h6>
                                    </div>
                                    <div class="col-7 col-md-5">
                                        <h6 class="text-start m-0 py-3">
                                            </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr class="border-2 m-0 border-light opacity-50">
                                </div>
                            @endforeach
                            {{-- footer --}}
                            <div class="p-0 row text-light d-flex">
                                <div class="col-2 col-md-1 border-end border-2 py-3">
                                </div>
                                <div class="col-2 border-end border-2 py-3 d-none d-md-block">
                                </div>
                                <div class="col-3 col-md-2 border-end border-2 py-3">
                                </div>
                                <div class="col-2 border-end border-2 py-3 d-none d-md-block">
                                </div>
                                <div class="col-7 col-md-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
