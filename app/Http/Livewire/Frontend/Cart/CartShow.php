<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Carts;
use Livewire\Component;

class CartShow extends Component
{
    public $cart;
    public function render()
    {
        $this->cart = Carts::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show', [
            'cart' => $this->cart
        ]);
    }
}
