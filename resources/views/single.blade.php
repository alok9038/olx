@extends('base')

@section('content')

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('products/'.$product->image) }}" class="img-fluid border p-4" alt="">
                </div>
                <div class="col-lg-5">
                    <h5 class="h4 text-capitalize">{{ $product->pro_title }}</h5>
                    <p class="lead fw-bold">₹ {{ $product->price }}</p>

                    <div class=" my-4">
                        <p class=" text-muted">{{ $product->description }}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-transparent">
                            Seller Details
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">Seller Name</div>
                                <div class="col">{{ $product->seller_name }}</div>
                            </div>
                            <div class="row">
                                <div class="col">Contact</div>
                                <div class="col">{{ $product->seller_contact }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4 border-0 shadow">
                        <div class="card-header bg-transparent">
                            Seller Address
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">City</div>
                                <div class="col">{{ $product->city }},</div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">{{ $product->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="col-12">
            <div class="row">
                @foreach ($pro as $item)
                <div class="col-lg-3 mt-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{asset('products/'.$item->image)}}" height="200" width="50" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title h6">₹ {{$item->price}} /-</h4>
                            <h6>{{$item->pro_title}}</h6>
                            <a href="{{ route('single.item',['id'=>$item->id]) }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
