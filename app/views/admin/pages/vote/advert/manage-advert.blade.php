@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 广告图片编辑 start -->
<div class="edit-area-container manage-advert-area-wrap">

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
    
     @if( isset( $adverts ) )
        @foreach( $adverts as $advert)
    <tr class="edit-area-row">
        <td class="edit-area-item advert-picture">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="{{$advert->image_url}}" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item advert-title">
            {{$advert->title}}
        </td>
        <td class="edit-area-item advert-link">
            {{$advert->url}}
        </td>
        <td class="edit-area-item advert-order">
            {{$advert->sequence}}
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
       @endforeach
    @endif
</table>

</div>
<!-- 广告图片编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop