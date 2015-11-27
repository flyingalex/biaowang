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
</div>

<ul class="edit-area-body">
    
    @if( isset( $news ) )
        @foreach( $news as $new )
    <li class="edit-area-row">
        <label class="edit-area-label">新闻{{$new->id}}</label>
        <input type="hidden" name="news_id" value="{{ $new->id }}" class="operation-id">
        <input type="text" name="content" class="edit-area-input" value="{{$new->content}}" readonly="readonly">
        <span class="operation-wrap">
            <button class="operation-edit-blue-btn operation-blue-btn btn">编辑</button>
            <button class="operation-delete-blue-btn operation-blue-btn btn" action="/admin/system/news-delete" method="POST">删除</button>
            <button class="operation-modify-blue-btn operation-blue-btn operation-invalid-btn btn" action="/admin/system/news-create-edit" method="POST">确认</button>
        </span>
    </li>
        @endforeach
    @endif
    <li class="edit-area-row">
        <label class="edit-area-label">添加新闻</label>
        <input type="text" name="content" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-add-blue-btn operation-blue-btn btn" action="/admin/system/news-create-edit">添加</button>
        </span>
    </li>
</ul>

</div>
<!-- 新闻管理 end -->

@stop

@section( 'scripts' )
@parent
@stop