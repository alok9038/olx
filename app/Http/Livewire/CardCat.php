<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCat extends Component
{
    public  $subcat ;

    public function render()
    {
        return view('livewire.card-cat',['subcat'=>$this->subcat]);
    }
}
