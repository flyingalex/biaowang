@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-table.css">
@stop

@section( 'edit-area' )

<!-- 干货管理 start -->
<div class="edit-area-container manage-project-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">管理项目</h3>
    <a href="/admin/vote/project/add" class="operation-new"></a>
</div>

<table class="edit-area-body">

    <tr class="edit-area-header">
        <th class="edit-area-item table-column project-picture">项目标题</th>
        <th class="edit-area-item table-column project-title">已报名</th>
        <th class="edit-area-item table-column project-link">总投票数</th>
        <th class="edit-area-item table-column edit-area-item-operation">操作</th>
    </tr>
    

    @if( isset( $projects ) )
        @foreach( $projects as $project )
    <tr class="edit-area-row" id="row-{{ $project->id }}">
        <td class="edit-area-item project-title">
            {{$project->title}}
        </td>
        <td class="edit-area-item project-link">
            {{$project->sign_up_total}}
        </td>
        <td class="edit-area-item project-vote-count">
            {{$project->view_total}}
        </td>
        <td class="edit-area-item edit-area-item-operation">
            <input name="project_id" type="hidden" value="{{{ $project->id }}}" class="operation-id">
            <span class="operation-edit">
                <a href="/admin/vote/project/edit?project_id={{{ $project->id }}}" class="operation-btn">
                    <img src="/images/icon/edit.png" class="operation-icon">
                    <span>编辑</span>
                </a>
            </span>
            <span class="operation-delete">
                <span action="/admin/vote/project/delete" method="POST" class="operation-btn">
                    <img src="/images/icon/delete.png" class="operation-icon">
                    <span>删除</span>
                </span>
            </span>
            @if( $project->display )
            <span class="operation-btn operation-open">
                <span action="/admin/vote/project/display" method="POST" class="operation-btn">
                    <img src="/images/icon/close.png" class="operation-icon">
                    <span>开启</span>
                </span>
            </span>
            @else
            <span class="operation-btn operation-close">
                <span action="/admin/vote/project/display" method="POST" class="operation-btn">
                    <img src="/images/icon/close.png" class="operation-icon">
                    <span>关闭</span>
                </span>
            </span>
            @endif
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