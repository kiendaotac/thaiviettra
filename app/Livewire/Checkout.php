<?php

namespace App\Livewire;

use App\Enums\OrderStatus;
use App\Models\ProductVariant;
use App\Models\Shop\Order;
use App\Models\Shop\Product;
use Gloudemans\Shoppingcart\Facades\Cart as ShopCart;
use Illuminate\Support\Str;
use Livewire\Component;

class Checkout extends Component
{
    protected $carts;
    public $name, $phone, $email, $address;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'alpha_num', 'numeric'],
            'email' => ['required', 'email'],
            'address' => ['required', 'string']
        ];
    }

    public function mount()
    {
        $this->getData();
    }

    public function render()
    {
        return view('livewire.checkout', ['carts' => $this->carts]);
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

    public function checkout()
    {
        $this->getData();
        $this->validate();
        $totalPrice = $this->carts->sum(fn($item) => $item->qty * $item->price);
        $order = Order::create([
            'number' => uniqid('ORDER'),
            'total_price' => $totalPrice,
            'status' => OrderStatus::New,
            'currency' => 'vnd',
            'shipping_price' => 0,
            'shipping_method' => 'COD',
            'notes' => '',
        ]);
        $order->address()->create([
            'country' => 'vn',
            'street' => $this->address,
        ]);
        foreach ($this->carts as $cart) {
            $order->items()->create([
                'shop_product_id' => $cart->product->id,
                'qty' => $cart->qty,
                'unit_price' => $cart->price
            ]);
        }
    }
}
