<?php

namespace App\Livewire;

use App\Models\ProductVariant;
use App\Models\Shop\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as ShopCart;

class Cart extends Component
{
    protected $carts;
    public function mount()
    {
        $this->getData();
    }
    public function render()
    {
        return view('livewire.cart', ['carts' => $this->carts]);
    }

    public function removeCartItem($rowId)
    {
        ShopCart::remove($rowId);
        $this->getData();
        $this->dispatch('updateCart');
    }

    public function getData(): void
    {
        $cart = ShopCart::instance('default')->content();

        foreach ($cart ?? [] as $cartItem) {
            $product = Product::query()->with('media')->find($cartItem->id);
            if ($cartItem->options->has('variant')) {
                $product->variant = ProductVariant::find($cartItem->options->variant);
            }
            $cartItem->product = $product;
        }

        $this->carts = $cart;
    }

    #[On('changeQty')]
    public function changeQty($rowId, $qty)
    {
        ShopCart::update($rowId, ['qty' => max($qty, 0)]);
        $this->getData();
    }
}
