@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
<link rel="stylesheet" href="/lib/styles/jquery-ui.min.css">
@stop

@section( 'edit-area' )

<!-- 编辑项目 start -->
<div class="edit-area-container edit-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">基本内容</h3>
</div>

<form action="/admin/vote/project/create-edit" method="POST" target="form-target" class="edit-area-form">

<ul class="edit-area-body">
    
    <li class="edit-area-row">
        <label class="edit-area-label">投票主题</label>
        <input name="title" type="text" class="edit-area-input" value="{{$project->title}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票时间</label>
        <input name="vote_start" type="text" class="edit-area-date-input" value="{{$project->vote_start}}">
        <span>------</span>
        <input name="vote_stop" type="text" class="edit-area-date-input" value="{{$project->vote_stop}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">报名时间</label>
        <input name="sign_up_start" type="text" class="edit-area-date-input" value="{{$project->sign_up_start}}">
        <span>------</span>
        <input name="sign_up_stop" type="text" class="edit-area-date-input" value="{{$project->sign_up_stop}}">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票类型</label>
        <select class="edit-area-select">
            <option value="">单选</option>
        </select>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动介绍</label>
        <textarea name="content" class="edit-area-textarea">{{$project->content}}</textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动规则</label>
        <textarea name="activity_rule" class="edit-area-textarea">{{$project->activity_rule}}</textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">奖项设置</label>
        <textarea name="award_site" class="edit-area-textarea">{{$project->award_site}}</textarea>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/photo/manage"></iframe>

</div>
<!-- 编辑项目 end -->

@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/lib/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="/dist/admin/js/pages/add-project.js"></script>
@stop