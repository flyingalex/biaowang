@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/official/advert.css">
@stop

@section( 'edit-area' )

<!-- 广告图片编辑 start -->
<div class="list-wrap advert-table-wrap">

<div class="list-top clearfix">
    <h3 class="list-title">广告图片</h3>
    <span class="op-new"></span>
</div>

<table class="list-body">
    
    <tr class="list-header">
        <th class="list-item list-column advert-picture">缩略图</th>
        <th class="list-item list-column advert-title">标题</th>
        <th class="list-item list-column advert-link">链接</th>
        <th class="list-item list-column advert-order">排序</th>
        <th class="list-item list-column list-item-op">操作</th>
    </tr>

    <tr class="list-row">
        <td class="list-item advert-picture">
            <div class="picture-wrap">
                <div class="pic-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="list-item advert-title">
            <input type="text" class="advert-title-input list-item-input list-item-input-normal" value="我草好坑爹啊想嘻嘻嘻嘻嘻嘻">
        </td>
        <td class="list-item advert-link">
            <input type="text" class="advert-link-input list-item-input list-item-input-normal" value="http://www.zerioi.com/test/test/test">
        </td>
        <td class="list-item advert-order">
            <input type="text" class="advert-order-input list-item-input list-item-input-normal" value="1">
        </td>
        <td class="list-item list-item-op">
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

    <tr class="list-row">
        <td class="list-item advert-picture">
            <div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="list-item advert-title">
            advert
        </td>
        <td class="list-item advert-link">
            zerioi.com
        </td>
        <td class="list-item advert-order">
            1
        </td>
        <td class="list-item list-item-op">
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
<div class="list-wrap activity-advert-table-wrap">

<div class="list-top clearfix">
    <h3 class="list-title">活动广告图片</h3>
    <span class="op-new"></span>
</div>

<table class="list-body">

    <tr class="list-header">
        <th class="list-item list-column activity-advert-picture">缩略图</th>
        <th class="list-item list-column activity-advert-title">标题</th>
        <th class="list-item list-column activity-advert-subtitle">副标题</th>
        <th class="list-item list-column activity-advert-link">链接</th>
        <th class="list-item list-column activity-advert-order">排序</th>
        <th class="list-item list-column list-item-op">操作</th>
    </tr>

    <tr class="list-row">
        <td class="list-item activity-advert-picture">
            <div class="picture-wrap">
                <div class="pic-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="list-item activity-advert-title">
            我草好坑爹啊想嘻嘻嘻嘻嘻嘻
        </td>
        <td class="list-item activity-advert-subtitle">
            我草好坑爹啊想嘻嘻嘻嘻嘻嘻
        </td>
        <td class="list-item activity-advert-link">
            http://www.zerioi.com/test/test/test
        </td>
        <td class="list-item activity-advert-order">
            1
        </td>
        <td class="list-item list-item-op">
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

    <tr class="list-row">
        <td class="list-item activity-advert-picture">
            <div class="picture-wrap">
                <div class="pic-mask"></div>
                <img src="/images/test/test1.jpg" class="thumbnail">
            </div>
        </td>
        <td class="list-item activity-advert-title">
            <input type="text" class="activity-advert-title-input list-item-input" value="我草好坑爹啊想嘻嘻嘻嘻嘻嘻">
        </td>
        <td class="list-item activity-advert-subtitle">
            <input type="text" class="activity-advert-subtitle-input list-item-input" value="我草好坑爹啊想嘻嘻嘻嘻嘻嘻">
        </td>
        <td class="list-item activity-advert-link">
            <input type="text" class="activity-advert-link-input list-item-input" value="http://www.zerioi.com/test/test/test">
        </td>
        <td class="list-item activity-advert-order">
            <input type="text" class="activity-advert-order-input list-item-input" value="1">
        </td>
        <td class="list-item list-item-op">
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