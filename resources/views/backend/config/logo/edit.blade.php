@extends('backend.layout')
@section('title', 'Cập nhật logo')
@section('text', 'Cập nhật logo')
@section('text1', 'Config')
@section('content')
<div class="card-body">

    <form action="{{route('logo.update', $edit->id)}}" method="POST" role="form">
             @method('PUT')   @csrf
             <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" style="display: block;">Tên logo:</label>
                    <h2>{{$edit->name}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="hidden" class="form-control" name="value" id="image" >
                    <a class="btn btn-primary" data-toggle="modal" href='#modal-image'><i class="fadeIn animated bx bx-images" ></i></a>
                    @error('image')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                    <img src="{{url('public/uploads')}}/{{$edit->value}}" alt="" id="img_image" style="max-width: 100px; display: block;">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="hidden" value="1" name="type">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Cập nhật</button>
    </form>
    {{-- modal 1 ảnh--}}
    <div class="modal fade" id="modal-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document" >
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý upload file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('filemanager')}}/dialog.php?type=1&field_id=image" class="upload-image" style="width: 100%;height: 400px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
