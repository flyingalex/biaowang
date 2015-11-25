@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 编辑项目 start -->
<div class="edit-area-container edit-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">基本内容</h3>
</div>

<form action="" class="edit-area-form">
    @if( isset( $project ) )
<ul class="edit-area-body">
    
    <li class="edit-area-row">
        <label class="edit-area-label">投票主题</label>
        <input type="text" class="edit-area-input" value="{{$project->title}}"> 
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票时间</label>
        <input type="text" class="edit-area-date-input" value="{{$project->vote_start}}">
        <span>------</span>
        <input type="text" class="edit-area-date-input" value="{{$project->vote_stop}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">报名时间</label>
        <input type="text" class="edit-area-date-input" value="{{$project->sign_up_start}}">
        <span>------</span>
        <input type="text" class="edit-area-date-input" value="{{$project->sign_up_stop}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票类型</label>
        <select name="" class="edit-area-select">
            <option value="">单选</option>
        </select>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动介绍</label>
        <textarea name="" class="edit-area-textarea">{{$project->content}}</textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动规则</label>
        <textarea name="" class="edit-area-textarea">{{$project->activity_rule}}</textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">奖项设置</label>
        <textarea name="" class="edit-area-textarea">{{$project->award_site}}</textarea>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>
    @endif
</form>

</div>
<!-- 编辑项目 end -->

@stop

@section( 'scripts' )
@parent
@stop