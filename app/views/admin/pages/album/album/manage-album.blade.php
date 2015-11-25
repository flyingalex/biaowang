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
    <a href="/admin/album/album/add" class="operation-new"></a>
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
    <tr class="edit-area-row" id="row-{{ $album->id }}">
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
            <input name="album_id" type="hidden" value="{{{ $album->id }}}" class="operation-id">
            <span class="operation-edit">
                <a href="/admin/album/album/edit?album_id={{{ $album->id }}}" class="operation-btn">
                    <img src="/images/icon/edit.png" class="operation-icon">
                    <span>编辑</span>
                </a>
            </span>
            <span class="operation-delete">
                <span action="/admin/album/album/delete" method="POST" success-action="delete" success-message="删除成功" error-message="删除成功" success-message="删除成功" error-message="删除成功" class="operation-btn">
                    <img src="/images/icon/delete.png" class="operation-icon">
                    <span>删除</span>
                </span>
            </span>
            <span class="operation-manage">
                <a action="/admin/album/photo/manage?album_id={{{ $album->id }}}" class="operation-btn">
                    <img src="/images/icon/edit.png" class="operation-icon">
                    <span>管理</span>
                </a>
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