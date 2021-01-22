@extends('admin.layouts.layout')
@section('title','添加商品')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        添加商品
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">商品名称</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" type="text" name="name" placeholder="请输入商品名称">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection