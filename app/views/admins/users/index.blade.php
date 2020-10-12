@extends('admins.layouts.main')
@section('title', 'Quản trị danh muc')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Email verified at</th>
            <th>Role</th>
            <th>Password |
                <br>
                Remember Token
            </th>
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
                    <td>{{ $u->avatar }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->email_verified_at }}</td>
                    <td>{{ $u->role }}</td>
                    <td>{{ $u->password }}
                        {{ $u->remember_token }}
                    </td>
                    <td>{{ $u->created_at }}</td>
                    <td>{{ $u->update_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
