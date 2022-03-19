@extends('template.main')

@section('content')
    <div class="row item-small container container-fluid">
        <div class="col-lg-2 col-md-2 col-sm-2 col-2 itemm">
            <img src="img/seller1.png" alt="catalog 1" class="img-thumbnail">
            <img src="img/seller1.png" alt="catalog 1" class="img-thumbnail">
            <img src="img/seller1.png" alt="catalog 1" class="img-thumbnail">
            <img src="img/seller1.png" alt="catalog 1" class="img-thumbnail">
        </div>
        <div class="col-lg-6 col-md-10 col-sm-10 col-10 itemmm">
            <img src="img/seller1.png" alt="catalog 1" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <h1 class="mt-4">Telex</h1>
            <h4 class="mb-4">100.000</h4>
            <hr class="bg-info">

            {{-- <p>COLOR</p>
            <div class="color mb-4">
                <div class="btn btn-light">S</div>
                <div class="btn btn-info">M</div>
                <div class="btn btn-danger">L</div>
                <div class="btn btn-warning">XL</div>
            </div> --}}

            <p>SIZE</p>
            <div class="size mb-4">
                <div class="btn btn-light">S</div>
                <div class="btn btn-light">M</div>
                <div class="btn btn-light">L</div>
                <div class="btn btn-light">XL</div>
                <div class="btn btn-light">XXL</div>
            </div>
            
            <p>QUANTITY</p>
            <input type="number" placeholder="1" min="1" max="9">

            <div class="w-100 my-5">
                <button class="btn btn-outline-primary w-100" type="button">Add To Cart</button>
            </div>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis nemo eius quaerat quis non sed assumenda nulla in debitis exercitationem minus repellat nobis, quibusdam esse sit, libero obcaecati! Atque, voluptates.</p>
        </div>
    </div>
@endsection