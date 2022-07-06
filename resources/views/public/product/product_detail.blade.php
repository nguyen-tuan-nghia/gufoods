@extends('layout.home')
@section('content')
    <link rel="stylesheet" href="{{ asset('lightslider.css') }}" />
    <style>
        ul {
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }

        .demo .item {
            margin-bottom: 60px;
        }

        .content-slider li {
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }

        .content-slider h3 {
            margin: 0;
            padding: 70px 0;
        }

        .demo {
            width: 800px;
        }

    </style>
    <section class="bread-crumb" style="padding-top: 80px">
        <div class="container">
            <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="{{ url('/') }}" title="Trang chủ">
                        <span itemprop="name">Trang chủ</span>
                        <meta itemprop="position" content="1" />
                    </a>
                </li>
                @if ($category->count() == 1)
                    @foreach ($category as $item)
                        <li class="home" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{{ url('danh-muc/' . $item->slug) }}" title="{{ $item->name }}">
                                <span itemprop="name">{{ $item->name }}</span>
                                <meta itemprop="position" content="1" />
                            </a>
                        </li>
                    @endforeach
                @else
                    @foreach ($category as $item)
                        @if ($item->category_parent == 0)
                            <li class="home" itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="{{ url('danh-muc/' . $item->slug) }}"
                                    title="{{ $item->name }}">
                                    <span itemprop="name">{{ $item->name }}</span>
                                    <meta itemprop="position" content="1" />
                                </a>
                            </li>
                            @foreach ($category as $item2)
                                @if ($item2->category_parent == $item->id)
                                    <li class="home" itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">
                                        <a itemprop="item" href="{{ url('danh-muc/' . $item2->slug) }}"
                                            title="{{ $item2->name }}">
                                            <span itemprop="name">{{ $item2->name }}</span>
                                            <meta itemprop="position" content="1" />
                                        </a>
                                    </li>
                                    @foreach ($category as $item3)
                                        @if ($item3->category_parent == $item2->id)
                                            <li class="home" itemprop="itemListElement" itemscope
                                                itemtype="https://schema.org/ListItem">
                                                <a itemprop="item" href="{{ url('danh-muc/' . $item3->slug) }}"
                                                    title="{{ $item3->name }}">
                                                    <span itemprop="name">{{ $item3->name }}</span>
                                                    <meta itemprop="position" content="1" />
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <strong>
                        <span itemprop="name">{{ $product->name }}</span>
                        <meta itemprop="position" content="3" />
                    </strong>
                </li>
            </ul>
        </div>
    </section>
    <section class="product product-margin" itemscope="" itemtype="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="details-product">
                        <div class="product-bottom row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="clearfix" style="max-width:474px;">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        @foreach ($product->gallery as $item)
                                            <li data-thumb="{{ asset('product/thumbnails/' . $item->image) }}">
                                                <img src="{{ asset('product/thumbnails/' . $item->image) }}" />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 details-pro">
                                <div class="product-top clearfix">
                                    <div class="product-with-wish-list">
                                        <h1 class="title-head">{{ $product->name }}</h1>
                                    </div>
                                    {{-- <div class="sku-product clearfix"> <span class="variant-sku" itemprop="sku"
                                            content="GUFNBF0870">GUFNBF0870</span> <span class="d-none"
                                            itemprop="brand" itemtype="http://schema.org/Brand" itemscope="">
                                            <meta itemprop="name" content="GUfoods">
                                        </span> </div> --}}
                                </div>
                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <div class="price-box clearfix"> <span class="special-price"> <span
                                                class=""
                                                style="font-size: 20px;color:#ed3020">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                        </span> <!-- Giá Khuyến mại -->
                                        @if ($product->sale != null)
                                            <span class="old-price" itemprop="priceSpecification" itemscope=""
                                                itemtype="http://schema.org/priceSpecification"> <del
                                                    class="price product-price-old">{{ number_format($product->sale, 0, ',', '.') }}đ</del>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-product">
                                    <div class="clearfix form-group row">
                                        <div class="col-sm-5 row">
                                            <button style="background: #FFF" class="col-sm-2 min button">-</button><input
                                                class="col-sm-6 qty" id="product_quantity{{ $product->id }}"
                                                type="number" min="1" value="1"><button style="background: #FFF"
                                                class="col-sm-2 plus button">+</button>
                                        </div>
                                        <div class="btn-mua"> <button type="submit" data-role="addtocart"
                                                style="background: black" onclick="cartstore({{ $product->id }})"
                                                class="col btn btn-lg btn-gray btn-cart btn_buy add_to_cart">Thêm vào
                                                giỏ</button> </div>
                                    </div>
                                    <input type="hidden" id="product_image{{ $product->id }}"
                                        value="{{ $product->gallery[0]->image }}">
                                    <input type="hidden" id="product_price{{ $product->id }}"
                                        value="{{ $product->price }}">
                                    <input type="hidden" id="product_name{{ $product->id }}"
                                        value="{{ $product->name }}">
                                    <input type="hidden" id="product_slug{{ $product->id }}"
                                        value="{{ $product->slug }}">
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class="accordion evo-main-product-contents" id="accordionExample">
                                        {{ $product->content }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container product-gray product_recent">
            <div class="row">
                <div class="col-lg-12">
                    <div class="related-product">
                        <div class="home-title">
                            <h2>Sản phẩm liên quan</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 evo-index-product-contain">
                                <div class="slick_ajax_tab products-view-grid slick-frame">
                                    @foreach ($product_all as $item)
                                        <div class="item">
                                            <div class="evo-product-block-item">
                                                <div class="box-image"> <a href="{{ url('home/' . $item->slug) }}"
                                                        class="evo-image-pro product-item-photo"
                                                        title="{{ $item->name }}">
                                                        <img class="lazy"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                            data-src="{{ asset('product/thumbnails/' . $item->gallery[0]->image) }}"
                                                            alt="{{ $item->name }}" />
                                                    </a> <a class="evo-image-pro product-item-photo-2"
                                                        href="{{ url('home/' . $item->slug) }}"
                                                        title="{{ $item->name }}">
                                                        <img class="lazy"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                            data-src="
                                                                @if (count($item->gallery) > 1) {{ asset('product/thumbnails/' . $item->gallery[1]->image) }}
                                                        @else
                                                        {{ asset('product/thumbnails/' . $item->gallery[0]->image) }} @endif
                                                                " alt="{{ $item->name }}" />
                                                    </a>
                                                    <div class="label_product"> <span class="label_sale"> 46% </span>
                                                    </div> <a class="ajax_addtocart js-btn-wishlist"
                                                        href="javascript:void(0)" title="Thêm vào danh sách yêu thích"
                                                        data-handle="thanh-gao-lut-ngu-coc-an-kieng-gufoods"> <svg
                                                            xmlns='http://www.w3.org/2000/svg'
                                                            xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                                            viewBox='0 0 51.997 51.997'
                                                            style='enable-background:new 0 0 51.997 51.997;'
                                                            xml:space='preserve'>
                                                            <path
                                                                d='M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z' />
                                                        </svg> </a>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="price-box"> <span
                                                            class="price">{{ number_Format($item->price, 0, ',', '.') }}đ</span>
                                                        @if ($item->sale != null)
                                                            <span
                                                                class="old-price">{{ number_Format($item->sale, 0, ',', '.') }}đ</span>
                                                        @endif
                                                    </div>
                                                    <h3 class="product-item-name"> <a
                                                            href="{{ url('home/' . $item->slug) }}"
                                                            title="{{ $item->name }}">{{ $item->name }}</a> </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('lightslider.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
    <script>
        var addInput = '.qty'; //This is the id of the input you are changing
        var n = 1; //n is equal to 1

        //Set default value to n (n = 1)
        $(addInput).val(n);

        //On click add 1 to n
        $('.plus').on('click', function() {
            $(addInput).val(++n);
        });

        $('.min').on('click', function() {
            //If n is bigger or equal to 1 subtract 1 from n
            if (n >= 1) {
                $(addInput).val(--n);
            } else {
                //Otherwise do nothing
            }
        });
    </script>
@endsection
