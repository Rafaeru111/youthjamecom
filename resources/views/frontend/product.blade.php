@extends('layouts.front')

@section('title')
Youthjam
@endsection


@section('content')

<div class="py-5" >
    <div class="container">
        <h2>Most Popular Products</h2>
        <div class="row">
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($f_products as $f)
                <div class="item" style="padding-top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <img width="100%" height="270px" src="{{ asset('assets/uploads/product/'. $f->image) }}" alt="Product image">
                            <br> <br>
                                <h5 class="card-title text-center"> {{$f->name}}</h5>
                                <small> {{$f->selling_price}} Pesos</small>
                        </div>
                    </div>
                </div>
                @endforeach
      
            </div>
          
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        // Ouwl carousel
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:3
                            },
                            1000:{
                                items:5
                            }
                        }
                    })

    </script>
@endsection