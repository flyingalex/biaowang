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

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input" value="{{$advert->title}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input type="text" class="edit-area-input" value="{{$advert->sequence}}">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input" value="{{$advert->url}}">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="{{$advert->image_url}}" class="thumbnail">
        </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 广告图片编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop