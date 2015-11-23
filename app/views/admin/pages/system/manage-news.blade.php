@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 新闻管理 start -->
<div class="edit-area-container browse-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">新闻管理</h3>
    <span class="operation-new"></span>
</div>

<ul class="edit-area-body">
    
    @if( isset( $news ) )
        @foreach( $news as $new )
    <li class="edit-area-row">
        <label class="edit-area-label">新闻{{$new->id}}</label>
        <input type="text" class="edit-area-input" value="{{$new->content}}">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-delete operation-btn operation-blue-btn btn">删除</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
        @endforeach
    @endif
</ul>

</div>
<!-- 新闻管理 end -->

@stop

@section( 'scripts' )
@parent
@stop