@extends('backend.layout')
@section('title', 'Thêm mới liên hệ')
@section('text', 'Thêm mới liên hệ')
@section('text1', 'Config')
@section('content')
<div class="card" style="width: 97%; margin: auto;">
<div class="card-body">

    <form action="{{route('contact.store')}}" method="POST" role="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tên liên hệ</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" name="name" onkeyup="ChangeToSlug()">
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
                <label>Nội dung</label>
                <div class="form-group">
                    <textarea name="value" id="inputValue" class="form-control" rows="3" ></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
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
                <input type="hidden" name="type" value="2">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    </form>
</div>
</div>
@endsection
