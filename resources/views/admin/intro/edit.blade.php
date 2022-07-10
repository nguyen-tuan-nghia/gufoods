@extends('layout.admin')
@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<form action="{{url('/dashboard/intro/update'.'/'.$intro->id)}}" method="post"><div class="form-group col-md-12">
    @csrf
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            value="{{ $intro->name }}" onkeyup="ChangeToSlug();" placeholder="Enter name" required>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
            value="{{  $intro->slug  }}{{rand(1,10)}}" placeholder="Slug" required>
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <label>Nội dung</label>
    <textarea class="form-control " name="content" id="editor1" required>
        {!!$intro->content!!}
    </textarea>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<input class="btn btn-dark" type="submit" value="Lưu">
</form>
<script language="javascript">
    function ChangeToSlug() {
        var title, slug;

        //Lấy text từ thẻ input title
        title = document.getElementById("name").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
    filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
} );
</script>
@endsection
