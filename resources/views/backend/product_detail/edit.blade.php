@extends('backend.layout')
@section('title', 'Sửa chi tiết sản phẩm')
@section('text', 'Sửa chi tiết sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
    <div style="margin-bottom: 40px; width: 99%; margin: auto">
        <p id="sku" hidden="">{{$product_id->sku}}</p>
        <form action="" method="post" role="form">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Sku</label>
                        <input type="text" class="form-control" value="{{$product_detail_id->sku}}" name="sku" id="sku_detail">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Kích cỡ</label>
                        <select name="id_size" id="id_size" class="form-control">
                            <option>----Không----</option>
                            @foreach($attr as $key => $value)
                                @if($value->name === 'size')
                                <option value="{{$value->id}}" {{($value->id == $id_attr->size)?'selected':''}}>{{$value->value}}</option>
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
                                    <div class="checkbox">
                                        <label>

                                            <input type="checkbox" {{in_array( $value->id, $id_attr->color)?'checked':''}} value="{{$value->id}}" name="id_color[]"><i class="bx bx-file"  style="color: {{$value->value}};" ></i>
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
                        <input type="number" class="form-control" id="" value="{{$product_detail_id->quantity}}" name="quantity">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="radio">
                            <label>
                                Hiện
                                <input type="radio" name="status" id="input" value="1" {{($product_detail_id->status==1?'checked':'')}}>
                                Ẩn
                                <input type="radio" name="status" id="input" value="0" {{($product_detail_id->status==0?'checked':'')}}>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
