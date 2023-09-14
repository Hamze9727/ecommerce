<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{

    public function AddToWishlist($productId)
    {


        if (Auth::check()) {
            if (Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {
                session()->flash('message', 'already added');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'already added',
                    'type' => 'error',
                    'status' => 409
                ]);
            } else {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->emit('wishlistadd&update');
                session()->flash('message', 'added successfuly');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'added successfuly',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        } else {
            //session()->flash('message', 'plese login first');
            $this->dispatchBrowserEvent('message', [
                'text' => 'plese login first',
                'type' => 'info',
                'status' => 401
            ]);
            return  /* false; */  redirect('admin/Products')->with('message', 'login first');
        }
    }
    public $category, $product, $productcolorselectedquantity;

    public function colorselected($productColorId)
    {
        $productColor = $this->product->ProductColors()->where('id', $productColorId)->first();
        $this->productcolorselectedquantity = $productColor->quantity;
        // dd($productColorId);
        if ($this->productcolorselectedquantity == 0) {
            $this->productcolorselectedquantity = 'outofstock';
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product,

        ]);
    }
}
