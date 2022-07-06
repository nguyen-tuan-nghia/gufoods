@extends('layout.home')
@section('content')
<div class="container" style="padding-top: 100px">
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
              <div> {{ $post->links() }}</div>
@endsection
