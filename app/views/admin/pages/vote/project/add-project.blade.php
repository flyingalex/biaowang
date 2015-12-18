@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
<link rel="stylesheet" href="/dist/admin/css/pages/vote/add-project.css">
<link rel="stylesheet" href="/lib/styles/jquery-ui.min.css">
@stop

@section( 'edit-area' )

<!-- 创建项目 start -->
<div class="edit-area-container add-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">基本内容</h3>
</div>

<form action="/admin/vote/project/create-edit" method="POST" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">投票主题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票时间</label>
        <input name="vote_start" type="text" class="edit-area-date-input">
        <span>------</span>
        <input name="vote_stop" type="text" class="edit-area-date-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">报名时间</label>
        <input name="sign_up_start" type="text" class="edit-area-date-input">
        <span>------</span>
        <input name="sign_up_stop" type="text" class="edit-area-date-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">投票类型</label>
        <select class="edit-area-select">
            <option value="">单选项目</option>
        </select>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动介绍</label>
        <textarea name="content" class="edit-area-textarea"></textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">活动规则</label>
        <textarea name="activity_rule" class="edit-area-textarea"></textarea>
    </li>
    <li class="edit-area-row edit-area-textarea-row">
        <label class="edit-area-label">奖项设置</label>
        <textarea name="award_site" class="edit-area-textarea"></textarea>
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/vote/project/manage"></iframe>

</div>
<!-- 创建项目 end -->

@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/lib/scripts/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="/dist/admin/js/pages/add-project.js"></script>
@stop
