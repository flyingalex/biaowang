@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 编辑干货 start -->
<div class="edit-area-container edit-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">编辑干货</h3>
</div>

<form action="/admin/official/resource/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <input name="resource_id" type="hidden" value="{{ $resource->id }}">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input" value="{{$resource->title}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">正文</label>
        <input name="brief" type="text" class="edit-area-input" value="{{$resource->brief}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input name="sequence" type="text" class="edit-area-input" value="{{$resource->sequence}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input" value="{{$resource->url}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">类别</label>
        <select name="column_title_id" class="edit-area-select">
        @foreach( $column_titles as $column_title )
            @if( $resource->column_title_id == $column_title->id )
                <option value="{{$column_title->id}}" selected="selected">{{$column_title->classification}}</option>
            @else
                <option value="{{$column_title->id}}">{{$column_title->classification}}</option>
            @endif
        @endforeach
        </select>
    </li>
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <img src="{{$resource->image_url}}" class="thumbnail">
        </div>
        <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
    </li>

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/official/resource/manage"></iframe>

</div>
<!-- 编辑干货 end -->

@stop

@section( 'scripts' )
@parent
@stop