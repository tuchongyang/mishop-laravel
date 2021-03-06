@extends('admin.layouts.layout')
@section('title','添加商品')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <form class="form-horizontal" action="/admin/goods/new" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        添加商品
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">分类</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" placeholder="请选择分类">
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">商品名称</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name" placeholder="请输入商品名称">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">商品简介</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="description" placeholder="请输入商品简介">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">商品主图</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="pic" placeholder="请输入商品主图地址">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">市场价格</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="price" placeholder="请输入商品价格">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">售卖价格</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="sale_price" placeholder="请输入商品价格">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">详情</label>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="6" name="content" placeholder="请输入商品价格"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary" type="submit">提交</button>
                      <a class="btn btn-danger" href="/admin/goods">返回</a>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection