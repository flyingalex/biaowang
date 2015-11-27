@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 软文干货标题编辑 start -->
<div class="edit-area-container edit-resource-title-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">软文干货</h3>
</div>

<ul class="edit-area-body">
   
    @if( isset( $column_titles ) )
        @foreach( $column_titles as $column_title )
    <li class="edit-area-row">
        <label class="edit-area-label">分类{{$column_title->id}}</label>
        <input type="hidden" name="column_title_id" value="{{ $column_title->id }}" class="operation-id">
        <input type="text" name="classification" class="edit-area-input"  value="{{$column_title->classification}}" readonly="readonly">
        <span class="operation-wrap">
            <button class="operation-edit-blue-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify-blue-btn operation-blue-btn btn" action="/admin/official/title/column-title-edit" method="POST">确认</button>
        </span>
    </li>
        @endforeach
    @endif

    <!-- <input type="submit" class="operation-confirm btn" value="发布"> -->
</ul>

</div>
<!-- 栏目标题编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop