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
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>
    
    @if( isset( $albums ) )
        @foreach( $albums as $album )
    <tr class="edit-area-row">
        <td class="edit-area-item">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="{{$album->image_url}}" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item">
            {{$album->title}}
        </td>
         <td class="edit-area-item">
            标王相册
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
        @endforeach
    @endif

</table>

</div>
<!-- 相册管理 end -->

@stop

@section( 'scripts' )
@parent
@stop