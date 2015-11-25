@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 广告图片新建 start -->
<div class="edit-area-container advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动广告图片</h3>
</div>

<form action="" class="edit-area-form">

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
            <div class="picture-mask"></div>
            <img src="{{$advert->image_url}}" class="thumbnail">
        </div>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

</div>
<!-- 广告图片新建 end -->

@stop

@section( 'scripts' )
@parent
@stop