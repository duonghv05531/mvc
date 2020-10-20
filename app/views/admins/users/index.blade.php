@extends('admins.layouts.main')
@section('title', 'Quản trị danh muc')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Tên</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Kích hoạt</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Hành động
                <br>
                <a class="btn btn-outline-success" href="{{ bsUrl . 'admin-users-add' }}">Thêm</a>
            </th>
        </thead>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td><img src="{{ $u->avatar }}" alt="" width="100px"></td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role }}</td>
                    <td>{{ $u->status == 1 ? 'yes' : 'no' }}</td>
                    <td>{{ $u->created_at }}</td>
                    <td>{{ $u->update_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('{{ bsUrl . 'admin-users-disable?id=' . $u->id }}')" href="javascript:;">
                            {{ $u->status == 1 ? 'Dissable' : 'Enable' }}
                        </a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="{{ bsUrl . 'admin-users-edit?id=' . $u->id }}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        function confirmRemove(removeurl) {
            alertify.confirm(
                'Thông báo',
                'Đổi trạng thái của tài khoản này ?',
                function() {
                    window.location.href = removeurl;
                },
                function() {
                    alertify.confirm().close();
                }
            );
        }

    </script>
@endsection
