@extends('admins.layouts.main')
@section('title', 'Thêm tài khoản')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-4 offset-3" style="margin: auto">
                <br>
                <h3 class="text-center text-info">TẠO MỚI DANH MỤC</h3>
                <div class="form-group">
                    <br>
                    <label for="name">Tên tài khoản</label>
                    <input type="text" class="form-control" name="name">
                    <small class="form-text text-danger">
                        @if (isset($userr))
                            {{ $userr }}
                        @endif
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                    <small class="form-text text-danger">
                        @if (isset($emailerr))
                            {{ $emailerr }}
                        @endif
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="password">Mật khẩu</label>
                    <input type="text" class="form-control" name="password">
                    <small class="form-text text-danger">
                        @if (isset($pserr))
                            {{ $pserr }}
                        @endif
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="password">Ảnh đại diện</label>
                    <input style="border: none" type="file" class="form-control" name="avatar">
                </div>
                <div class="form-group">
                    <label for="password">Vai trò</label>
                    <br>
                    <select name="role" id="">
                        <option value="900">Admin</option>
                        <option value="700">Nhân viên</option>
                        <option value="1">Khách hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
                </div>

            </div>
        </div>
    </form>
@endsection
