 <div>
     <div class="py-3 py-md-5 bg-light">
         <div class="container">
             <h4>My Cart</h4>
             <hr>
             <div class="row">
                 <div class="col-md-12">
                     <div class="shopping-cart">

                         <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h4>Products</h4>
                                 </div>
                                 <div class="col-md-2">
                                     <h4>Price</h4>
                                 </div>

                                 <div class="col-md-4">
                                     <h4>Remove</h4>
                                 </div>
                             </div>
                         </div>
                         @forelse ($cart as $cartItem)
                             @if ($cartItem->product)
                                 <div class="cart-item">
                                     <div class="row">
                                         <div class="col-md-6 my-auto">
                                             <a
                                                 href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                                 <label class="product-name">
                                                     @if ($cartItem->product->ProductImage)
                                                         <img src="{{ $cartItem->product->ProductImage[0]->image }}"
                                                             style="width: 50px; height: 50px"
                                                             alt="{{ $cartItem->product->name }}" />
                                                     @else
                                                         <img src="" style="width: 50px; height: 50px"
                                                             alt="" />
                                                     @endif
                                                     {{ $cartItem->product->name }}
                                                     @if ($cartItem->productColor)
                                                         @if ($cartItem->productColor->color)
                                                             <span>
                                                                 - color: {{ $cartItem->productColor->color->name }}
                                                             </span>
                                                         @endif
                                                     @endif
                                                 </label>
                                             </a>
                                         </div>
                                         <div class="col-md-2 my-auto">
                                             <label class="price">${{ $cartItem->product->salling_price }} </label>
                                         </div>

                                         <div class="col-md-4 col-12 my-auto">
                                             <div class="remove">
                                                 <button type="button"
                                                     wire:click="removeWishlistItem({{ $cartItem->id }})"
                                                     class="btn btn-danger btn-sm">
                                                     <span wire:loading.remove
                                                         wire:target="removeWishlistItem({{ $cartItem->id }})">
                                                         <i class="fa fa-trash"></i> Remove
                                                     </span>
                                                     <span wire:loading
                                                         wire:target="removeWishlistItem({{ $cartItem->id }})">
                                                         <i class="fa fa-trash"></i> Rimoving
                                                     </span>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endif
                         @empty
                             <h4>no cart data</h4>
                         @endforelse
                     </div>
                 </div>
             </div>

         </div>
     </div>

 </div>
