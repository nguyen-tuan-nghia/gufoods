<div class="clearfix cart_heading">
    <h4 class="cart_title">Giỏ hàng</h4>
    <div class="cart_btn-close" title="Đóng giỏ hàng"> <svg class="Icon Icon--close" viewBox="0 0 16 14">
            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
        </svg> </div>
</div>
<div class="cart_body">
    @if (Cart::count() == 0)
        <div class="cart-empty"><span class="empty-icon"><i class="ico ico-cart"></i></span>
            <div class="btn-cart-empty"><a class="btn btn-default" href="{{url('/')}}" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
            </div>
        </div>
    @else
        @php
            $tongSoPhu = 0;
        @endphp
        @foreach (Cart::content() as $val)
            @php
                $tongSoPhu += $val->qty * $val->price;
            @endphp
            <div class="clearfix cart_product productid-64553406"><a class="cart_image"
                    href="{{ url('home/' . $val->options->slug) }}">
                    <img src="{{ asset('product/thumbnails/' . $val->options->image) }}" alt="{{ $val->name }}">
                    </a>
                <div class="cart_info">
                    <div class="cart_name"><a href="{{ url('home/' . $val->options->slug) }}">
                            {{ $val->name }}</a></div>
                    <div class="row-cart-left">
                        <div class="cart_item_name">
                            <div><label class="cart_quantity">Số lượng: x {{ $val->qty }}</label>
                            </div>
                        </div>
                        <div class="text-right cart_prices">
                            <div class="cart__price"><span
                                    class="cart__sale-price">{{ number_format($val->price, 0, ',', '.') }}đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="cart-footer">
            <hr>
            <div class="clearfix">
                <div class="cart__subtotal">
                    <div class="cart__col-6">Tổng tiền:</div>
                    <div class="text-right cart__totle"><span
                            class="total-price">{{ number_format($tongSoPhu, 0, ',', '.') }}đ</span>
                    </div>
                </div>
            </div>
            <div class="cart__btn-proceed-checkout-dt"><a href="{{ url('/cart') }}"> <button type="button"
                        type="button" class="button btn btn-default cart__btn-proceed-checkout"
                        id="btn-proceed-checkout" title="Thanh toán">Thanh
                        toán</button></a> </div>
        </div>
    @endif



</div>
