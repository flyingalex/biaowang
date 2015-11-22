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

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王相册">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">封面图片</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="/images/test/test1.jpg" class="thumbnail">
        </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 相册编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop