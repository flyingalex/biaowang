@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 用户管理 start -->
<div class="edit-area-container vedio-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">修改密码</h3>
</div>

<div class="edit-area-body">

<ul>
    <li class="edit-area-row">
        <label class="edit-area-label">账号</label>
        @if( isset( $user ) )
        <span class="edit-area-text">{{$user->account}}</span>
        @endif
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">密码</label>
        @if( isset( $user ) )
        <span class="edit-area-text">****************</span>
        @endif
    </li>
</ul>

<form action="/admin/system/reset-password" method="POST" target="form-target" class="edit-area-form">
    <div class="edit-area-row">
        <label class="edit-area-label">旧密码</label>
        <input name="source_code" type="password" class="edit-area-input">
    </div>
    <div class="edit-area-row">
        <label class="edit-area-label">新密码</label>
        <input name="password" type="password" class="edit-area-input">
    </div>
    <div class="edit-area-row">
        <label class="edit-area-label">确认</label>
        <input name="re_password" type="password" class="edit-area-input">
    </div>
    
    <input type="submit" class="operation-confirm btn" value="确认修改">
</form>

<iframe name="form-target" id="form-target"></iframe>

</div>

</form>

</div>
<!-- 用户管理 end -->

@stop

@section( 'scripts' )
@parent
@stop