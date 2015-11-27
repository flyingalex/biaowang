@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 广告图片编辑 start -->
<div class="edit-area-container advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">编辑广告</h3>
</div>

<form action="/admin/official/advert/advert-create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <input type="hidden" name="type" value="2">
    <input name="advert_id" type="hidden" value="{{ $advert->id }}">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input" value="{{$advert->title}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input name="sequence" type="text" class="edit-area-input" value="{{$advert->sequence}}">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input" value="{{$advert->url}}">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <img src="{{$advert->image_url}}" class="thumbnail">
        </div>
        <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/vote/advert/manage"></iframe>

</div>
<!-- 广告图片编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop