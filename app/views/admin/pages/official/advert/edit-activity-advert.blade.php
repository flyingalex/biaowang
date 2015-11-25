@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 活动广告图片编辑 start -->
<div class="edit-area-container advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动广告图片</h3>
</div>

<form action="/admin/official/advert/activity-create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">副标题</label>
        <input name="subtitle" type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input name="sequence" type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <img src="{{$advert->image_url}}" class="thumbnail">
        </div>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/photo/manage"></iframe>

</div>
<!-- 活动广告图片编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop