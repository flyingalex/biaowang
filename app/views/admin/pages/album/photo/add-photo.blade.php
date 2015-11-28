@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 相片新建 start -->
<div class="edit-area-container album-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">相片</h3>
</div>

<form action="/admin/album/photo/create-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王相册" readonly="readonly">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">相册</label>
        <select name="album_id" class="edit-area-select">
            @if( isset( $albums ) )
                @foreach( $albums as $album )
            <option value="{{$album->id}}">{{$album->title}}</option>
                @endforeach
            @endif
        </select>
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-input-wrap">
            <input name="image" type="file" class="picture-input-btn" id="cover-image">
            <div class="picture-input-holder">
                <div class="picture-input-icon">+</div>
                <div>添加图片</div>
            </div>
         </div>
         <div class="input-file-name-wrap">
            已选择文件: <span class="input-file-name"></span>
        </div>
        <input type="hidden" id="image-url" name="image" />
    </li>
    
    <input type="submit" class="operation-confirm btn" value="发布">
</ul>

</form>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/photo/manage"></iframe>

</div>
<!-- 相片新建 end -->

@stop

@section( 'scripts' )
@parent
@stop