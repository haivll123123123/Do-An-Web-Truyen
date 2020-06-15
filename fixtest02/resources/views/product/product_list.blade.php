@extends('master')
@section('content')
@section('title','Danh Sách Sản Phẩm')
@section('top','Admin : Danh Sách')
@section('bot','Võ Minh Phụng Production Entertainment')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Trạng thái</td>
        <td>Thời Gian</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    @foreach ( $product as $pdt)
    <tr class="list_data">
        <td class="aligncenter">{{$loop->iteration}}</td>
        <td class="list_td aligncenter">{{$pdt->name}}</td>
        <td class="list_td aligncenter">{{$pdt->price}}</td>
        <td class="list_td aligncenter">
            @if($pdt->congbo == 1 )
                Hiển Thị
            @else
                Ẩn
            @endif
        </td>
        <td class="list_td aligncenter">{{ date("d/m/Y - h:i:s"),strtotime($pdt->created_at) }}</td>
        <td class="list_td aligncenter">
            <a href="{{route('edit',['id' => $pdt->id])}}"><img src="{{asset ('images/edit.png')}}" /></a>&nbsp;&nbsp;&nbsp;
            <a href="{{route('delete',['id' => $pdt->id])}}"><img src="{{asset ('images/delete.png')}}" /></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection