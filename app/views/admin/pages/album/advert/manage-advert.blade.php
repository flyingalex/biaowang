@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 广告图片编辑 start -->
<div class="edit-area-container advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">广告图片</h3>
    <span class="operation-new">新建</span>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column advert-picture">缩略图</th>
        <th class="edit-area-item table-column advert-title">标题</th>
        <th class="edit-area-item table-column advert-link">链接</th>
        <th class="edit-area-item table-column advert-order">排序</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>

    <tr class="edit-area-row">
        <td class="edit-area-item advert-picture">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item advert-title">
            advert
        </td>
        <td class="edit-area-item advert-link">
            http://www.zerioi.com/test/test/test
        </td>
        <td class="edit-area-item advert-order">
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
<!-- 广告图片编辑 end -->

<!-- 活动广告编辑 start -->
<div class="edit-area-container activity-advert-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动广告图片</h3>
    <span class="operation-new"></span>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column activity-advert-picture">缩略图</th>
        <th class="edit-area-item table-column activity-advert-title">标题</th>
        <th class="edit-area-item table-column activity-advert-subtitle">副标题</th>
        <th class="edit-area-item table-column activity-advert-link">链接</th>
        <th class="edit-area-item table-column activity-advert-order">排序</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>

    <tr class="edit-area-row">
        <td class="edit-area-item activity-advert-picture">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item activity-advert-title">
            我草好坑爹啊想嘻嘻嘻嘻嘻嘻
        </td>
        <td class="edit-area-item activity-advert-subtitle">
            我草好坑爹啊想嘻嘻嘻嘻嘻嘻
        </td>
        <td class="edit-area-item activity-advert-link">
            http://www.zerioi.com/test/test/test
        </td>
        <td class="edit-area-item activity-advert-order">
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
<!-- 活动广告编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop