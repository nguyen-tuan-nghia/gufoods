@extends('layout.home')
@section('content')
<div class="row container" style="padding: 8%">
<h3 style="text-align:center">Tất cả sản phẩm</h3>
<div class="row">
    @foreach($product as $item)
    <div class="col-sm-2 item">
        <div class="evo-product-block-item">
            <div class="box-image"> <a href="{{url('home/'.$item->slug)}}"
                    class="evo-image-pro product-item-photo"
                    title="{{$item->name}}">
                    <img class=""
                    src="{{asset('product/thumbnails/'.$item->gallery[0]->image)}}"
                        alt="{{$item->name}}" />
                </a> <a class="evo-image-pro product-item-photo-2"
                    href="{{url('home/'.$item->slug)}}"
                    title="{{$item->name}}">
                    <img class=""
                        src="
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
@endsection
