@extends('layout.home')
@section('content')
<section class="awe-section-1">
    <div class="home-slider slick-frame">
        <div class="item"> <a href="gioi-thieu-gufoods.html" class="clearfix"
                title="Giới thiệu GUfoods, GUfoods một chút ngon lành">
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_1839f.jpg?1651052183925')}}">
                    <source media="(min-width: 992px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_1839f.jpg?1651052183925')}}">
                    <source media="(min-width: 569px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_1839f.jpg?1651052183925')}}">
                    <source media="(min-width: 480px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_1839f.jpg?1651052183925')}}">
                    <img src="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_1839f.jpg?1651052183925')}}"
                        alt="Giới thiệu GUfoods, GUfoods một chút ngon lành"
                        class="lazy img-responsive center-block" />
                </picture>
            </a> </div>
        <div class="item"> <a href="top-yeu-thich.html" class="clearfix"
                title="Top bán chạy GUfoods, sản phẩm GUfoods được yêu thích">
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_2839f.jpg?1651052183925')}}">
                    <source media="(min-width: 992px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_2839f.jpg?1651052183925')}}">
                    <source media="(min-width: 569px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_2839f.jpg?1651052183925')}}">
                    <source media="(min-width: 480px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_2839f.jpg?1651052183925')}}">
                    <img src="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_2839f.jpg?1651052183925')}}"
                        alt="Top bán chạy GUfoods, sản phẩm GUfoods được yêu thích"
                        class="lazy img-responsive center-block" />
                </picture>
            </a> </div>
        <div class="item"> <a href="san-pham-moi.html" class="clearfix"
                title="sản phẩm mới GUfoods, GUfoods hàng mới về">
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_3839f.jpg?1651052183925')}}">
                    <source media="(min-width: 992px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_3839f.jpg?1651052183925')}}">
                    <source media="(min-width: 569px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/100/425/912/themes/825705/assets/slider_3839f.jpg?1651052183925')}}">
                    <source media="(min-width: 480px)"
                        srcset="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_3839f.jpg?1651052183925')}}">
                    <img src="{{asset('client/bizweb.dktcdn.net/thumb/grande/100/425/912/themes/825705/assets/slider_3839f.jpg?1651052183925')}}"
                        alt="sản phẩm mới GUfoods, GUfoods hàng mới về" class="lazy img-responsive center-block" />
                </picture>
            </a> </div>
    </div>
</section>
<section class="awe-section-2">
    <div class="container section_product_1 index-margin-top">
        <div class="row">
            <div class="col-md-12">
                <div class="sport-title">
                    <h3><a href="san-pham-moi.html" title="SẢN PHẨM MỚI">SẢN PHẨM MỚI</a></h3>
                    <p>Các thành viên mới chuẩn Healhy-Xanh-Sạch của nhà GU</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 evo-index-product-contain">
                <div class="slick_ajax_tab products-view-grid slick-frame">
                    @foreach($product as $item)
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a href="{{url('home/'.$item->slug)}}"
                                    class="evo-image-pro product-item-photo"
                                    title="{{$item->name}}">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="{{asset('product/thumbnails/'.$item->gallery[0]->image)}}"
                                        alt="{{$item->name}}" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="{{url('home/'.$item->slug)}}"
                                    title="{{$item->name}}">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="
                                        @if(count($item->gallery)>1)
                                        {{asset('product/thumbnails/'.$item->gallery[1]->image)}}
                                        @else
                                        {{asset('product/thumbnails/'.$item->gallery[0]->image)}}
                                        @endif
                                        "
                                        alt="{{$item->name}}" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 46% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="thanh-gao-lut-ngu-coc-an-kieng-gufoods"> <svg
                                        xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">{{number_Format($item->price,0,',','.')}}đ</span>
                                    @if($item->sale!=null)
                                    <span class="old-price">{{number_Format($item->sale,0,',','.')}}đ</span>
                                @endif </div>
                                <h3 class="product-item-name"> <a href="{{url('home/'.$item->slug)}}"
                                        title="{{$item->name}}">{{$item->name}}</a> </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 amore"> <a href="{{url('/all-product')}}" title="Xem thêm 2 sản phẩm">Xem thêm 2 sản
                    phẩm</a> </div>
        </div>
    </div>
