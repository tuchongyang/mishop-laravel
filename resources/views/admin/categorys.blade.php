@extends('admin.layouts.layout')
@section('title','商品分类管理')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a class="btn btn-primary" href="/admin/categorys/new">添加</a>
                    </div>
                    <form class="form-inline" action="" method="post">
                        <div class="form-group">
                            <label class="mr-1" for="exampleInputName2">名称</label>
                            <input class="form-control" id="exampleInputName2" type="text" placeholder="请输入商品名称" autocomplete="name">
                        </div>
                    </form>
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>名称</th>
                        <th>状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($datas as $data)
                      <tr>
                        <td>{{ $data->name }}</td>
                        <td>
                          @if($data->status==1)
                            <span class="badge badge-success">可用</span>
                          @else
                            <span class="badge badge-dark">不可用</span>
                          @endif
                        </td>
                        <td></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  <nav>
                  <ul class="pagination">
                    {{ $datas->links() }}
                  </nav>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection