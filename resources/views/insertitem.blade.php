@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto" >
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                @error('title')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">price</label>
                                <input type="text" name="price" class="form-control" value="{{old('title')}}">
                                @error('price')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">seller_name</label>
                                <input type="text" name="seller_name" class="form-control" value="{{old('seller_name')}}">
                                @error('seller_name')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">seller_contact</label>
                                <input type="text" name="seller_contact" class="form-control" value="{{old('seller_contact')}}">
                                @error('seller_contact')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">address</label>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}">
                                @error('address')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">city</label>
                                <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                @error('city')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label >category</label>
                                <select name="category" class="form-select">
                                    @foreach ($cat as $c)
                                        @php
                                            if ($c->parent_id == 0) {
                                                $flag = 1;
                                            }
                                            else {
                                                $flag = 0; 
                                            }
                                        @endphp

                                        <option value="{{$c->id}}" <?= ($flag ==1)? "disabled": "";?>>{{$c->title}}</option>
                                    @endforeach
                                </select>
                                    <a href="#model" class="nav-link" data-bs-toggle="modal">create new category</a>
                                    
                                @error('category')
                                <p class="text-danger small">{{message}}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="">image</label>
                                <input type="file" name="image" class="form-control" value="{{old('image')}}">
                                @error('image')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <input type="text" name="description" class="form-control" value="{{old('description')}}">
                                @error('description')
                                    <p class="text-danger small">{{message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                               <input type="submit" name="send" class="btn btn-success">
                            </div>

                        </form>

                        <div class="modal fade" id="model">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="model-body">
                                       <div class="container">
                                        <form action="{{route('insertCat')}}"  method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Main Category</label>
                                                <select name="parent" id="" class="form-select">
                                                    <option value="0">Select main category</option>
                                                    @foreach ($main as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                           <div class="mb-3">
                                            <label for="">Cat title</label>
                                            <input type="text" name="title" class="form-control">
                                           </div>
                                           <div class="mb-3">
                                               <input type="submit" name="send" class="btn btn-success">
                                           </div>

                                        </form>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection