@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 干货管理 start -->
<div class="edit-area-container manage-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">管理项目</h3>
    <span class="operation-new"></span>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column content-picture">项目标题</th>
        <th class="edit-area-item table-column content-title">已报名</th>
        <th class="edit-area-item table-column content-link">总投票数</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>

    <tr class="edit-area-row">
        <td class="edit-area-item content-title">
            标题
        </td>
        <td class="edit-area-item content-link">
            1111
        </td>
        <td class="edit-area-item content-vote-count">
            1111
        </td>
        <td class="edit-area-item edit-area-item-operation">
            <span class="operation-btn operation-edit">
                <img src="/images/icon/edit.png" class="operation-icon">
                <span>编辑</span>
            </span>
            <span class="operation-btn operation-close">
                <img src="/images/icon/close.png" class="operation-icon">
                <span>关闭</span>
            </span>
            <span class="operation-btn operation-delete">
                <img src="/images/icon/delete.png" class="operation-icon">
                <span>删除</span>
            </span>
        </td>
    </tr>

</table>

</div>
<!-- 干货管理 end -->

@stop

@section( 'scripts' )
@parent
@stop