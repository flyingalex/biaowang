@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/vote/project/edit-project.css">
@stop

@section( 'edit-area' )

<!-- 编辑项目 start -->
<div class="edit-area-container edit-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">编辑项目</h3>
</div>

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票数</label>
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
<!-- 编辑项目 end -->

@stop

@section( 'scripts' )
@parent
@stop