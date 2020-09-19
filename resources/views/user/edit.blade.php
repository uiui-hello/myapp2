@extends('layout')
@section('header')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ユーザーの編集</div>
        <div class="card-body">
          <form method="POST" action="{{ action('UserController@update') }}">
            <div class="form-group">
              <label for="name">
                名前
              </label>
              <div>
                <input type="text" name="name" class="form-control" value="{{ $auth->name }}">
              </div>
            </div>
            <div class="form-group">
              <label for="email">
                email
              </label>
              <div>
                <input type="text" name="email" class="form-control" value="{{ $auth->email }}">
              </div>
            </div>
              <button type="submit" class="user-btn">変更</button>
              {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection