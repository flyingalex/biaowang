@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 相片管理 start -->
<div class="edit-area-container manage-album-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">相片管理</h3>
    <a href="/admin/album/photo/add" class="operation-new"></a>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column">相片</th>
        <th class="edit-area-item table-column">标题</th>
        <th class="edit-area-item table-column">相册</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>
    
    @if( isset( $photos ) )
        @foreach( $photos as $photo )
    <tr class="edit-area-row" id="row-{{ $photo->id }}">
        <td class="edit-area-item">
            <div class="picture-wrap">
                <div class="picture-mask"></div>
                <img src="{{$photo->image_url}}" class="thumbnail">
            </div>
        </td>
        <td class="edit-area-item">
            {{$photo->title}}
        </td>
        <td class="edit-area-item">
            {{$photo->album_title}}
        </td>
        <td class="edit-area-item edit-area-item-operation">
            <input name="photo_id" type="hidden" value="{{{ $photo->id }}}" class="operation-id">
            <span class="operation-edit">
                <a href="/admin/album/photo/edit?photo_id={{{ $photo->id }}}" class="operation-btn">
                    <img src="/images/icon/edit.png" class="operation-icon">
                    <span>编辑</span>
                </a>
            </span>
            <span class="operation-delete">
                <span action="/admin/album/photo/delete" method="POST" success-action="delete" success-message="删除成功" error-message="删除成功" class="operation-btn">
                    <img src="/images/icon/delete.png" class="operation-icon">
                    <span>删除</span>
                </span>
            </span>
        </td>
    </tr>
        @endforeach
    @endif

</table>

</div>
<!-- 相片管理 end -->

@stop

@section( 'scripts' )
@parent
@stop