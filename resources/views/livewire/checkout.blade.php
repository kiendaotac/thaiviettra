<section class="cart-page pt-5">
    <div class="container">
        <h3 style="text-align: center;">Thanh toán</h3>
    </div>
    <div class="cart-container container page-wrapper page-checkout">
        <form>
            <h4>Thông tin thanh toán</h4>
            <div class="form-group">
                <label>Họ và tên</label>
                <input wire:model.debounce="name" type="text" placeholder="Họ và tên">
                @error('name')
                <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </diV>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input wire:model.debounce="phone" type="text" placeholder="Số điện thoại">
                @error('phone')
                <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </diV>
            <div class="form-group">
                <label>Email</label>
                <input wire:model.debounce="email" type="text" placeholder="Email">
                @error('email')
                <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </diV>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea wire:model.debounce="address" class="form-control w-100 col-12"></textarea>
                @error('address')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </diV>
            <h4 id="order_review_heading">Đơn hàng của bạn</h4>
            <div id="order_review" class="woocommerce-checkout-review-order">
                <table class="shop_table woocommerce-checkout-review-order-table w-100">
                    <thead>
                        <tr>
                            <th class="product-name">Sản phẩm</th>
                            <th class="product-name">Đơn giá</th>
                            <th class="product-name">Số lượng</th>
                            <th class="product-total">Tạm tính</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carts ?? [] as $cartItem)
                        <tr class="cart_item">
                            <td class="product-name">
                                <a target="_blank" href="{{ route('products.detail', $cartItem->product->slug ?? '') }}">
                                    {{ $cartItem->product->name }} ({{ \Illuminate\Support\Number::format($cartItem->weight) }} gram)
                                </a>
                            </td>
                            <td class="product-total">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi>
                                        {{ \Illuminate\Support\Number::currency($cartItem->price, 'vnd', 'vi') }}
                                    </bdi>
                                </span>
                            </td>
                            <td>
                                <strong class="product-quantity">×&nbsp;{{ $cartItem->qty }}</strong>
                            </td>
                            <td class="product-total">
                                <span class="woocommerce-Price-amount amount">
                                    @php
                                        $totalPrice = $cartItem->qty * $cartItem->price;
                                    @endphp
                                        <bdi>
                                            {{ \Illuminate\Support\Number::currency($totalPrice, 'vnd', 'vi') }}
                                        </bdi>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="order-total mt-5">
                            <th>Tổng</th>
                            <td>
                                <strong>
                                    <span class="woocommerce-Price-amount amount">
                                        @php
                                            $prices = $carts->sum(fn($item) => $item->qty * $item->price);
                                        @endphp
                                            <bdi>
                                                {{ \Illuminate\Support\Number::currency($prices, 'vnd', 'vi') }}
                                            </bdi>
                                    </span>
                                </strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <button class="w-auto mt-4" wire:click.prevent="checkout">Đặt hàng</button>
        </form>
    </div>
</section>