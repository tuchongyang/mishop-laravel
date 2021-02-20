@extends('admin.layouts.layout')
@section('title','商品管理')

@section('content')
<main class="c-main">
    <div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
            <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="/admin/goods/new">添加</a>
                        </div>
                        <form class="form-inline" action="" method="post">
                            <div class="form-group">
                                <label class="mr-1" for="exampleInputName2">商品名称</label>
                                <input class="form-control" id="exampleInputName2" type="text" placeholder="请输入商品名称" autocomplete="name">
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-bordered table-striped ">
                        <thead>
                          <tr>
                            <th>主图</th>
                            <th>名称</th>
                            <th>分类</th>
                            <th>价格</th>
                            <th>销量</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $data)
                          <tr>
                            <td><img src="{{$data->pic}}" height="40px"></td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->category_name}}</td>
                            <td>{{$data->sale_price}}</td>
                            <td>{{$data->sales}}</td>
                            <td>
                              <a href="/admin/goods/edit/{{ $data->id }}" class="btn btn-primary btn-sm">编辑</a>
                              <a href="javascript:;" data-id="{{$data->id}}" data-name="{{$data->name}}" data-toggle="modal" data-target="#dangerModal" class="btn btn-danger ml-1 btn-sm btnRemove">删除</btn>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @if (count($datas) == 0)
                        <div class="table-empty">数据空空的</div>
                      @endif
                      <nav>
                        {{ $datas->links() }}
                      </nav>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">提示</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>确认删除商品【<span id="modelname"></span>】吗</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">关闭</button>
            <button class="btn btn-danger" type="button" id="btnSave">保存</button>
          </div>
        </div>
        <!-- /.modal-content-->
      </div>
      <!-- /.modal-dialog-->
    </div>
</main>
@endsection
@section('foot')
<script>
$(function(){
  var id=null
  $('.btnRemove').click(function(){
    $('#modelname').html($(this).data('name'))
    id = $(this).data('id')
  })
  $('#btnSave').click(function(){
    $.ajax({
      url:'/admin/goods/'+id,
      method:"delete",
      success: function(){
        location.reload()
      }
    })
  })
})
</script>
@endsection