</section>
<section class="awe-section-3">
    <div class="container section_product_1 index-margin-top">
        <div class="row">
            <div class="col-md-12">
                <div class="sport-title">
                    <h3><a href="top-yeu-thich.html" title="TOP YÊU THÍCH">TOP YÊU THÍCH</a></h3>
                    <p>Các thành viên lành và ngon chuẩn Healhy-Xanh-Sạch được bạn thương yêu thích tại GUfoods</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 evo-index-product-contain">
                <div class="slick_ajax_tab products-view-grid slick-frame">
                    @foreach($top_love as $item)
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a href="{{url('home/'.$item->slug)}}"
                                    class="evo-image-pro product-item-photo"
                                    title="{{$item->name}}">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="{{asset('product/thumbnails/'.$item->gallery[0]->image)}}"
                                        alt="{{$item->name}}" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="{{url('home/'.$item->slug)}}"
                                    title="{{$item->name}}">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="
                                        @if(count($item->gallery)>1)
                                        {{asset('product/thumbnails/'.$item->gallery[1]->image)}}
                                        @else
                                        {{asset('product/thumbnails/'.$item->gallery[0]->image)}}
                                        @endif
                                        "
                                        alt="{{$item->name}}" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 46% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="thanh-gao-lut-ngu-coc-an-kieng-gufoods"> <svg
                                        xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">{{number_Format($item->price,0,',','.')}}đ</span>
                                    @if($item->sale!=null)
                                    <span class="old-price">{{number_Format($item->sale,0,',','.')}}đ</span>
                                @endif </div>
                                <h3 class="product-item-name"> <a href="{{url('home/'.$item->slug)}}"
                                        title="{{$item->name}}">{{$item->name}}</a> </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 amore"> <a href="{{url('/all-product')}}" title="Xem thêm sản phẩm">Xem thêm 2 sản
                    phẩm</a> </div>
        </div>
    </div>
</section>
<section class="awe-section-4">
    <div class="section_feature_collection_single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="fix-image"> <a class="single-col-img" href="#"
                            title="Fruity Morning"> <img class="lazy mx-auto d-block"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/evo_collection_feature_img_1.jpg?1651052183925"
                                alt="Fruity Morning" /> </a> </div>
                    <div class="feature-collection-content">
                        <h3> <a href="#" title="Fruity Morning">Fruity Morning</a> </h3>
                        <p> Bữa sáng lành mạnh với một chút vitamin và chất xơ từ dâu tây và táo, một chút protein
                            và chất béo lành tính từ bở đậu phộng không đường và sữa chua hy lạp, cùng một chút tâm
                            huyết từ sản phẩm nhà GU. </p> <a class="single-col-more"
                            href="#" title="Mua Ngay">Mua Ngay</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 section_feature_collection_single_2">
                    <div class="row">
                        <div class="col-lg-12 fix-image-2 order-lg-2 order-md-2 order-1"> <a
                                class="single-col-img" href="#" title="Gymmer Essential">
                                <img class="lazy mx-auto d-block"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/evo_collection_feature_img_2.jpg?1651052183925"
                                    alt="Gymmer Essential" /> </a> </div>
                        <div class="order-md-1 order-lg-1 order-2 col-lg-12">
                            <div class="feature-collection-content">
                                <h3> <a href="#" title="Gymmer Essential">Gymmer
                                        Essential</a> </h3>
                                <p> Cung cấp đạm, béo và chất xơ cho những bữa ăn nhanh, gọn mà vẫn bảo toàn được
                                    hương, vị và sắc của các nguyên liệu. </p> <a class="single-col-more"
                                    href="#" title="Mua Ngay">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_feature_collection lazy"
        data-src="../bizweb.dktcdn.net/100/425/912/themes/825705/assets/evo_collection_index_bg_1839f.jpg?1651052183925">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center text-center">
                        <p class="custom-build-text-1"></p>
                        <p class="custom-build-text-2">Hearty Meal</p>
                        <p class="custom-build-text-3">Bữa ăn thịnh soạn và đầy đủ dưỡng chất không cần sự cầu kì
                            trong các phương pháp chế biến. Một chiếc bánh gạo lứt kèm một vài nguyên liệu thuận tự
                            nhiên là đủ.</p>
                        <div class="row align-self-center button-gender">
                            <div class="col-6 col-sm-6 col-lg-6"> <a
                                    href="https://www.instagram.com/gufoodsvietnam/tagged/"
                                    class="justify-content-center" title="XEM CÔNG THỨC">XEM CÔNG THỨC</a> </div>
                            <div class="col-6 col-sm-6 col-lg-6"> <a href="#"
                                    class="justify-content-center" title="MUA NGAY">MUA NGAY</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="awe-section-5">
    <div class="container section_product_1 index-margin-top">
        <div class="row">
            <div class="col-md-12">
                <div class="sport-title">
                    <h3><a href="banh-ngon-it-ngot.html" title="BÁNH NGON ÍT NGỌT">BÁNH NGON ÍT NGỌT</a></h3>
                    <p>Mỗi khi buồn miệng bạn thương hãy tìm đến GU để được ăn ngon mà không lo chiếc cân nhập nhô
                        nha.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 evo-index-product-contain">
                <div class="slick_ajax_tab products-view-grid slick-frame">
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="copy-of-copy-of-copy-of-banh-gao-lut-mam-gufoods.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/6f46b19cceea510d0f8e2370d9e1ed38-tn.jpg?v=1650388701000"
                                        alt="Bánh gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="copy-of-copy-of-copy-of-banh-gao-lut-mam-gufoods.html"
                                    title="Bánh gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/c30cf608b507dd0eb5cb3c1e8a399b93-tn.jpg?v=1650388701000"
                                        alt="Bánh gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 16% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="copy-of-copy-of-copy-of-banh-gao-lut-mam-gufoods"> <svg
                                        xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">66.900₫</span> <span
                                        class="old-price">80.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="copy-of-copy-of-copy-of-banh-gao-lut-mam-gufoods.html"
                                        title="Bánh gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên">Bánh
                                        gạo lứt mầm vị yến mạch GUfoods - Ăn kiêng, Thực dưỡng, Thuần tự nhiên</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-ngu-coc-hanh-nhan-gufoods-vi-hat-dinh-duong-lanh-manh-bo-duong-thom-ngon.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm ngon">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-san-pham-banh-ngu-coc-hanh-nhan-gufoods-2-vi-moi.png?v=1651122524000"
                                        alt="Bánh ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm ngon" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-ngu-coc-hanh-nhan-gufoods-vi-hat-dinh-duong-lanh-manh-bo-duong-thom-ngon.html"
                                    title="Bánh ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm ngon">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/d85f7e59e3deaa428fe5d3ab726fde9b-d8ae7f6b-a79b-4b43-b9a3-51edb58685c3.jpg?v=1651122524000"
                                        alt="Bánh ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm ngon" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 41% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-ngu-coc-hanh-nhan-gufoods-vi-hat-dinh-duong-lanh-manh-bo-duong-thom-ngon">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">69.900₫</span> <span
                                        class="old-price">119.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-ngu-coc-hanh-nhan-gufoods-vi-hat-dinh-duong-lanh-manh-bo-duong-thom-ngon.html"
                                        title="Bánh ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm ngon">Bánh
                                        ngũ cốc hạnh nhân GUfoods - Vị hạt dinh dưỡng- Lành mạnh, Bổ dưỡng, Thơm
                                        ngon</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-ngu-coc-hanh-nhan-gufoods-vi-nguyen-ban-lanh-manh-bo-duong-thom-ngon-1.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm ngon">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/446f7b1a09ce04f582c9b9b790f8e9e5.jpg?v=1651122555000"
                                        alt="Bánh ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm ngon" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-ngu-coc-hanh-nhan-gufoods-vi-nguyen-ban-lanh-manh-bo-duong-thom-ngon-1.html"
                                    title="Bánh ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm ngon">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/d85f7e59e3deaa428fe5d3ab726fde9b.jpg?v=1651122555000"
                                        alt="Bánh ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm ngon" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 25% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-ngu-coc-hanh-nhan-gufoods-vi-nguyen-ban-lanh-manh-bo-duong-thom-ngon-1">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">187.900₫</span> <span
                                        class="old-price">250.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-ngu-coc-hanh-nhan-gufoods-vi-nguyen-ban-lanh-manh-bo-duong-thom-ngon-1.html"
                                        title="Bánh ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm ngon">Bánh
                                        ngũ cốc hạnh nhân GUfoods - Vị nguyên bản 250g - Lành mạnh, Bổ dưỡng, Thơm
                                        ngon</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-mix-3-vi-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-8-7bdddb97-5631-41a7-8917-0aeb76186fde-6ba112bf-c08b-453c-937d-43f412f359ff-499d7fbe-4df6-47b4-ab11-1f3fce875a84-c049b451-0a77-4731-ba77-525cb2ad1479.png?v=1650358058000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-mix-3-vi-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/1-2-689adbaa-3998-460d-a972-0a630c3e8ea9-ed6be594-a218-46de-a0bf-23263113b011-7cb03d19-f6c0-46bf-bdcf-2aca1bf832c9-d90dac27-674d-4034-963f-1f5185bf9d94.jpg?v=1650358058000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 29% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-mix-3-vi-lanh-manh-thom-ngon-phu-hop-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">187.900₫</span> <span
                                        class="old-price">265.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-mix-3-vi-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                        title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon, Phù hợp Eat clean">Bánh
                                        Biscotti ăn kiêng Nguyên cám GUfoods - Vị mix 3 vị - Lành mạnh, Thơm ngon,
                                        Phù hợp Eat clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-socola-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-5-47ca5d9b-427a-4415-8745-6285a11e6a7f-8ca8e9b8-3e44-4dc6-8ff5-4e3a2aa130bf.png?v=1650358484000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-socola-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/1-2-689adbaa-3998-460d-a972-0a630c3e8ea9-ed6be594-a218-46de-a0bf-23263113b011-7cb03d19-f6c0-46bf-bdcf-2aca1bf832c9.jpg?v=1650358484000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 37% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-socola-lanh-manh-thom-ngon-phu-hop-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">61.900₫</span> <span
                                        class="old-price">99.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-socola-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                        title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù hợp Eat clean">Bánh
                                        Biscotti ăn kiêng Nguyên cám GUfoods - Vị socola - Lành mạnh, Thơm ngon, Phù
                                        hợp Eat clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-nguyen-ban-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-3-2675ba50-5838-4e5f-9487-0fbfe38b6ff6-e3b7f571-eb51-4e49-90a1-f68fbd906b4e.png?v=1650358710000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-nguyen-ban-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                    title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon, Phù hợp Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-2-70860c57-691a-4db1-be01-4fc89fb1be0a-9e977751-91bd-4288-bb48-7e7648fc5a7a.png?v=1650358710000"
                                        alt="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon, Phù hợp Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 43% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-nguyen-ban-lanh-manh-thom-ngon-phu-hop-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">50.900₫</span> <span
                                        class="old-price">89.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-biscotti-an-kieng-nguyen-cam-gufoods-vi-nguyen-ban-lanh-manh-thom-ngon-phu-hop-eat-clean.html"
                                        title="Bánh Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon, Phù hợp Eat clean">Bánh
                                        Biscotti ăn kiêng Nguyên cám GUfoods - Vị nguyên bản - Lành mạnh, Thơm ngon,
                                        Phù hợp Eat clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="copy-of-thanh-gao-lut-ngu-coc-an-kieng-gufoods-2-vi-rong-bien-mix-trai-cay-lanh-manh-an-kieng-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Thanh gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/b5469f3d-3dce-4fe5-81f0-613f7fe37144-532279fa-bf28-4024-9d39-ab208aa09733.jpg?v=1650224831000"
                                        alt="Thanh gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng, Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="copy-of-thanh-gao-lut-ngu-coc-an-kieng-gufoods-2-vi-rong-bien-mix-trai-cay-lanh-manh-an-kieng-eat-clean.html"
                                    title="Thanh gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-3-c65c90e6-d157-4f05-b0f7-370f8f6cb454-782adc65-6c3c-4ea8-9740-76ba35fe0991.png?v=1650224831000"
                                        alt="Thanh gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng, Eat clean" />
                                </a> <a class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="copy-of-thanh-gao-lut-ngu-coc-an-kieng-gufoods-2-vi-rong-bien-mix-trai-cay-lanh-manh-an-kieng-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a> </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">104.900₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="copy-of-thanh-gao-lut-ngu-coc-an-kieng-gufoods-2-vi-rong-bien-mix-trai-cay-lanh-manh-an-kieng-eat-clean.html"
                                        title="Thanh gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng, Eat clean">Thanh
                                        gạo lứt ngũ cốc ăn kiêng GUfoods ( Vị mix trái cây) - Lành mạnh, Ăn kiêng,
                                        Eat clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-thuc-duong-gao-lut-gufoods-vi-rong-bien-goi-30g-hu-100g-hu-250g-an-kieng-eat-clean-thuan-chay-healthy.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay, Healthy">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/viongbien.jpg?v=1650222700000"
                                        alt="Bánh thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay, Healthy" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-thuc-duong-gao-lut-gufoods-vi-rong-bien-goi-30g-hu-100g-hu-250g-an-kieng-eat-clean-thuan-chay-healthy.html"
                                    title="Bánh thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay, Healthy">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/vi-me-den-250g-001-d3f6726d-3d8e-44a4-ae7f-bd4fcb1192ce.png?v=1650222700000"
                                        alt="Bánh thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay, Healthy" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 37% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-thuc-duong-gao-lut-gufoods-vi-rong-bien-goi-30g-hu-100g-hu-250g-an-kieng-eat-clean-thuan-chay-healthy">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">49.900₫</span> <span
                                        class="old-price">79.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-thuc-duong-gao-lut-gufoods-vi-rong-bien-goi-30g-hu-100g-hu-250g-an-kieng-eat-clean-thuan-chay-healthy.html"
                                        title="Bánh thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay, Healthy">Bánh
                                        thực dưỡng gạo lứt GUfoods - Vị rong biển - Ăn kiêng, Eat Clean, Thuần chay,
                                        Healthy</a> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 amore"> <a href="banh-ngon-it-ngot.html" title="Xem thêm 7 sản phẩm">Xem thêm 7
                    sản phẩm</a> </div>
        </div>
    </div>
</section>
<section class="awe-section-6">
    <div class="container section_product_1 index-margin-top">
        <div class="row">
            <div class="col-md-12">
                <div class="sport-title">
                    <h3><a href="eat-clean-chuan-gu.html" title="EAT CLEAN CHUẨN GU">EAT CLEAN CHUẨN GU</a></h3>
                    <p>Ai nói eat clean nhàm chán ? Trường hợp đó chỉ xảy ra khi bạn thương chưa biết đến GU thôi.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 evo-index-product-contain">
                <div class="slick_ajax_tab products-view-grid slick-frame">
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="bo-hanh-nhan-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh"> <img
                                        class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-anh-bo-hat-hanh-nhan-gufoods-150g.jpg?v=1652070353000"
                                        alt="Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh" /> </a> <a
                                    class="evo-image-pro product-item-photo-2"
                                    href="bo-hanh-nhan-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                    title="Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh"> <img
                                        class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-anh-bo-hat-hanh-nhan-gufoods-150g-5.jpg?v=1652070354000"
                                        alt="Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh" /> </a> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="bo-hanh-nhan-an-kieng-gufoods-tu-nhien-lanh-manh"> <svg
                                        xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a> </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">239.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="bo-hanh-nhan-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                        title="Bơ Hạnh nhân ăn kiêng GUfoods - Tự nhiên, lành mạnh">Bơ Hạnh nhân ăn
                                        kiêng GUfoods - Tự nhiên, lành mạnh</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="bo-hat-dieu-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bơ Hạt điều ăn kiêng GUfoods - Tự nhiên, lành mạnh"> <img
                                        class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-anh-bo-hat-dieu-gufoods.jpg?v=1652066958000"
                                        alt="Bơ Hạt điều ăn kiêng GUfoods - Tự nhiên, lành mạnh" /> </a> <a
                                    class="evo-image-pro product-item-photo-2"
                                    href="bo-hat-dieu-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                    title="Bơ Hạt điều ăn kiêng GUfoods - Tự nhiên, lành mạnh"> <img
                                        class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-anh-bo-hat-dieu-gufoods-1.jpg?v=1652066959000"
                                        alt="Bơ Hạt điều ăn kiêng GUfoods - Tự nhiên, lành mạnh" /> </a> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="bo-hat-dieu-an-kieng-gufoods-tu-nhien-lanh-manh"> <svg
                                        xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a> </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">159.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="bo-hat-dieu-an-kieng-gufoods-tu-nhien-lanh-manh.html"
                                        title="Bơ Hạt điều ăn kiêng GUfoods - Tự nhiên, lành mạnh">Bơ Hạt điều ăn
                                        kiêng GUfoods - Tự nhiên, lành mạnh</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="granola-an-kieng-gao-lut-yen-mach-gufoods-giam-can-tap-gym-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Granola ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat Clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/granola-ngu-coc-yen-mach.jpg?v=1650935675000"
                                        alt="Granola ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat Clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="granola-an-kieng-gao-lut-yen-mach-gufoods-giam-can-tap-gym-eat-clean.html"
                                    title="Granola ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat Clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/granola-ngu-coc-yen-mach-2.jpg?v=1650935675000"
                                        alt="Granola ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat Clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 34% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="granola-an-kieng-gao-lut-yen-mach-gufoods-giam-can-tap-gym-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">55.900₫</span> <span
                                        class="old-price">85.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="granola-an-kieng-gao-lut-yen-mach-gufoods-giam-can-tap-gym-eat-clean.html"
                                        title="Granola ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat Clean">Granola
                                        ăn kiêng gạo lứt yến mạch GUfoods- Vị ngũ cốc - Giảm Cân, Tập Gym, Eat
                                        Clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="pho-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Phở gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/d56554b3-caa7-41c9-8e98-30cf6a8d87dd-14064cc7-0308-4078-bc7f-1d2467d7720d-b3c141f1-f3a2-4ead-bdad-14056789cc47-298cd65d-17ba-4e88-92af-0d4b1fdb7514.jpg?v=1650383534000"
                                        alt="Phở gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="pho-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    title="Phở gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/nutrition-facts-4a42fb05-6e3f-4a8d-a303-af69de86b468-36ca6f74-21b1-49b4-b8c3-8f7ec8918270-0d2896f7-c4ca-44ff-a16a-a3341b4966da.jpg?v=1650383534000"
                                        alt="Phở gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 35% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="pho-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">50.900₫</span> <span
                                        class="old-price">78.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="pho-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                        title="Phở gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">Phở
                                        gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="bun-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bún gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/836e4bd6-8462-4190-8197-87ce668a3fa4-0f60eed7-69a6-44fd-b162-7df551a4063a-29ee851b-8bb2-4ff6-a8bf-b8575fbac3fd.jpg?v=1650383792000"
                                        alt="Bún gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="bun-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    title="Bún gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/nutrition-facts-4a42fb05-6e3f-4a8d-a303-af69de86b468-36ca6f74-21b1-49b4-b8c3-8f7ec8918270.jpg?v=1650383792000"
                                        alt="Bún gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 28% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="bun-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">55.900₫</span> <span
                                        class="old-price">78.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="bun-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                        title="Bún gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">Bún
                                        gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="banh-trang-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bánh tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/da733bf1722d47d9bb83e5d2d95925da-tplv-o3syd03w52-origin-jpeg-jpeg.jpg?v=1651637070000"
                                        alt="Bánh tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="banh-trang-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                    title="Bánh tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/hinh-anh-banh-trang-khoai-lang-tim-gufoods-200g-1-ae433b92-3b90-4f25-8eb8-06982f52e525.jpg?v=1651637070000"
                                        alt="Bánh tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 39% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="banh-trang-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">59.900₫</span> <span
                                        class="old-price">99.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="banh-trang-gao-lut-huu-co-an-kieng-gufoods-giam-can-thuc-duong-eat-clean.html"
                                        title="Bánh tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat clean">Bánh
                                        tráng gạo lứt hữu cơ ăn kiêng GUfoods 200g - Giảm cân, Thực dưỡng, Eat
                                        clean</a> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="snack-rong-bien-say-gion-mix-snack-gao-lut-gufoods-gion-ngon-giau-dinh-duong.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Snack rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/001-2-aec1f505-fc41-4c3f-ada7-d881c7839e41-da60ca4e-bd0f-4ded-bd4c-971b877bfa6a.png?v=1650382533000"
                                        alt="Snack rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="snack-rong-bien-say-gion-mix-snack-gao-lut-gufoods-gion-ngon-giau-dinh-duong.html"
                                    title="Snack rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/148c563e-1a80-433d-a5c0-fedcc9622948-ff96e359-5a21-4b99-829c-96dca785cd7e.jpg?v=1650382533000"
                                        alt="Snack rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 43% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="snack-rong-bien-say-gion-mix-snack-gao-lut-gufoods-gion-ngon-giau-dinh-duong">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">42.900₫</span> <span
                                        class="old-price">75.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="snack-rong-bien-say-gion-mix-snack-gao-lut-gufoods-gion-ngon-giau-dinh-duong.html"
                                        title="Snack rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng">Snack
                                        rong biển sấy giòn nguyên chất GUfoods - Giòn ngon & Giàu dinh dưỡng</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="evo-product-block-item">
                            <div class="box-image"> <a
                                    href="bun-gao-lut-an-kieng-gufoods-huyet-rong-giam-can-thuc-duong-eat-clean.html"
                                    class="evo-image-pro product-item-photo"
                                    title="Bún gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/1-c2cc76ba-3ff3-4eab-bd72-e805e11bff7d-b3529951-e54f-4381-9f57-6e2fcb918216.png?v=1650381054000"
                                        alt="Bún gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a> <a class="evo-image-pro product-item-photo-2"
                                    href="bun-gao-lut-an-kieng-gufoods-huyet-rong-giam-can-thuc-duong-eat-clean.html"
                                    title="Bún gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat clean">
                                    <img class="lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/425/912/products/3-2-421fe384-6d37-411d-8fd5-5b4fd1510076-00eb85c7-bd8d-4320-a469-0e403956515f.jpg?v=1650381054000"
                                        alt="Bún gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat clean" />
                                </a>
                                <div class="label_product"> <span class="label_sale"> 47% </span> </div> <a
                                    class="ajax_addtocart js-btn-wishlist" href="javascript:void(0)"
                                    title="Thêm vào danh sách yêu thích"
                                    data-handle="bun-gao-lut-an-kieng-gufoods-huyet-rong-giam-can-thuc-duong-eat-clean">
                                    <svg xmlns='http://www.w3.org/2000/svg'
                                        xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                        viewBox='0 0 51.997 51.997' style='enable-background:new 0 0 51.997 51.997;'
                                        xml:space='preserve'>
                                        <path
                                            d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                    </svg> </a>
                            </div>
                            <div class="product-item-details">
                                <div class="price-box"> <span class="price">39.900₫</span> <span
                                        class="old-price">75.000₫</span> </div>
                                <h3 class="product-item-name"> <a
                                        href="bun-gao-lut-an-kieng-gufoods-huyet-rong-giam-can-thuc-duong-eat-clean.html"
                                        title="Bún gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat clean">Bún
                                        gạo lứt ăn kiêng GUfoods huyết rồng 500g - Giảm cân, Thực dưỡng, Eat
                                        clean</a> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 amore"> <a href="eat-clean-chuan-gu.html" title="Xem thêm 15 sản phẩm">Xem thêm
                    15 sản phẩm</a> </div>
        </div>
    </div>
