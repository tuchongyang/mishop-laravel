@extends('admin.layouts.layout')
@section('title','添加商品分类')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <form class="form-horizontal" action="/admin/categories/edit" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        添加商品分类
                    </div>
                    <div class="card-body">
                        <input type="hidden" value="{{Request::route('id')}}" name="id">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">分类名称</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" type="text" name="name" placeholder="请输入分类名称" value="{{$data->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary" type="submit">提交</button>
                      <a class="btn btn-danger" href="/admin/categories">返回</a>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection