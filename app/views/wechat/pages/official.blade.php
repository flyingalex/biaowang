@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/official.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/lib/scripts/lodash.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/official.js"></script>
@stop

@section( 'news' )
@include( 'wechat.components.news' )
@stop

@section( 'content' )

<!-- 活动现场 start -->
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/activity.png" class="section-header-img">
    </div>
    <div class="activity-column-wrap">
        <div class="activity-column activity-column-left">   
            <div class="activity-item">
                @if( isset( $activity_adverts[0] ) )
                <a href="{{{ $activity_adverts[0]->url }}}" class="activity-img-wrap">
                    <img src="{{$activity_adverts[0]->image_url}}" class="activity-img">
                </a>
                <div class="activity-info">
                    <div class="activity-title">{{$activity_adverts[0]->title}}</div>
                    <div class="activity-content">{{$activity_adverts[0]->sub_title}}</div>
                </div>
                @endif
            </div>
        </div>

        <div class="activity-column">
            <div class="activity-item">
                @if( isset( $activity_adverts[1] ) )
                <a href="{{{ $activity_adverts[1]->url }}}" class="activity-img-wrap">
                    <img src="{{$activity_adverts[1]->image_url}}" class="activity-img">
                </a>
                <div class="activity-info">
                    <div class="activity-title">{{$activity_adverts[1]->title}}</div>
                    <div class="activity-content">{{$activity_adverts[1]->sub_title}}</div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- 活动现场 end -->

<hr class="split-line">

<!-- 软文干货 start -->
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png" class="section-header-img">
    </div>
    <ul class="resource-type-list">
     
        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_titles[0]->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">    
                    <img src="/images/icon/resource-type-lesson.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{ $column_titles[0]->classification }}
                </div>
            </a>
        </li>

        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_titles[1]->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">    
                    <img src="/images/icon/resource-type-case.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{ $column_titles[1]->classification }}
                </div>
            </a>
        </li>

        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_titles[2]->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">    
                    <img src="/images/icon/resource-type-note.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{ $column_titles[2]->classification }}
                </div>
            </a>
        </li>

        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_titles[3]->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">    
                    <img src="/images/icon/resource-type-chart.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{ $column_titles[3]->classification }}
                </div>
            </a>
        </li>

        <li class="resource-type-item">
            <a href="?column_title_id={{ $column_titles[4]->id }}" class="resource-type-link">
                <div class="resource-type-img-wrap">    
                    <img src="/images/icon/resource-type-register.png" class="resource-type-img">
                </div>
                <div class="resource-type-text">
                    {{ $column_titles[4]->classification }}
                </div>
            </a>
        </li>
    </ul>

    <ul class="resource-list" id="resource-list">
        @if( isset( $resources ) )
            @foreach( $resources as $resource )
        <li class="resource-item">
            <span class="resource-img-wrap">
                <img src="{{$resource->image_url}}" class="resource-img">
            </span><!--
            --><span class="resource-info-wrap">
                <a href="{{$resource->url}}" class="resource-title">{{$resource->title}}</a>
                <div class="resource-content">{{$resource->brief}}</div>
            </span>
        </li>
            @endforeach
        @endif
    </ul>
</div>
<!-- 软文干货 end -->

<script type="text/template" id="resource-template">
    <% for ( var i = 0; i != data.length; ++i ){ %>
    <li class="resource-item">
        <span class="resource-img-wrap">
            <img src="<%- data[i].image_url %>" class="resource-img">
        </span><!--
        --><span class="resource-info-wrap">
            <a href="<%- data[i].url %>" class="resource-title"><%- data[i].title %></a>
            <div class="resource-content"><%- data[i].brief %></div>
        </span>
    </li>
    <% } %>
</script>

@stop

@section( 'navigation' )

@include( 'wechat.components.pagination', [
    'url'           =>      '/wechat/home-pagination',
    'list_id'          =>      '#resource-list',
    'template_id'      =>      '#resource-template',
    'parameters'    =>      [
        'column_title_id' => Input::get('column_title_id')
    ]
])

<div class="navigation-wrap">
    <div class="navigation-container">
        <a href="http://weidian.com/?userid=518781735&wfr=c" class="navigation-link-home">
            <div class="navigation-img-wrap">
                <img src="/images/icon/link-official.png" class="navigation-img">
            </div>
            <div class="navigation-text">
                立刻报名
            </div>
        </a>
    </div>
</div>
@stop