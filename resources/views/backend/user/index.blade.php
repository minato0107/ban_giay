@extends('backend.layout')
@section('title', 'Danh sách user')
@section('text', 'Danh sách user')
@section('text1', 'User')
@section('content')
<div class="row fix-row">
    <div class="col-12">
<div class="card">
    <div class="card-body">
<div class="table-responsive">

    <table class="table table-bordered nowrap dataTable no-footer dtr-inline table-hover" id="table_id" aria-describedby="datatable-buttons_info" style="max-width: 100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Avatar</th>
                <th>Tên User</th>
                <th>Giới tính</th>
                <th>Phone/Email</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all as $key=>$value)
            <tr>
                <td class="text-center">{{($loop->iteration)}}</td>
                <td><img src="{{url('public/uploads/User')}}/{{$value->avatar}}" alt="" style="width: 50px"></td>
                <td>{{$value->name}}</td>
                <td>
                    {{$value->gender ==1?'Nam':'Nữ'}}
                </td>
                <td>
                    <p>{{$value->phone}} <span style="display: block;">{{$value->email}}</span></p>

                </td>
                <td>{{$value->address}}</td>
                <td>
                    {{-- Xóa --}}
                    <form action="{{route('user.delete', $value->id)}}" role="form" style="margin-left: 10px" method="post">
                    @method('DELETE')   @csrf
                       <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa" onclick="return confirm('Bạn có muốn xóa người dùng {{$value->name}} này không');"><i class="fadeIn animated bx bx-x" ></i></button>
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
@endsection
