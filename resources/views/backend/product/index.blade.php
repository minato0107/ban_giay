@extends('backend.layout')
@section('title', 'Danh sách sản phẩm')
@section('text', 'Danh sách sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
<div class="row" style="width: 99%; margin: auto; margin-top: 40px">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <a class="btn btn-primary" href="{{route('product.create')}}" style="margin: 30px 0 30px 0; ">Thêm mới</a>
                            <table class="table table-bordered table-hover" id="table_id" aria-describedby="datatable-buttons_info" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Giá sale</th>
                                        <th>Danh mục</th>
                                        <th>Status</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <img src="{{url('public')}}/uploads/{{$value->image}}" alt="" class="fix-image">
                                        </td>
                                        <td>{{$value->name}}</td>
                                        <td>{{number_format($value->price,0,',','.')}} VND</td>
                                        <td>{{number_format($value->sale_price,0,',','.')}} VND</td>
                                        <td>{{($value->cate)?$value->cate->name:''}}</td>
                                        <td>{!!($value->status == 1)?'<span class="badge badge-success">Hiện</span>':'<span class="badge badge-danger">Ẩn</span>'!!}</td>
                                        <td style="display: flex;">
                                            {{-- Chi tiết --}}
                                            <a href="{{route('product_detail.index', $value->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Chi tiết" class="btn btn-success" style="margin-right: 5px"><i class="fadeIn animated bx bx-detail"></i></a>
                                            {{-- Sửa --}}
                                            <a href="{{route('product.edit', $value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Sửa"><i class="fadeIn animated bx bx-edit"></i></a>
                                            {{-- Xóa --}}
                                            <form action="{{route('product.destroy', $value->id)}}" method="POST" role="form" style="margin-left: 5px">
                                                @method('DELETE') @csrf
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa sản phẩm {{$value->name}} này không');"><i class="fadeIn animated bx bx-x" ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
