@extends('backend.layout')
@section('title', 'Contact')
@section('text', 'Contact')
@section('text1', 'Config')
@section('content')
<div class="row" style="display: flex; width: 96%; margin: auto; margin-top: 40px">
    <div class="card col-md-6" >
        <div class="card-body">
            <ul style="list-style-type: none ">
                <li>

                    <p>Địa chỉ: {{$address->value}}<span style="margin-left: 10px"><a href="{{route('contact.edit', $address->slug)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Cập nhật"><i class="fadeIn animated bx bx-edit"></i></a></span>

                    </p>
                </li>
                <li>
                    <p>Email: {!!$email->value!!}<span style="margin-left: 10px"><a href="{{route('contact.edit', $email->slug)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Cập nhật"><i class="fadeIn animated bx bx-edit"></i></a></span>

                    </p>
                </li>
                <li>
                    <p>Số điện thoại: {!!$phone->value!!}<span style="margin-left: 10px"><a href="{{route('contact.edit', $phone->slug)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Cập nhật"><i class="fadeIn animated bx bx-edit"></i></a></span>

                    </p>
                </li>

            </ul>
        </div>
    </div>
    <div class="card col-md-6 text-center">
        <div class="card-body">
            <h2 >Thời gian làm việc</h2>
            <p>{!!$worktime->value!!}<span style="margin-left: 10px"><a href="{{route('contact.edit', $worktime->slug)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Cập nhật"><i class="fadeIn animated bx bx-edit"></i></a></span></p>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-body">
            <h4>Bản đồ<a href="{{route('contact.edit', $map->slug)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Cập nhật"><i class="fadeIn animated bx bx-edit"></i></a></h4>

            <p>{!!$map->value!!}<span style="margin-left: 10px"></span></p>
        </div>
    </div>
</div>
@endsection

