@extends('master')
@section('content')
@section('title','Sửa Sản Phẩm')
@section('top','Admin : Sửa Sản Phẩm')
@section('bot','Võ Minh Phụng Production Entertainment')
<form action="{{ route('update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data" style="width: 650px;">
    @csrf
    <fieldset>
        <legend>Thông Tin Bản Tin</legend>
        <span class="form_label">Tên sản phẩm:</span>
        <span class="form_item">
            <input type="text" name="name" value="{{$product->name}}" class="textbox" />
        </span><br />
        <span class="form_label">Giá sản phẩm:</span>
        <span class="form_item">
            <input type="text" name="price" value="{{$product->price}}" class="textbox"/>
        </span><br />
        <span class="form_label">Mô tả sản phẩm:</span>
        <span class="form_item">
            <textarea rows="5" name="description" value="{{$product->description}}" class="textbox"></textarea>
        </span><br />
        <span class="form_label">Nội dung sản phẩm:</span>
        <span class="form_item">
            <textarea rows="8" name="content" value="{{$product->content}}" class="textbox"></textarea>
        </span><br />
        <span class="form_label">Công bố sản phẩm:</span>
        <span class="form_item">
            <input type="radio" name="congbo" value="1" {{($product->congbo == 1) ? 'checked' : ''}} checked="checked" /> Có 
            <input type="radio" name="congbo" value="0" {{($product->congbo == 0) ? 'checked' : ''}}/> Không
        </span><br />
        <span class="form_label"></span>
        <span class="form_item">
            <input type="submit" value="Thêm tin" class="button" />
        </span>
    </fieldset>
</form>
@endsection