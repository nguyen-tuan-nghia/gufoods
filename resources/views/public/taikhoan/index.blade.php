@extends('layout.home')
@section('content')
<style>
    .title-info {
    font-weight: 400;
    font-size: 14px;
    color: #333;
    margin-bottom: 10px;
    display: block;
}
.title-account {
    font-size: 19px;
    font-weight: 400;
    color: #212B25;
    margin-bottom: 7px;
    text-transform: uppercase;
}
h1, .title-head {
    font-size: 19px;
    line-height: 22px;
    font-weight: 400;
    color: #212B25;
    text-transform: uppercase;
    margin-bottom: 27px;
}
 .active{
    color:#c1b463;
}
</style>
    <section class="bread-crumb" style="margin-top: 5%">
        <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> <a
                        itemprop="item" href="{{url('/')}}" title="Trang chủ"> <span itemprop="name">Trang chủ</span>
                        <meta itemprop="position" content="1">
                    </a> </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"> <strong
                        itemprop="name">Trang khách hàng</strong>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </section>
    <br>
    <section class="signup page_customer_account" style="margin-bottom: 10%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                    <div class="block-account">
                        <h5 class="title-account margin-top-10">Trang tài khoản</h5>
                        <p><strong> chào, <span style="color:;">{{Auth::user()->name}}</span> !</strong></p>
                        <ul>
                            <li> <a disabled="disabled" class="title-info {{ request()->is('tai-khoan') ? 'active' : '' }}" href="{{url('/tai-khoan')}}"
                                    title="Thông tin tài khoản">Thông tin tài khoản</a> </li>
                            <li> <a class="title-info {{ request()->is('cart/history') ? 'active' : '' }}" href="{{url('/cart/history')}}" title="Đơn hàng của bạn">Đơn hàng của
                                    bạn</a> </li>
                        </ul>
                    </div>
                </div>
                @yield('taikhoan')
            </div>
        </div>
    </section>
@endsection
