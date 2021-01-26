@extends('backend.layout')
@section('title', 'Sửa thuộc tính')
@section('text', 'Sửa thuộc tính')
@section('text1', 'Sản phẩm')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST" action="{{route('attr.update', $edit->id)}}">
                         @method('PUT')   @csrf
                            <h4>Sửa thuộc tính</h4>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tên Thuộc tính </label>
                                        <select name="name" id="input" class="form-control">
                                            <option value="color" {{($edit->name == 'color')?'selected':''}}>Màu sắc</option>
                                            <option value="size" {{($edit->name == 'size')?'selected':''}}>Kích cỡ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Giá trị</label>
                                        <div class="input-group " id="size" >
                                            <input type="{{($edit->name == 'color')?'color':'text'}}" class="form-control input-lg value" name="value" value="{{$edit->value}}">
                                        </div>
                                        @error('value')
                                        <span class="text-red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Sửa</button>
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
                                        <a href="{{route('attr.edit', $value->id)}}" class="btn btn-primary" style="margin-right: 8px"><i class="fadeIn animated bx bx-edit" title="Sửa"></i></a>

                                        <form action="{{route('attr.destroy', $value->id)}}" method="POST" role="form">
                                            @method('DELETE') @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fadeIn animated bx bx-x" title="Xóa" onclick="return confirm('Bạn có muốn xóa thuộc tính {{$value->name}} này không');"></i></button>
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
