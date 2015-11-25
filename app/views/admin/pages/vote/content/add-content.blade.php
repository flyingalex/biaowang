@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 添加内容 start -->
<div class="edit-area-container add-content-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">添加内容</h3>
</div>

<form action="/admin/vote/content/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票数</label>
        <input name="vote_number" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">类别</label>
        <select name="project_id" class="edit-area-select">
        @foreach( $projects as $project )
            <option value="{{$project->id}}">{{$project->title}}</option>
        @endforeach
        </select>
    </li>
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-input-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <div class="picture-input-holder">
                <div class="picture-input-icon">+</div>
                <div>添加图片</div>
            </div>
         </div>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/vote/content/manage"></iframe>

</div>
<!-- 添加内容 end -->

@stop

@section( 'scripts' )
@parent
@stop