@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/official/advert.css">
@stop

@section( 'edit-area' )

<!-- 广告图片编辑 start -->
<div class="table-wrap advert-table-wrap">

<div class="table-top clearfix">
    <h3 class="table-title">广告图片</h3>
    <span class="op-new"></span>
</div>

<table class="table-body">

    <tr class="table-header">
        <th class="table-item table-column advert-picture">缩略图</th>
        <th class="table-item table-column advert-title">标题</th>
        <th class="table-item table-column advert-link">链接</th>
        <th class="table-item table-column advert-order">排序</th>
        <th class="table-item table-column table-item-op">操作</th>
    </tr>

    <tr class="table-row">
        <td class="table-item advert-picture">
            <div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="table-item advert-title">
            advert
        </td>
        <td class="table-item advert-link">
            <input type="text" class="advert-link-input table-item-input table-item-input-normal" value="http://www.zerioi.com/test/test/test">
        </td>
        <td class="table-item advert-order">
            1
        </td>
        <td class="table-item table-item-op">
            <span class="op-btn op-edit">
                <img src="/images/icon/edit.png" class="op-icon">
                <span>编辑</span>
            </span>
            <span class="op-btn op-delete">
                <img src="/images/icon/delete.png" class="op-icon">
                <span>删除</span>
            </span>
        </td>
    </tr>

</table>

</div>
<!-- 广告图片编辑 end -->

<!-- 活动广告编辑 start -->
<div class="table-wrap activity-advert-table-wrap">

<div class="table-top clearfix">
    <h3 class="table-title">活动广告图片</h3>
    <span class="op-new"></span>
</div>

<table class="table-body">

    <tr class="table-header">
        <th class="table-item table-column activity-advert-picture">缩略图</th>
        <th class="table-item table-column activity-advert-title">标题</th>
        <th class="table-item table-column activity-advert-subtitle">副标题</th>
        <th class="table-item table-column activity-advert-link">链接</th>
        <th class="table-item table-column activity-advert-order">排序</th>
        <th class="table-item table-column table-item-op">操作</th>
    </tr>

    <tr class="table-row">
        <td class="table-item activity-advert-picture">
            <div class="picture-wrap">
                <div class="pic-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="table-item activity-advert-title">
            <input type="text" class="activity-advert-title-input table-item-input" value="我草好坑爹啊想嘻嘻嘻嘻嘻嘻">
        </td>
        <td class="table-item activity-advert-subtitle">
            我草好坑爹啊想嘻嘻嘻嘻嘻嘻
        </td>
        <td class="table-item activity-advert-link">
            http://www.zerioi.com/test/test/test
        </td>
        <td class="table-item activity-advert-order">
            1
        </td>
        <td class="table-item table-item-op">
            <span class="op-btn op-edit">
                <img src="/images/icon/edit.png" class="op-icon">
                <span>编辑</span>
            </span>
            <span class="op-btn op-delete">
                <img src="/images/icon/delete.png" class="op-icon">
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