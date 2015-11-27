@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 添加干货 start -->
<div class="edit-area-container add-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">添加干货</h3>
</div>

<form action="/admin/official/resource/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">正文</label>
        <input name="brief" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input name="sequence" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">类别</label>
        <select name="column_title_id" class="edit-area-select">
        @if( isset( $column_titles ) )
            @foreach( $column_titles as $column_title )
                <option value="{{$column_title->id}}">{{$column_title->classification}}</option>
            @endforeach
        @endif
        </select>
    </li>
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-input-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <div class="picture-input-holder">
                <div class="picture-input-icon">+</div>
                <div>添加图片</div>
            </div>
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
<!-- 添加干货 end -->

@stop

@section( 'scripts' )
@parent
@stop