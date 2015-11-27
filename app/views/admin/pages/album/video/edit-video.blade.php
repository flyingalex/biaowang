@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 视频编辑 start -->
<div class="edit-area-container vedio-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">视频</h3>
</div>

<form action="/admin/album/video/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <input name="video_id" type="hidden" value="{{ $video->id }}">
    
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input" value="{{$video->title}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王视频" readonly="readonly">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">链接</label>
        <input name="url" type="text" class="edit-area-input" value="{{$video->url}}">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">封面照片</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <img src="{{$video->image_url}}" class="thumbnail">
        </div>
        <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
    </li>

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/video/manage"></iframe>

</div>
<!-- 视频编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop