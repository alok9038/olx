@extends('base')

@section('content')
    <div class="container-fluid mt-4">
        <div class="col-12">
            <div class="row">
                @foreach ($pro as $item)
                <div class="col-lg-2 mt-3">
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
                <div class="col-lg-12 mx-auto">
                    {{$pro->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
