@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/official.css">
@stop

@section( 'news' )
@include( 'wechat.components.news' )
@stop

@section( 'content' )

<!-- 活动现场 start -->
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/activity.png">
    </div>
    <div class="activity-column-wrap">
        <div class="activity-column activity-column-left">   
            <div class="activity-item">
                <div class="activity-img-wrap">
            @if( isset( $activity_adverts[0] ) )
                    <img src="{{$activity_adverts[0]->image_url}}" class="activity-img">
                </div>
                <div class="activity-info">
                    <div class="activity-title">{{$activity_adverts[0]->title}}</div>
                    <div class="activity-content">{{$activity_adverts[0]->sub_title}}</div>
            @endif
                </div>
            </div>
        </div>

        <div class="activity-column">
            <div class="activity-item">
                <div class="activity-img-wrap">
            @if( isset( $activity_adverts[1] ) )
                    <img src="{{$activity_adverts[1]->image_url}}" class="activity-img">
                </div>
                <div class="activity-info">
                    <div class="activity-title">{{$activity_adverts[1]->title}}</div>
                    <div class="activity-content">{{$activity_adverts[1]->sub_title}}</div>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 活动现场 end -->

<hr class="split-line">

<!-- 软文干货 start -->
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <ul class="resource-type-list">
       @if( isset( $column_titles ) )
            @foreach( $column_titles as $column_title )
        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_title->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">
                    <img src="/images/icon/resource-type-lesson.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{$column_title->classification}}
                </div>
            </a>
        </li>
            @endforeach
        @endif
    </ul>
    <ul class="resource-list">
        @if( isset( $resources ) )
            @foreach( $resources as $resource )
        <li class="resource-item">
            <span class="resource-img-wrap">
                <img src="{{$resource->image_url}}" class="resource-img">
            </span><!--
            --><span class="resource-info-wrap">
                <a href="" class="resource-title">{{$resource->title}}</a>
                <div class="resource-content">{{$resource->brief}}</div>
            </span>
        </li>
            @endforeach
        @endif
    </ul>
</div>
<!-- 软文干货 end -->

@stop

@section( 'navigation' )
<div class="navigation-wrap">
    <div class="navigation-container">
        <a href="" class="navigation-link-home">
            <div class="navigation-img-wrap">
                <img src="/images/icon/link-vote.png" class="navigation-img">
            </div>
            <div class="navigation-text">
                访问标王官网
            </div>
        </a>
    </div>
</div>
@stop