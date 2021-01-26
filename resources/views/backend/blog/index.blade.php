@extends('backend.layout')
@section('title', 'Danh sách tin tức')
@section('text', 'Danh sách tin tức')
@section('text1', 'Tin tức')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">

                            <a class="btn btn-primary" href="{{route('blog.create')}}" style="margin: 30px 0 30px 0;">Thêm mới</a>
                            <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hình ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>Danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{url('public/uploads')}}/{{$value->image}}" alt="" class="fix-image"></td>
                                        <td>{{$value->name}}</td>
                                        <td>{{($value->cate_blog)?$value->cate_blog->name:''}}</td>
                                        <td>{!!($value->status == 1)?'<span class="badge badge-success">Hiện</span>':'<span class="badge badge-danger">Ẩn</span>'!!}</td>
                                        <td style="display: flex;">
                                            {{-- Sửa --}}
                                            <a href="{{route('blog.edit', $value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa" style="margin-right: 5px"><i class="fadeIn animated bx bx-edit"></i></a>
                                            {{-- Xóa --}}
                                            <form action="{{route('blog.destroy', $value->id)}}" method="POST" role="form">
                                                @method('DELETE') @csrf
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa tin tức {{$value->name}} này không');"><i class="fadeIn animated bx bx-x" ></i></button>
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
