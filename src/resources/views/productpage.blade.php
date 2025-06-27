@extends('templates.main')

@section('title')
    Lilium - {{ $product->product_name }}
@endsection

@section('content')
    <div class="container">
        <div class="row p-2 text-light">
            <div class="col-12 col-md-6 order-1 order-md-1">
                {{-- Image Carousel --}}
                <div id="image-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @if (count($images) > 0)
                            @php
                                $i = 0;
                            @endphp

                            @foreach ($images as $pi)
                                <div
                                    class="carousel-item {{ $i == 0 ? 'active' : '' }} ratio ratio-1x1 border border-2 rounded-4">
                                    <img class="d-block w-100 rounded-4 img-fluid object-fit-cover"
                                        src="/storage/{{ $pi->image_directory }}">


                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        @else
                            <div class="carousel-item rounded-4 active ratio ratio-1x1 border border-5 rounded-2">
                                <img class="d-block w-100 img-fluid object-fit-cover" src="https://placehold.co/200">
                            </div>
                        @endif
                    </div>
                    {{-- Controls --}}
                    <div class="row d-flex justify-content-center gap-5 mt-3">
                        <a class="col-auto btn btn-white d-flex justify-content-center align-items-center"
                            href="#image-carousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="col-auto btn btn-white d-flex justify-content-center align-items-center"
                            href="#image-carousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 order-2 order-md-2 mt-4 mt-md-0 d-flex flex-column">
                <h1> {{ $product->product_name }} </h1>
                <h2> {{ $product->subcategory_name }} </h2>
                <hr class="opacity-75 border-2">
                <h2 class="fw-bold"> ${{ $product->price }} </h2>
                <hr class="opacity-75 border-2">
                <p class="fs-5 py-3">
                    {{ $product->description }}
                </p>


                <div class="row d-flex align-items-end justify-content-center w-100 h-100">
                    <btn class="fs-5 btn btn-white border border-1 col-4 px-4 py-3"> Buy </btn>
                </div>
            </div>
        </div>

    </div>
@endsection
