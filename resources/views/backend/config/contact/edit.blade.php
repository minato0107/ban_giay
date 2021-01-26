@extends('backend.layout')
@section('title', 'Contact')
@section('text', 'Contact')
@section('text1', 'Config')
@section('content')
<div class="card-body">

    <form action="{{route('contact.update', $edit->slug)}}" method="POST" role="form">
             @method('PUT')   @csrf
             <input type="hidden" name="id" value="{{$edit->slug}}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <p for="name">Sửa {{$edit->name}}</p>
                    <textarea name="value" id="inputValue" class="form-control" rows="3" >{{$edit->value}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
                    <div class="radio">
                        <div class="row">
                            <div class="col-md-2">
                                <label>
                                    <input type="radio" name="status" id="input" value="1" {!!($edit->status ==1)?'checked':''!!}>
                                    Hiện
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="radio" name="status" id="input" value="0" {!!($edit->status ==0)?'checked':''!!}>
                                    Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Cập nhật</button>
    </form>
</div>
@endsection
