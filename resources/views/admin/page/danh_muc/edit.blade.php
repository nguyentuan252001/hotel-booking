@extends('admin.share.master')
@section('title')
    Cập Nhật Danh Mục
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cập Nhật Danh Mục</h3>
            </div>
            <form action="/admin/danh-muc/update" method="post">
                @csrf
                <div class="card-body">
                    <input type="text" value="{{ $danhMuc[0]->id }}" name="id" hidden>
                    <div class="form-group">
                        <label>Mã Danh Mục</label>
                        <input value="{{ $danhMuc[0]->ma_danh_muc }}" type="text" name="ma_danh_muc" class="form-control" placeholder="Nhập vào mã danh mục">
                    </div>
                    <div class="form-group">
                        <label>Tên Danh Mục</label>
                        <input value="{{ $danhMuc[0]->ten_danh_muc }}" type="text" name="ten_danh_muc" class="form-control"
                            placeholder="Nhập vào tên danh mục">
                    </div>
                    <div class="form-group">
                        <label>Slug Danh Mục</label>
                        <input value="{{ $danhMuc[0]->slug_danh_muc }}" type="text" name="slug_danh_muc" class="form-control"
                            placeholder="Nhập vào slug danh mục">
                    </div>
                    <div class="form-group">
                        <label>Danh Mục Cha</label>
                        <select name="id_danh_muc_cha" class="form-control">
                            <option value="0">Root</option>
                            @foreach ($danhMucCha as $key => $value)
                            <option value={{ $value->id }} {{ $danhMuc[0]->id_danh_muc_cha == $value->id ? 'selected' : '' }}>{{ $value->ten_danh_muc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select name="tinh_trang" class="form-control">
                            <option value="1" {{ $danhMuc[0]->tinh_trang == 1 ? 'selected' : '' }}>Hiển Thị</option>
                            <option value="0" {{ $danhMuc[0]->tinh_trang == 0 ? 'selected' : '' }}>Tạm Tắt</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
