@extends('admin.layouts.layout')
@section('title','商品分类管理')

@section('content')
<script>var app = @json($datas)</script>
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
                    <form class="form-inline" action="" method="get">
                        <div class="form-group mr-2">
                            <label class="mr-1" for="exampleInputName2">名称</label>
                            <input class="form-control" id="exampleInputName2" type="text" placeholder="请输入名称" name="name" value="{{Request::input('name')}}" autocomplete="name">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">搜索</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped ">
                    <thead>
                      <tr>
                        <th>名称</th>
                        <th>状态</th>
                        <th width="150">操作</th>
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
                        <td>
                          <a href="/admin/categorys/edit/{{ $data->id }}" class="btn btn-primary btn-sm">编辑</btn>
                          <a href="javascript:;" data-id="{{$data->id}}" data-name="{{$data->name}}" data-toggle="modal" data-target="#dangerModal" class="btn btn-danger ml-1 btn-sm btnRemove">删除</btn>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
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
            <p>确认删除分类【<span id="modelname"></span>】吗</p>
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
    id=$(this).data('id')
  })
  $('#btnSave').click(function(){
    $.ajax({
      url:'/admin/categorys/'+id,
      method:"delete",
      success: function(){
        location.reload()
      }
    })
  })
})
</script>
@endsection