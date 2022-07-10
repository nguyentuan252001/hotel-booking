@extends('admin.share.master')
@section('title')
    Quản Lý Khu Vực Khách Sạn
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Thêm Mới Khu Vực
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

                <form action="/admin/khu-vuc/" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Mã Khu Vực</label>
                        <input type="text" name="ma_khu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên Khu Vực</label>
                        <input type="text" name="ten_khu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả Khu Vực</label>
                        <textarea name="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select name="tinh_trang" class="form-control">
                            <option value="1">Đang Mở</option>
                            <option value="0">Đang Đóng</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Danh Sách Các Khu Vực
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mã Khu</th>
                            <th class="text-center">Tên Khu</th>
                            <th class="text-center">Mô Tả</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <th class="text-center align-middle">{{ $key + 1 }}</th>
                            <td class="align-middle">{{ $value->ma_khu }}</td>
                            <td class="align-middle">{{ $value->ten_khu }}</td>
                            <td class="align-middle">{{ $value->mo_ta }}</td>
                            <td class="text-center align-middle">
                                @if($value->tinh_trang == 1)
                                    <button class="btn btn-primary">Đang Mở</button>
                                @else
                                    <button class="btn btn-danger">Đang Đóng</button>
                                @endif
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-info" href="/admin/khu-vuc/edit-old/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/admin/khu-vuc/delete-old/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
