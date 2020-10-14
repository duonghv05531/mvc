@extends('layouts.main')

@section('title', 'Đăng ký')

@section('content')
    <div class="col-6 offset-3">
        <br>
        <br>
        <form method="POST">
            <div class="form-group">
                <label for="user_name">Tên đăng nhập</label>
                <input type="text" class="form-control" name="name" id="user_name">
                @if (isset($userr))
                    <small id="userHelp" class="form-text text-muted">{{ $userr }}</small>
                @else
                    <small id="userHelp" class="form-text text-muted">Không chia sẻ tài khoản cho bất cứ ai để tránh bị mất
                        tài
                        khoản</small>
                @endif
            </div>
            <div class="form-group">
                <label for="user_name">Email</label>
                <input type="text" class="form-control" name="email" id="user_name">
                @if (isset($emailerr))
                    <small id="userHelp" class="form-text text-muted">{{ $emailerr }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @if (isset($pserr))
                    <small id="passwordHelp" class="form-text text-muted">{{ $pserr }}</small>
                @endif
            </div>
            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" name="btn" class="btn btn-danger">Đăng ký</button>
            <br><br>
        </form>
    </div>

@endsection
