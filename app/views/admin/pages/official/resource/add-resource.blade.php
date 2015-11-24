@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 添加干货 start -->
<div class="edit-area-container add-resource-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">新建干货</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">正文</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">排序</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">外链</label>
        <input type="text" class="edit-area-input">
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">类别</label>
        <select name="" class="edit-area-select">
        @if( isset( $column_titles ) )
            @foreach( $column_titles as $column_title )
                <option value="{{$column_title->id}}">{{$column_title->classification}}</option>
            @endforeach
        @endif
        </select>
    </li>
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-input-wrap">
            <input type="file" class="picture-input-btn">
            <div class="picture-input-holder">
                <div class="picture-input-icon">+</div>
                <div>添加图片</div>
            </div>
         </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 添加干货 end -->

@stop

@section( 'scripts' )
@parent
@stop