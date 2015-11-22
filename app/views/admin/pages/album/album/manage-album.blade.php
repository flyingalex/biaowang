@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 相册管理 start -->
<div class="edit-area-container manage-album-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">相册管理</h3>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column">封面图片</th>
        <th class="edit-area-item table-column">标题</th>
        <th class="edit-area-item table-column">栏目</th>
        <th class="edit-area-item table-column">排序</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>

    <tr class="edit-area-row">
        <td class="edit-area-item">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item">
            标题
        </td>
         <td class="edit-area-item">
            栏目
        </td>
        <td class="edit-area-item">
            1
        </td>
        <td class="edit-area-item edit-area-item-operation">
            <span class="operation-btn operation-edit">
                <img src="/images/icon/edit.png" class="operation-icon">
                <span>编辑</span>
            </span>
            <span class="operation-btn operation-delete">
                <img src="/images/icon/delete.png" class="operation-icon">
                <span>删除</span>
            </span>
            <span class="operation-btn operation-manage">
                <img src="/images/icon/delete.png" class="operation-icon">
                <span>管理</span>
            </span>
        </td>
    </tr>

</table>

</div>
<!-- 相册管理 end -->

@stop

@section( 'scripts' )
@parent
@stop