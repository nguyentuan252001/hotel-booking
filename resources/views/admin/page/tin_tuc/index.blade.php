@extends('admin.share.master')
@section('title')
    Quản Lý Tin Tức
@endsection
@section('content')
    <div id="app" class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Thêm mới Bài Viết
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input v-model="add.tieu_de" v-on:keyup="slug(add.tieu_de)" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Slug Tin Tức</label>
                            <input v-model="add.slug" type="text" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả</label>
                            <textarea v-model="add.mo_ta" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea v-model="add.noi_dung" class="form-control" name="noi_dung" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh</label>
                            <div class="input-group">
                                <input id="hinh_anh" class="form-control" type="text" name="filepath">
                                <span class="input-group-prepend">
                                    <a id="lfm" data-input="hinh_anh" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                            </div>
                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select v-model="add.is_open" class="form-control">
                                <option value="1">Đăng Bài</option>
                                <option value="0">Tắt Bài</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                    <button v-on:click="createTinTuc()" class="btn btn-primary">Thêm Mới Tin Tức</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tin Tức
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">Tiêu Đề</th>
                                <th class="align-middle text-center">Mô Tả Ngắn</th>
                                <th class="align-middle text-center">Hình Ảnh</th>
                                <th class="align-middle text-center">Tình Trạng</th>
                                <th class="align-middle text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in listData">
                                <th class="align-middle text-center">@{{ key + 1 }}</th>
                                <td class="align-middle text-center">@{{ value.tieu_de }}</td>
                                <td class="align-middle text-center">@{{ value.mo_ta }}</td>
                                <td class="align-middle text-center">
                                    <img v-bind:src="value.hinh_anh" class="img-thumbnail" alt="ảnh"
                                        style="height: 100px">
                                </td>
                                <td class="align-middle text-center">
                                    <button v-on:click="changeStatus(value)" v-if="value.is_open == 1"
                                        class="btn btn-primary">Đăng Bài</button>
                                    <button v-on:click="changeStatus(value)" v-else class="btn btn-danger">Tạm Tắt</button>
                                </td>
                                <td class="align-middle text-center">
                                    <button v-on:click="click_edit(value)" class="btn btn-primary" data-toggle="modal"
                                        data-target="#editModal">Cập
                                        Nhật</button>
                                    <button @click="dele = value" class="btn btn-danger" data-toggle="modal"
                                        data-target="#xoaModal">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- edit modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Cập Nhật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input v-model="edit.tieu_de" v-on:keyup="editSlug(edit.tieu_de)" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slug Tin Tức</label>
                                <input v-model="edit.slug" type="text" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea v-model="edit.mo_ta" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="edit_noi_dung" v-model="edit.noi_dung" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <div class="input-group">
                                    <input id="edit_hinh_anh" class="form-control" type="text" name="filepath">
                                    <span class="input-group-prepend">
                                        <a id="edit_lfm" data-input="edit_hinh_anh" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                </div>
                                <div id="edit_holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <select v-model="edit.is_open" class="form-control">
                                    <option value="1">Đăng Bài</option>
                                    <option value="0">Tắt Bài</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="updateNews()" type="button" data-dismiss="modal"
                            class="btn btn-primary">Cập
                            nhật</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete modal --}}
        <div class="modal fade" id="xoaModal" tabindex="-1" role="dialog" aria-labelledby="xoaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="xoaModalLabel">Xóa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn Có Muốn Xóa Tin Tức Này Không
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-on:click="deleteNews()" type="button" data-dismiss="modal"
                            class="btn btn-primary">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                listData: [],
                add: {
                    slug: '',
                    noi_dung: '',
                    is_open: 1,
                },
                edit: {
                    slug: '',
                    noi_dung: '',
                },
                dele: {},
            },
            created() {
                this.loadData();
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/tin-tuc/data')
                        .then((res) => {
                            this.listData = res.data.data;
                            console.log(this.listData)
                        });
                },
                createTinTuc() {
                    this.add.noi_dung = CKEDITOR.instances['noi_dung'].getData();
                    this.add.hinh_anh = $("#hinh_anh").val();
                    axios
                        .post('/admin/tin-tuc/create', this.add)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Thêm Mới Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                changeStatus(value) {
                    axios
                        .post('/admin/tin-tuc/changeStatus', value)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Thay đổi Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                deleteNews() {
                    axios
                        .post('/admin/tin-tuc/delete', this.dele)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Xóa Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                click_edit(value) {
                    this.edit = value;
                    CKEDITOR.instances['edit_noi_dung'].setData(this.edit.noi_dung);
                    $("#edit_hinh_anh").val(value.hinh_anh);
                    $("#edit_holder").html('<img src="' + value.hinh_anh + '" style="height: 100px"/>');
                },
                updateNews() {
                    this.edit.noi_dung = CKEDITOR.instances['edit_noi_dung'].getData();
                    this.edit.hinh_anh = $("#edit_hinh_anh").val();
                    axios
                        .post('/admin/tin-tuc/update', this.edit)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success("Đã Update Thành công");
                                this.loadData();
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                slug(str) {
                    str = str.toLowerCase();
                    str = str
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '');
                    str = str.replace(/[đĐ]/g, 'd');
                    str = str.replace(/([^0-9a-z-\s])/g, '');
                    str = str.replace(/(\s+)/g, '-');
                    str = str.replace(/-+/g, '-');
                    str = str.replace(/^-+|-+$/g, '');
                    this.add.slug = str;
                },
                editSlug(str) {
                    str = str.toLowerCase();
                    str = str
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '');
                    str = str.replace(/[đĐ]/g, 'd');
                    str = str.replace(/([^0-9a-z-\s])/g, '');
                    str = str.replace(/(\s+)/g, '-');
                    str = str.replace(/-+/g, '-');
                    str = str.replace(/^-+|-+$/g, '');
                    this.edit.slug = str;
                }
            }
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
        $('#edit_lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('noi_dung');
        CKEDITOR.replace('edit_noi_dung');
    </script>
@endsection
