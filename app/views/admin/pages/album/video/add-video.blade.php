@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 视频新建 start -->
<div class="edit-area-container vedio-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">视频</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">
    
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王视频">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">链接</label>
        <input type="text" class="edit-area-input">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">封面图片</label>
        <div class="picture-input-wrap">
            <input type="file" class="picture-input-btn">
            <div class="picture-input-holder">
                +<br>添加图片
            </div>
         </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 视频新建 end -->

@stop

@section( 'scripts' )
@parent
@stop