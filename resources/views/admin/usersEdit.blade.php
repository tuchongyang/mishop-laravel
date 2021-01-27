@extends('admin.layouts.layout')
@section('title','编辑用户')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <form class="form-horizontal" action="/admin/users/edit" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        编辑用户
                    </div>
                    <div class="card-body">
                        <input type="hidden" value="{{Request::route('id')}}" name="id">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">姓名</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="请输入姓名" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">用户名</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="username" value="{{$data->username}}" placeholder="请输入用户名" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">邮箱</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="email" value="{{$data->email}}" placeholder="请输入姓名" value="">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">密码</label>
                            <div class="col-md-9">
                                <input class="form-control" type="password" name="password" value="{{$data->password}}" placeholder="请输入密码" value="">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">身份</label>
                            <div class="col-md-9">
                                <select class="form-control" name="is_admin">
                                    <option value="0" @if($data->is_admin==0) selected @endif>普通用户</option>
                                    <option value="1" @if($data->is_admin==1) selected @endif>管理员</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary" type="submit">提交</button>
                      <a class="btn btn-danger" href="/admin/users">返回</a>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection