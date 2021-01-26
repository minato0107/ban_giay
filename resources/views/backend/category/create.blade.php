@extends('backend.layout')
@section('title', 'Thêm mới danh mục')
@section('text', 'Thêm mới danh mục')
@section('text1', 'Danh mục')
@section('content')
<div class="card-body">

    <form action="{{route('category.store')}}" method="POST" role="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
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
                <div class="form-group">
                    <label for="">Loại danh mục</label>
                    <div class="radio">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    <input type="radio" name="type" id="input" value="1" checked="checked">
                                    Danh mục sản phẩm
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <input type="radio" name="type" id="input" value="0">
                                    Danh mục tin tức
                                </label>
                            </div>
                        </div>
                    </div>
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
                <label for="">Danh mục cha</label>
                <div class="form-group">
                    <select class="custom-select" id="classCoverageDistribution" aria-label="Example select with button addon" name="parent_id">
                        <option value="0">---Không----</option>
                        @foreach($cate as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    </form>
</div>
@endsection
