@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 编辑内容 start -->
<div class="edit-area-container edit-content-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">编辑内容</h3>
</div>

<form action="/admin/vote/content/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <input name="work_id" type="hidden" value="{{ $work->id }}">
    
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input" value="{{$work->title}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input name="url" type="text" class="edit-area-input" value="{{$work->url}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票数</label>
        <input name="vote_number" type="text" class="edit-area-input" value="{{$work->vote_number}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">所属项目</label>
         <select name="project_id" class="edit-area-select"> 
        @foreach( $projects as $project )
            @if( $project->id == $work->project_id )
                <option value="{{$project->id}}" selected="selected">{{$project->title}}</option>
            @else
                <option value="{{$project->id}}">{{$project->title}}</option>
            @endif 
        @endforeach
        </select>
    </li>

    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <input name="image" type="file" class="picture-input-btn" id="cover-image">
            <img src="{{$work->image_url}}" class="thumbnail">
        </div>
        <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
        <input type="hidden" id="image-url" name="image" />
    </li>

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/vote/content/manage"></iframe>

</div>
<!-- 编辑内容 end -->

@stop

@section( 'scripts' )
@parent
@stop