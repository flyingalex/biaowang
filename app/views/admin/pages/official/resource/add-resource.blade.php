@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 添加干货 start -->
<div class="edit-area-container add-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">选择类别</h3>
    <select class="operation-select">
        <option value="">课堂</option>
        <option value="">案例</option>
        <option value="">笔记</option>
        <option value="">榜单</option>
        <option value="">报名</option>
    </select>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">正文</label>
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
        <label class="edit-area-label">图片</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="/images/test/test1.jpg" class="thumbnail">
        </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 添加干货 end -->

@stop

@section( 'scripts' )
@parent
@stop