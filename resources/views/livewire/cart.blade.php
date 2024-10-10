<section class="cart-page pb-5">
    <div class="container py-5">
        <h3 style="text-align: center;">Giỏ hàng</h3>
    </div>
<div class="cart-container container page-wrapper page-checkout">
    <div class="woocommerce">
        <div class="woocommerce row row-large row-divided">
            <div class="col-12 large-12 pb-0">
                <form class="woocommerce-cart-form">
                    <div class="cart-wrapper sm-touch-scroll">
                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents w-100" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-name" colspan="3">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tạm tính</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts ?? [] as $cartItem)
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <svg wire:click.prevent="removeCartItem('{{ $cartItem->rowId }}')" width="20px" color="#0E8342" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="cursor: pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a target="_blank" href="{{ route('products.detail', $cartItem->product->slug ?? '') }}">
                                                <img width="120px" src="{{ $cartItem->product->getMedia('product-images')->first()?->getUrl() }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Sản phẩm">
                                            <a target="_blank" href="{{ route('products.detail', $cartItem->product->slug ?? '') }}">
                                                {{ $cartItem->product->name }} ({{ \Illuminate\Support\Number::format($cartItem->weight) }} gram)
                                            </a>
                                            <div class="show-for-small mobile-product-price">
                                                <span class="mobile-product-price__qty">{{ $cartItem->qty }} x </span>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        {{ \Illuminate\Support\Number::currency($cartItem->price, 'vnd', 'vi') }}
                                                    </bdi>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="product-price" data-title="Giá">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                {{ \Illuminate\Support\Number::currency($cartItem->price, 'vnd', 'vi') }}
                                            </bdi>
                                        </span>
                                        </td>
                                        <td class="product-quantity" data-title="Số lượng">
                                            <div class="quantity buttons_added">
                                                <input type="number" class="input-text qty text update-qty" data-id="{{ $cartItem->rowId }}" step="1" min="0" max="" value="{{ $cartItem->qty }}" title="SL" size="4" placeholder="" inputmode="numeric">
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Tạm tính">
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
                        </table>
                    </div>
                </form>
            </div>
            <div class="cart-collaterals large-12 col-12 pb-0">
                <div class="cart-sidebar col-inner ">
                    <div class="cart_totals ">
                        <table >
                            <thead>
                                <tr>
                                    <th class="product-name" >Cộng giỏ hàng</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="order-total">
                                    <th>Tổng</th>
                                    <td data-title="Tổng">
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
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout mt-3" style="display: inline-block">
                            <a href="{{ route('checkout') }}" class="checkout-button button alt wc-forward" style="padding: 0 20px; border-radius: 3px">
                                Thanh toán
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $(document).on('change', '.update-qty', function () {
                @this.dispatch('changeQty', { rowId : $(this).data('id'), qty: $(this).val()});
            })
        })
    </script>
</section>