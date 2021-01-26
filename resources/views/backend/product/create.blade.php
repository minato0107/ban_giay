@extends('backend.layout')
@section('title', 'Thêm mới sản phẩm')
@section('text', 'Thêm mới sản phẩm')
@section('text1', 'Sản phẩm')
@section('content')
<div class="row fix-row">
    <div class="col-12">
        <div class="card" >
            <div class="card-body">
                <form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name" onkeyup="ChangeToSlug()">
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
                                <label for="">Sku</label>
                                <input type="text" class="form-control" id="sku" placeholder="Sku" name="sku">
                                @error('sku')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Danh mục cha</label>
                            <div class="form-group">
                                <select class="custom-select" id="classCoverageDistribution" aria-label="Example select with button addon" name="id_cate">
                                    <option>----Trống----</option>
                                    @foreach($cate as $value)
                                    @if($value->type==1 && $value->parent_id != 0)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endif
                                    @endforeach

                                </select>
                                @error('id_cate')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="number" name="price" id="input" class="form-control" value="" min="1">
                            </div>
                            @error('price')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Giá khuyến mãi sản phẩm</label>
                                <input type="number" name="sale_price" id="input" class="form-control" value="0" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Featured</label>
                                <div class="radio">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>
                                                <input type="radio" name="featured" id="input" value="1" checked="checked">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="radio" name="featured" id="input" value="0">
                                                Ẩn
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm</label>
                                <input type="hidden" class="form-control" name="image" id="image" >
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-image'><i class="fadeIn animated bx bx-images" ></i></a>
                                @error('image')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                                <img src="" alt="" id="img_image" style="max-width: 100px; display: block;">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh liên quan</label>
                                <input type="hidden" class="form-control" name="images" id="images">
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-images'><i class="fadeIn animated bx bx-images" ></i></a>
                                <div id="img_images">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Mô tả sản phẩm</label>
                                <textarea name="description" id="description" class="form-control" rows="10" ></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm mới</button>
                </form>
                {{-- modal 1 ảnh  --}}
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
                {{-- modal nhiều ảnh --}}
                <div class="modal fade" id="modal-images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document" >
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Quản lý upload file</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{url('filemanager')}}/dialog.php?type=1&field_id=images" class="upload-image" style="width: 100%;height: 400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <p>{{url('filemanger')}}</p> --}}
@endsection
