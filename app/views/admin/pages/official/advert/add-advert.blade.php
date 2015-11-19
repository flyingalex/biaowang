@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/official/advert/add-advert.css">
@stop

@section( 'edit-area' )

<!-- 广告图片新建 start -->
<div class="edit-area-container advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">广告图片</h3>
</div>

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="/images/test/test1.jpg" class="thumbnail">
        </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</div>
<!-- 广告图片新建 end -->

@stop

@section( 'scripts' )
@parent
@stop