@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/official/resource/browse-resource.css">
@stop

@section( 'edit-area' )

<!-- 干货管理 start -->
<div class="edit-area-container browse-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">干货管理</h3>
    <select class="operation-select">
        <option value="">课堂</option>
        <option value="">案例</option>
        <option value="">笔记</option>
        <option value="">榜单</option>
        <option value="">报名</option>
    </select>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column resource-picture">缩略图</th>
        <th class="edit-area-item table-column resource-title">标题</th>
        <th class="edit-area-item table-column resource-content">正文</th>
        <th class="edit-area-item table-column resource-link">链接</th>
        <th class="edit-area-item table-column resource-order">排序</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>

    <tr class="edit-area-row">
        <td class="edit-area-item resource-picture">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item resource-title">
            干货标题
        </td>
         <td class="edit-area-item resource-content">
            浩总好帅
        </td>
        <td class="edit-area-item resource-link">
            http://www.zerioi.com/test/test/test
        </td>
        <td class="edit-area-item resource-order">
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
        </td>
    </tr>

</table>

</div>
<!-- 干货管理 end -->

@stop

@section( 'scripts' )
@parent
@stop