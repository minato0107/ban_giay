@extends('backend.layout')
@section('title', 'Đánh giá')
@section('text', 'Đánh giá')
@section('text1', 'Sản phẩm')
@section('content')
<div class="card ma-auto">
    <div class="card-body">
        <div class="table-responsive ">

            <table class="table table-hover table-bordered" id="table_id">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sản phẩm</th>
                        <th>Người đánh giá</th>
                        <th>Số Sao</th>
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $key=>$value)
                    <tr>
                        <td class="text-center">{{($loop->iteration)}}</td>
                        <td>{{$value->products->name}}</td>
                        <td>{{$value->users->name}}</td>
                        <td>
                            @for($i=0; $i<$value->star; $i++)
                            <i class="fadeIn animated bx bx-star text-yellow"></i>
                            @endfor
                        </td>
                        <td>{{$value->content}}</td>
                        <td>
                            @if($value->status==1)
                            <span class="badge badge-success">Hiện</span>
                            @else
                            <span class="badge badge-danger">Ẩn</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('review.update', $value->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Ẩn review" onclick="return confirm('Bạn có muốn ẩn đánh giá này không');" class="btn btn-success"><i class="lni lni-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
