<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductDetail extends Component
{
    public $product, $products, $variant, $qty = 1;
    public function mount($slug)
    {
        $this->product = Product::query()->where('slug', $slug)->with(['media', 'variants'])->firstOrFail();
        $this->products = Product::query()->inRandomOrder()->take(10)->get();
        $this->variant = $this->product->variants->first()->id ?? null;
    }
    public function render()
    {
        return view('livewire.product-detail')->layoutData(['product' => $this->product]);
    }

    public function addToCart()
    {
        if ($this->variant) {
            $productVariant = $this->product->variants->find($this->variant);
            $data = [
                'id' => $this->product->id,
                'name' => $this->product->name,
                'qty' => $this->qty,
                'price' => $productVariant->price,
                'weight' => $productVariant->weight ?? 0,
                'options' => [
                    'variant' => $this->variant,
                ]
            ];
        } else {
            $data = [
                'id' => $this->product->id,
                'name' => $this->product->name,
                'qty' => $this->qty,
                'price' => $this->product->price,
                'weight' => $this->product->weight_value ?? 0,
            ];
        }
        Cart::add($data);

        $this->dispatch('orderSuccess');
        $this->dispatch('updateCart');
    }

    public function buyNow()
    {
        if ($this->variant) {
            $productVariant = $this->product->variants->find($this->variant);
            $data = [
                'id' => $this->product->id,
                'name' => $this->product->name,
                'qty' => $this->qty,
                'price' => $productVariant->price,
                'weight' => $productVariant->weight,
                'options' => [
                    'variant' => $this->variant,
                ]
            ];
        } else {
            $data = [
                'id' => $this->product->id,
                'name' => $this->product->name,
                'qty' => $this->qty,
                'price' => $this->product->price,
                'weight' => $this->product->weight,
            ];
        }
        Cart::add($data);
        $this->redirect(route('cart'));
    }
}
