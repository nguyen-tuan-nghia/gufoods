@extends('public.taikhoan.index')
@section('taikhoan')
<div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
    <h1 class="title-head margin-top-10">Thông tin tài khoản</h1>
    <div class="form-signup name-account m992">
        <p><strong>Họ tên:</strong> {{Auth::user()->name}}</p>
        <p> <strong>Email:</strong> {{Auth::user()->email}}</p>
    </div>
</div>
@endsection
