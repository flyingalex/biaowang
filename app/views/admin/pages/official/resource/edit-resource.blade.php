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

<form action="" class="edit-area-form">

<ul class="edit-area-body">
    @if( isset( $resource ) )
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input" value="{{$resource->title}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">正文</label>
        <input type="text" class="edit-area-input" value="{{$resource->brief}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input type="text" class="edit-area-input" value="{{$resource->sequence}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input" value="{{$resource->url}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">类别</label>
        <select name="" class="edit-area-select">
        @if( isset( $column_titles ) )  
            @foreach( $column_titles as $column_title )
                @if( $resource->column_title_id == $column_title->id )
                    <option value="{{$column_title->id}}" selected="selected">{{$column_title->classification}}</option>
                @else
                    <option value="{{$column_title->id}}">{{$column_title->classification}}</option>
                @endif
            @endforeach
        @endif
        </select>
    </li>
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="{{$resource->image_url}}" class="thumbnail">
        </div>
    </li>
    @endif
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

</div>
<!-- 编辑干货 end -->

@stop

@section( 'scripts' )
@parent
@stop