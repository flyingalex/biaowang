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

<form action="" class="edit-area-form">

<ul class="edit-area-body">
    
    @if( isset( $work ) )
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input" value="{{$work->title}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input" value="{{$work->url}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票数</label>
        <input type="text" class="edit-area-input" value="{{$work->vote_number}}">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">所属项目</label>
         <select name="" class="edit-area-select">
        @if( isset( $work ))    
        @if( isset( $projects ))    
            @foreach( $projects as $project )
                @if( $project->id == $work->project_id )
                    <option value="{{$project->id}}" selected="selected">{{$project->title}}</option>
                @else
                    <option value="{{$project->id}}">{{$project->title}}</option>
                @endif 
            @endforeach
        @endif
        @endif
        </select>
    </li>

    <li class="edit-area-picture-row">
        <label class="edit-area-label">缩略图</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="{{$work->image_url}}" class="thumbnail">
        </div>
    </li>
    @endif

    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

</div>
<!-- 编辑内容 end -->

@stop

@section( 'scripts' )
@parent
@stop