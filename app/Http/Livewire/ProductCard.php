<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="col-lg-2 mt-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{asset('products/image')}}" height="200" width="50" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title h6">₹ 900/-</h4>
                            <h6>this is title</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        blade;
    }
}
