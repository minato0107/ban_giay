@extends('backend.layout')
@section('title', 'Danh sách danh mục')
@section('text', 'Danh sách danh mục')
@section('text1', 'Danh mục')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">

                            <a class="btn btn-primary" href="{{route('category.create')}}" style="margin: 30px 0 30px 0;">Thêm mới</a>
                            <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Loại danh mục</th>
                                        <th>Danh mục cha</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cate as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{!!($value->type == 1)?'Danh mục sản phẩm':'Danh mục tin tức'!!}</td>
                                        <td>{!!($value->parent_name)?$value->parent_name->name:'---'!!}</td>
                                        <td>{!!($value->status == 1)?'<span class="badge badge-success">Hiện</span>':'<span class="badge badge-danger">Ẩn</span>'!!}</td>
                                        <td>{{$value->created_at}}</td>
                                        <td style="display: flex;">
                                            <a href="{{route('category.edit', $value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa"><i class="fadeIn animated bx bx-edit"></i></a>
                                            <form action="{{route('category.destroy', $value->id)}}" method="POST" role="form">
                                                @method('DELETE') @csrf
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa danh mục {{$value->name}} này không');"><i class="fadeIn animated bx bx-x" ></i></button>
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
