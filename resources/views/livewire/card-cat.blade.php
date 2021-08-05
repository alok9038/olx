<div>
    <div class="card mt-3">
        <div class="card-header h6 text-white bg-secondary">{{ $subcat->title }}</div>
        <div class="card-body">
            <ul class="">
                @foreach($subcat->child as $p)
                    <li class=" "><a href="{{route('filter',['id'=>$p->id])}}" class="text-dark" style="text-decoration: none; list-style:none;">{{$p->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
