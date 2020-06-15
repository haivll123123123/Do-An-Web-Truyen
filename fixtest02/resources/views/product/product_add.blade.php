@extends('master')
@section('content')
@section('title','Thêm Sản Phẩm')
@section('top','Admin : Thêm Sản Phẩm')
@section('bot','Võ Minh Phụng Production Entertainment')
<form action="{{ route('store')}}" method="POST" enctype="multipart/form-data" style="width: 650px;">
    @csrf
    <fieldset>
        <legend>Thông Tin Bản Tin</legend>
        <span class="form_label">Tên sản phẩm:</span>
        <span class="form_item">
            <input type="text" name="name" class="textbox" />
        </span><br />
        <span class="form_label">Giá sản phẩm:</span>
        <span class="form_item">
            <input type="text" name="price" class="textbox"/>
        </span><br />
        <span class="form_label">Mô tả sản phẩm:</span>
        <span class="form_item">
            <textarea rows="5" name="description" class="textbox"></textarea>
        </span><br />
        <span class="form_label">Nội dung sản phẩm:</span>
        <span class="form_item">
            <textarea rows="8" name="content" class="textbox"></textarea>
        </span><br />
        <span class="form_label">Công bố sản phẩm:</span>
        <span class="form_item">
            <input type="radio" name="congbo" value="1" checked="checked" /> Có 
            <input type="radio" name="congbo" value="0" /> Không
        </span><br />
        <span class="form_label"></span>
        <span class="form_item">
            <input type="submit" value="Thêm tin" class="button" />
        </span>
    </fieldset>
</form>
@endsection