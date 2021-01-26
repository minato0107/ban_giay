@extends('backend.layout')
@section('title', 'Thuộc tính sản phẩm')
@section('text', 'Thuộc tính sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card" >
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST" action="{{route('attr.store')}}">
                            @csrf
                            <h4>Thêm mới thuộc tính</h4>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tên Thuộc tính </label>
                                        <select name="name" id="input" class="form-control" required="required">
                                            <option value="color">Màu sắc</option>
                                            <option value="size">Kích cỡ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Giá trị</label>
                                        <div class="input-group " id="size" >
                                            <input type="color" class="form-control input-lg value" name="value" >
                                        </div>
                                        @error('value')
                                        <span class="text-red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Thêm mới</button>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <table id="table_id" class="table table-striped table-bordered  nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting">#</th>
                                    <th class="sorting">Thuộc tính</th>
                                    <th class="sorting">Giá trị</th>
                                    <th class="sorting">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attr as $value)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->value}}</td>
                                    <td style="display: flex;">
                                        <a href="{{route('attr.edit', $value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa" style="margin-right: 8px" ><i class="fadeIn animated bx bx-edit" ></i></a>
                                        <form action="{{route('attr.destroy', $value->id)}}" method="POST" role="form">
                                            @method('DELETE') @csrf
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa thuộc tính {{$value->name}} có giá trị {{$value->value}} này không');"><i class="fadeIn animated bx bx-x" ></i></button>
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
@endsection

