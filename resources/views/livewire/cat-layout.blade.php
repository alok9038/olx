<div>
    <div class="container mt-4">
        <div class="row">
            @foreach ($cat as $c)

            @php
                if($c->child->count() < 1)
                continue;
            @endphp
            <div class="col-lg-3">
                @livewire('card-cat',['subcat'=>$c])
            </div>
            @endforeach
        </div>
    </div>
</div>
