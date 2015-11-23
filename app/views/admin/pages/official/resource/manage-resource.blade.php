@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 干货管理 start -->
<div class="edit-area-container browse-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">干货管理</h3>
    <select class="operation-select">
    @if( isset( $column_titles ) )
        @foreach( $column_titles as $column_title)
            @if( $column_title->id == $column_title_id )
                <option value="{{$column_title->id}}" selected="selected"> {{$column_title->classification}} </option>
            @else
                <option value="{{$column_title->id}}" > {{$column_title->classification}} </option>
            @endif
        @endforeach
    @endif
    </select>
    <span class="operation-new"></span>
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
        
    @if( isset( $resources ) )
        @foreach( $resources as $resource )
    <tr class="edit-area-row">
        <td class="edit-area-item resource-picture">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="{{$resource->image_url}}" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item resource-title">
            {{$resource->title}}
        </td>
         <td class="edit-area-item resource-content">
            {{$resource->brief}}
        </td>
        <td class="edit-area-item resource-link">
            {{$resource->url}}
        </td>
        <td class="edit-area-item resource-order">
            {{$resource->sequence}}            
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
<!-- 干货管理 end -->

@stop

@section( 'scripts' )
@parent
@stop