@extends('admin.share.master')
@section('title')
    Quản Lý Khu Vực Khách Sạn
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Cập Nhật Khu Vực
            </div>
            <div class="card-body">
                @if($errors->any())
                    @foreach ($errors->all() as $key => $value)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error {{ $key + 1 }}:</strong> {{ $value }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif

                <form>
                    @csrf
                    <input type="id" value="{{ $khuVuc[0]->id }}" class="form-control">
                    <div class="form-group">
                        <label>Mã Khu Vực</label>
                        <input type="text" name="ma_khu" class="form-control" value="{{ $khuVuc[0]->ma_khu }}">
                    </div>
                    <div class="form-group">
                        <label>Tên Khu Vực</label>
                        <input type="text" name="ten_khu" class="form-control" value="{{ $khuVuc[0]->ten_khu }}">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả Khu Vực</label>
                        <textarea name="mo_ta" class="form-control" cols="30" rows="10" value="{{ $khuVuc[0]->mo_ta }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select name="tinh_trang" class="form-control">
                            <option value="1">Đang Mở</option>
                            <option value="0">Đang Đóng</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