</section> --}}
<section class="awe-section-7">
    <div class="section_brands">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="sport-title">
                        <h3>NHỮNG BẠN THƯƠNG #EATCLEAN</h3>
                        <p> Tinh thần tự do, niềm say mê cuộc sống và bản năng kết hợp những điều không thể. </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slick_brand slick-frame">
                        <div class="item"> <a href="https://www.instagram.com/p/CPAruwxlHCM/"
                                target="_blank" title="Stay Healthy with Jade"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_1.jpg?1651052183925"
                                    alt="Stay Healthy with Jade" class="mx-auto d-block img-responsive lazy" />
                            </a> </div>
                        <div class="item"> <a href="https://www.instagram.com/p/CPxR4FoFQMV/"
                                target="_blank" title="yes_iamha"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_2.jpg?1651052183925"
                                    alt="yes_iamha" class="mx-auto d-block img-responsive lazy" /> </a> </div>
                        <div class="item"> <a href="https://www.instagram.com/p/CPGK_JslqrR/"
                                target="_blank" title="Stay Healthy Easy"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_3.jpg?1651052183925"
                                    alt="Stay Healthy Easy" class="mx-auto d-block img-responsive lazy" /> </a>
                        </div>
                        <div class="item"> <a href="https://www.instagram.com/p/COsoOaCFneN/"
                                target="_blank" title="7.10 healthy"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_4.jpg?1651052183925"
                                    alt="7.10 healthy" class="mx-auto d-block img-responsive lazy" /> </a> </div>
                        <div class="item"> <a href="https://www.instagram.com/p/COnS8-9FBnX/"
                                target="_blank" title="uynkitchen"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_5.jpg?1651052183925"
                                    alt="uynkitchen" class="mx-auto d-block img-responsive lazy" /> </a> </div>
                        <div class="item"> <a href="https://www.instagram.com/p/COZfKH8Fcru/"
                                target="_blank" title="Hiền Healthy"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/425/912/themes/825705/assets/partner_6.jpg?1651052183925"
                                    alt="Hiền Healthy" class="mx-auto d-block img-responsive lazy" /> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awe-section-8">
    <div class="container section_blogs">
        <div class="row">
            <div class="col-md-12">
                <div class="sport-title">
                    <h3><a href="cong-thuc.html" title="Công thức chuẩn GU">Công thức chuẩn GU</a></h3>
                    <p> GU mời bạn thương khám phá các món ăn kiêng chuẩn #eatclean được làm từ những thực phẩm lành
                        tính được bán tại GUfoods. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slick_blog slick-frame">
                    @foreach($post as $item)
                    <div class="item-news-index">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12"> <a
                                    href="{{ url('tin-tuc/' . $item->slug) }}"
                                    title="{{$item->name}}"> <img
                                        src="{{ asset('post/' . $item->image) }}"
                                        alt="{{$item->name}}"
                                        class="" /> </a> </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 item-news-content">
                                <h4> <a href="{{ url('tin-tuc/' . $item->slug) }}"
                                    title="{{$item->name}}">{{$item->name}}</a> </h4>
                                <div class="zone-content"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
