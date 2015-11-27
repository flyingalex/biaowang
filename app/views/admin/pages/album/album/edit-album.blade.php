@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 相册编辑 start -->
<div class="edit-area-container album-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动相册</h3>
</div>

<form action="/admin/album/album/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <input type="hidden" name="album_id" value="{{ $album->id }}">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input" value="{{ $album->title }}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王相册" readonly="readonly">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">封面图片</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <img src="{{$album->image_url}}" class="thumbnail">
        </div>
        <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
    </li>

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/album/manage"></iframe>

</div>
<!-- 相册编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop