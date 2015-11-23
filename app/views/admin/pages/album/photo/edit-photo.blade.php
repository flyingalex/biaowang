@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 相片编辑 start -->
<div class="edit-area-container album-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">相片</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">
    
    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        @if( isset( $photo ))    
        <input type="text" class="edit-area-input" value="{{$photo->title}}">
        @endif
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王相册">
    </li>
    
    <li class="edit-area-row">
        <label class="edit-area-label">相册</label>
        <select name="" class="edit-area-select">
        @if( isset( $photo ))    
        @if( isset( $albums ))    
            @foreach( $albums as $album )
                @if( $album->id == $photo->album_id )
                    <option value="{{$album->id}}" selected="selected">{{$album->title}}</option>
                @else
                    <option value="{{$album->id}}">{{$album->title}}</option>
                @endif 
            @endforeach
        @endif
        @endif
        </select>
    </li>
        
        @if( isset( $photo ))
    <li class="edit-area-picture-row">
        <label class="edit-area-label">相片</label>
        <div class="picture-wrap">
            <div class="picture-mask"></div>
            <img src="{{$photo->image_url}}" class="thumbnail">
        </div>
    </li>
        @endif
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 相片编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop