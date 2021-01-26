@extends('backend.layout')
@section('title', 'Logo')
@section('text', 'Logo')
@section('text1', 'config')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">

                            {{-- <a class="btn btn-primary" href="{{route('logo.create')}}" style="margin: 30px 0 30px 0;">Thêm mới</a> --}}
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
                                        <th>Tên logo</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logo as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <img src="{{url('public/uploads')}}/{{$value->value}}" alt="" class="fix-image">
                                        </td>
                                        <td>{{$value->name}}</td>
                                        <td>{!!($value->status == 1)?'<span class="badge badge-success">Hiện</span>':'<span class="badge badge-danger">Ẩn</span>'!!}</td>
                                        <td style="display: flex;">
                                            {{-- Sửa --}}
                                            <a href="{{route('logo.edit', $value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cập nhật" style="margin-right: 5px"><i class="fadeIn animated bx bx-edit"></i></a>
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
