@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/official/resource/edit-resource.css">
@stop

@section( 'edit-area' )

<!-- 编辑干货 start -->
<div class="edit-area-container edit-resource-area-wrap">

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
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="/images/test/test1.jpg" class="thumbnail">
        </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</div>
<!-- 编辑干货 end -->

@stop

@section( 'scripts' )
@parent
@stop