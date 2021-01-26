@extends('backend.layout')
@section('title', 'Chi tiết sản phẩm')
@section('text', 'Chi tiết sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
<div class="card"style="width: 95%; margin: auto">
    <div class="card-body">
        <div class="table-responsive" >

    <div style="margin-bottom: 40px">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <p id="sku" hidden="">{{$product_id->sku}}</p>
        <form action="{{route('product_detail.store', $product_id->id)}}" method="POST" role="form">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Sku</label>
                        <input type="text" class="form-control" id="sku_detail" value="{{$product_id->sku}}" name="sku">
                        @error('sku')
                        <span class="text-red">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Kích cỡ </label>
                        <select name="id_size" id="id_size" class="form-control" required="required">
                            <option>----Không----</option>
                            @foreach($attr as $key => $value)
                            @if($value->name === 'size')
                            <option value="{{$value->id}}">{{$value->value}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Màu sản phẩm</label>
                        <div class="checkbox">
                            @foreach($attr as $value)
                            @if($value->name == 'color')
                            <div>
                                <label>
                                    <input id="id_color" type="checkbox" value="{{$value->id}}" name="id_color[]"><i class="bx bx-file"  style="color: {{$value->value}};"></i>
                                </label>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="number" class="form-control" id="" name="quantity">
                        @error('quantity')
                        <span class="text-red">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="radio">
                            <label>
                                Hiện
                                <input type="radio" name="status" id="input" value="1" checked>
                                Ẩn
                                <input type="radio" name="status" id="input" value="0">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>

    <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info" style="max-width: 100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã sản phẩm</th>
                <th>Kích cỡ</th>
                <th>Màu sắc</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $key=>$data)
            <tr>
                <td class="text-center">{{($loop->iteration)}}</td>
                <td>{{$data->sku}}</td>
                <td>{{$data->size->value}}</td>
                <td>
                    @foreach($data->color as $color)
                    <label style="color: {{$color->value}}"><i class="fadeIn animated bx bx-home-smile" style="color: {{$color->value}}}"></i></label>
                    @endforeach
                </td>
                <td>{{number_format($data->quantity,0,',','.')}} </td>
                <td>{!!($data->status == 1)?'<span class="badge badge-success">Hiện</span>':'<span class="badge badge-danger">Ẩn</span>'!!}</td>
                <td style="display: flex;">
                    {{-- Sửa --}}
                    <a href="{{route('product_detail.edit',['id'=>$product_id->id, 'id_detail'=>$data->id])}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa"><i class="fadeIn animated bx bx-edit"></i></a>
                    {{-- Xóa --}}
                    <form action="{{route('product_detail.destroy', ['id'=>$product_id->id, 'id_detail'=>$data->id])}}" role="form" style="margin-left: 10px">
                       @csrf
                       <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa sản phẩm {{$product_id->name}} cỡ {{$data->size->value}} không');"><i class="fadeIn animated bx bx-x" ></i></button>
                   </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
    </div>
</div>

@endsection
