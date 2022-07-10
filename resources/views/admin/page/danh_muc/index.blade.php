@extends('admin.share.master')
@section('title')
    Quản Lý Danh Mục
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm Mới Danh Mục</h3>
                </div>
                <form action="/admin/danh-muc" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã Danh Mục</label>
                            <input type="text" name="ma_danh_muc" class="form-control" placeholder="Nhập vào mã danh mục">
                        </div>
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" name="ten_danh_muc" class="form-control"
                                placeholder="Nhập vào tên danh mục">
                        </div>
                        <div class="form-group">
                            <label>Slug Danh Mục</label>
                            <input type="text" name="slug_danh_muc" class="form-control"
                                placeholder="Nhập vào slug danh mục">
                        </div>
                        <div class="form-group">
                            <label>Danh Mục Cha</label>
                            <select name="id_danh_muc_cha" class="form-control">
                                <option value="0">Root</option>
                                @foreach ($danhMucCha as $key => $value)
                                <option value={{ $value->id }}>{{ $value->ten_danh_muc }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select name="tinh_trang" class="form-control">
                                <option value="1">Hiển Thị</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Thêm Mới Danh Mục</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Danh Mục</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mã Danh Mục</th>
                                <th class="text-center">Tên Danh Mục</th>
                                <th class="text-center">Slug Danh Mục</th>
                                <th class="text-center">Danh Mục Cha</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Ngày Tạo</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                            <tr>
                                <th class="align-middle text-center" scope="row">{{ $key + 1 }}</th>
                                <td class="align-middle">{{ $value->ma_danh_muc }}</td>
                                <td class="align-middle">{{ $value->ten_danh_muc }}</td>
                                <td class="align-middle">{{ $value->slug_danh_muc }}</td>
                                <td class="align-middle">{{ $value->ten_danh_muc_cha }}</td>
                                <td class="align-middle text-center">
                                    @if($value->tinh_trang)
                                    <button class="btn btn-success">Hoạt Động</button>
                                    @else
                                    <button class="btn btn-warning">Tạm Tắt</button>
                                    @endif
                                </td>
                                <td class="align-middle text-center">{{ $value->created_at }}</td>
                                <td class="align-middle text-center">
                                    <a href="/admin/danh-muc/edit/{{ $value->id }}" class="btn btn-primary">Cập Nhật</a>
                                    <a href="/admin/danh-muc/delete/{{ $value->id }}" class="btn btn-danger">Xóa</a>
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
