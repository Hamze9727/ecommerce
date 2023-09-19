<?php

namespace App\Http\Livewire\Frontend\Ckeckout;

use App\Models\Carts;
use Livewire\Component;

class CkeckoutShow extends Component
{
    public $carts, $TotalProductAmount;
    public function totalproductAmount()
    {
        $this->carts = Carts::where('user_id', auth()->user()->id)->get();
        foreach ($this->carts as $CartItem) {
            $this->TotalProductAmount += $CartItem->product->salling_price * $CartItem->quantity;
        }
        return $this->TotalProductAmount;
    }
    public function render()
    {
        $this->TotalProductAmount = $this->totalproductAmount();
        return view('livewire.frontend.ckeckout.ckeckout-show', [
            'TotalProductAmount' => $this->TotalProductAmount
        ]);
    }
}
