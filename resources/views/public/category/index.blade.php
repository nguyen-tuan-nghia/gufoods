@extends('layout.home')
@section('content')
    <style>
        .danhmuc {
            display: flex;
            flex-wrap: nowrap;

        }
        .loc li{
            padding-bottom:20px
        }
    </style>
    <div class="container" style="padding-top: 100px">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="{{ url('/') }}" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1" />
                        </a>
                    </li>
                    @foreach ($danh_muc as $item)
                        @if ($category->category_parent == $item->id)
                            @foreach ($danh_muc as $item2)
                                @if ($item->category_parent == $item2->id)
                                    <li class="home" itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">
                                        <a itemprop="item" href="{{ url('danh-muc/' . $item2->slug) }}"
                                            title="{{ $item2->name }}">
                                            <span itemprop="name">{{ $item2->name }}</span>
                                            <meta itemprop="position" content="1" />
                                        </a>
                                    </li>
                                    <li class="home" itemprop="itemListElement" itemscope
                                    itemtype="https://schema.org/ListItem">
                                    <a itemprop="item" href="{{ url('danh-muc/' . $item->slug) }}" title="{{ $item->name }}">
                                        <span itemprop="name">{{ $item->name }}</span>
                                        <meta itemprop="position" content="1" />
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="{{ url('danh-muc/' . $category->slug) }}"
                            title="{{ $category->name }}">
                            <span itemprop="name">{{ $category->name }}</span>
                            <meta itemprop="position" content="1" />
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <br>
        <div class="container row danhmuc">
            <div class="col-md-3" style="padding-right: 23px">
                <div class="left-side">
                    <h3 class="agileits-sear-head">lọc theo giá</h3>
                    <ul class="loc" style="list-style: none;font-size:20px">
                        <li>
                            <input type="checkbox" id="Check1" onclick="selected(this.id,10000,30000)"
                                class="checked">
                            <span class="span">10.000 - 30.000 vnđ</span>
                        </li>
                        <li>
                            <input type="checkbox" id="Check2" onclick="selected(this.id,30000,60000)"
                                class="checked">
                            <span class="span">30.000 - 60.000 vnđ</span>
                        </li>
                        <li>
                            <input type="checkbox" id="Check3" onclick="selected(this.id,60000,90000)"
                                class="checked">
                            <span class="span">60.000 - 90.000 vnđ</span>
                        </li>
                        <li>
                            <input type="checkbox" id="Check4" onclick="selected(this.id,90000,150000)"
                                class="checked">
                            <span class="span">90.000 - 150.000 vnđ</span>
                        </li>
                        <li>
                            <input type="checkbox" id="Check5" onclick="selected(this.id,150000,200000)"
                                class="checked">
                            <span class="span">150.000 - 200.000 vnđ</span>
                        </li>
                        <li>
                            <input type="checkbox" id="Check6" onclick="selected(this.id,200000,1000000000000)"
                                class="checked">
                            <span class="span">200.000 trở lên vnđ</span>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="deal-leftmk left-side" style="">
                    <h3 class="agileits-sear-head">Sản phẩm được quan tâm</h3>
                    <div class="products" style="">
                        @foreach ($sanpham_quantam as $key => $val)
                                    <div class="row " style="">
                                        <div class="col-sm-3">
                                            <div class="image-none">
                                                <a href="{{ url('home/' . $val->slug) }}" aria-label="">
                                                    <img src="{{ asset('product/thumbnails/' . $val->gallery[0]->image) }}"
                                                        data-src="{{ asset('product/thumbnails/' . $val->gallery[0]->image) }}"
                                                        class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="" loading="lazy" srcset=""
                                                        data-srcset="{{ asset('product/thumbnails/' . $val->gallery[0]->image) }}"
                                                        sizes="(max-width: 300px) 100vw, 300px" title="PET MART 4"> </a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a
                                                        href="{{ url('home/' . $val->slug) }}" style="color: black"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $val->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                        @endforeach
                    </div>
                </div>
                <!-- //deals -->
            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="col-md-9">
                <div class="wrapper">
                    <!-- first section -->
                    <div id="load_category" class="row product-sec1">
                        @include('public.category.ajax')
                    </div>
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <script>
        function selected(id, min, max) {
            for (var i = 1; i <= 6; i++) {
                document.getElementById("Check" + i).checked = false;
            }
            document.getElementById(id).checked = true;
            if (document.getElementById(id).checked = true) {
                var min = min;
                var max = max;
                $.ajax({
                    url: "{{ url('/category/fill') . '/' . $category->id }}",
                    method: "POST",
                    data: {
                        min: min,
                        max: max
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data == 0) {
                            $("#load_category").html("<center><h3>Sản phẩm không tồn tại</h3></center>");
                        } else {
                            $("#load_category").html(data);
                        }
                    }
                });
            }
        }
    </script>
@endsection
