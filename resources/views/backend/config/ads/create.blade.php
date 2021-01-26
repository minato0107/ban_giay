@extends('backend.layout')
@section('title', 'Thêm mới Ads')
@section('text', 'Thêm mới Ads')
@section('text1', 'Config')
@section('content')
<div class="card-body">

    <form action="{{route('ads.store')}}" method="POST" role="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tên Ads</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên Logo" name="name" onkeyup="ChangeToSlug()">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                    @error('slug')
                    <p style="color: red">{{$message}}</p>
                    @enderror
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
                    <img src="" alt="" id="img_image" style="max-width: 100px; display: block;">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="radio">
                        <div class="row">
                            <div class="col-md-2">
                                <label>
                                    <input type="radio" name="status" id="input" value="1" checked="checked">
                                    Hiện
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="radio" name="status" id="input" value="0">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="hidden" value="3" name="type">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
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
