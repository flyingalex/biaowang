@extends( 'wechat.template.master' )

@section( 'title' )
标王众筹 - 项目投票
@stop

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/vote.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="/lib/scripts/lodash.min.js"></script>
<script type="text/javascript" src="/dist/wechat/js/pages/vote.js"></script>
@stop

@section( 'content' )

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        数据统计
    </div>
    <div class="section-content vote-statistics-wrap">
        @if( isset( $project ))
        <div class="vote-statistics-item" id="vote-statistics-register">
            <div class="vote-statistics-key">已报名</div>
            <div class="vote-statistics-value">{{$project->sign_up_total}}</div>
        </div>
        <div class="vote-statistics-item" id="vote-statistics-total">
            <div class="vote-statistics-key">投票人数</div>
            <div class="vote-statistics-value">{{$project->vote_total}}</div>
        </div>
        <div class="vote-statistics-item" id="vote-statistics-pv">
            <div class="vote-statistics-key">访问量</div>
            <div class="vote-statistics-value">{{$project->view_total}}</div>
        </div>
        @endif
    </div>
</div>

<hr class="split-line">

<div class="section-wrap">
    @if( $project )
    <div class="section-header">
        活动状态
    </div>
    <div class="section-content">
        <div class="vote-info-item">
            <div class="vote-info-img-wrap">
                <img src="/images/icon/vote-expire.png" class="vote-info-img">
            </div>
            <div class="vote-info-item-content">
                <span class="vote-info-item-key">
                    距离活动结束还有：
                </span>
                @if( $isClosed )
                    <span class="vote-info-item-message">
                        该活动已关闭
                    </span>
                @else
                    <span class="vote-info-item-message">
                        <input type="hidden" name="vote-expire" value="">
                        <span id="countdown-days">{{$days}}</span>天
                        <span id="countdown-hours">{{$hours}}</span>小时
                        <span id="countdown-minutes">{{$mins}}</span>分种
                        <!-- <span id="countdown-seconds">{{$seconds}}</span>秒 -->
                    </span>
                @endif
            </div>
        </div>
        <div class="vote-info-item">
            <div class="vote-info-img-wrap">
                <img src="/images/icon/vote-title.png" class="vote-info-img">
            </div>
            <div class="vote-info-item-content">
                <span class="vote-info-item-key">
                    {{$project->title}}
                </span>
            </div>
        </div>
        <div class="vote-info-item">
            <div class="vote-info-img-wrap">
                <img src="/images/icon/vote-period.png" class="vote-info-img">
            </div>
            <div class="vote-info-item-content">
                <span class="vote-info-item-key">
                    {{$project->vote_start}}至{{$project->vote_stop}}
                </span>
            </div>
        </div>
        <div class="vote-info-item">
            <div class="vote-info-img-wrap">
                <img src="/images/icon/vote-intro.png" class="vote-info-img">
            </div>
            <div class="vote-info-item-content vote-info-intro-wrap">
                <span class="vote-info-item-key">
                    活动介绍
                </span>
                <br>
            </div>
        </div>
        <div class="vote-info-item">
            <div class="vote-info-item-content vote-info-intro-wrap vote-info-intro-content vote-info-intro-content-init">
                {{$project->content}}
            </div>
            <button class="vote-intro-content-display-btn vote-content-btn-show">
                <img class="vote-content-btn-img" src="/images/icon/arrow-normal.png">
            </button>
        </div>
    </div>
    @endif
</div>

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        参赛项目
    </div>
    <div class="section-content">
        <div class="section-link">
            <div class="section-column-title">
                @if ( Input::get( 'type' ) == 'new' )
                <a href="/wechat/vote?type=new" class="section-column-title-link active-title">最新项目</a>
                @else
                <a href="/wechat/vote?type=new" class="section-column-title-link">最新项目</a>
                @endif
            </div><!--
         --><div class="section-column-title">
                @if ( Input::get( 'type' ) == 'hot' )
                <a href="/wechat/vote?type=hot" class="section-column-title-link active-title">热门项目</a>
                @else
                <a href="/wechat/vote?type=hot" class="section-column-title-link">热门项目</a>
                @endif
            </div>
        </div>
        <div class="section-list content-list" id="content-list">
            @if( isset( $works ))
                <div class="section-left-column" id="content-list-left">
                @for( $i = 0, $length = count($works); $i < $length; $i += 2 )
                    <div class="section-column-item">
                        <a href="{{{ $works[$i]->url }}}" class="section-column-img-wrap">
                            <img src="{{$works[$i]->image_url}}" class="section-column-img">
                        </a>
                        <div class="section-column-info content-desc">
                            {{{ $works[$i]->title }}}
                        </div>
                        <div class="section-column-info">
                            <div class="section-column-info-item">
                                <input type="hidden" name="project_id" value="{{ $project->id }}" class="action-parameter">
                                <input type="hidden" name="work_id" value="{{ $works[$i]->id }}" class="action-parameter">
                                <button class="section-column-btn" 
                                action="/wechat/vote"
                                success-message="投票成功">投票</button>
                            </div>
                            <div class="section-column-info-item">
                                <span class="vote-num">
                                    {{$works[$i]->vote_number}}
                                </span>
                                票
                            </div>
                        </div>
                    </div>
                @endfor
                </div><!--
                --><div class="section-right-column" id="content-list-right">
                @for( $i = 1, $length = count($works); $i < $length; $i += 2 )
                    <div class="section-column-item">
                        <a href="{{{ $works[$i]->url }}}" class="section-column-img-wrap">
                            <img src="{{$works[$i]->image_url}}" class="section-column-img">
                        </a>
                        <div class="section-column-info content-desc">
                            {{{ $works[$i]->title }}}
                        </div>
                        <div class="section-column-info">
                            <div class="section-column-info-item">
                                <input type="hidden" name="project_id" value="{{ $project->id }}" class="action-parameter">
                                <input type="hidden" name="work_id" value="{{ $works[$i]->id }}" class="action-parameter">
                                <button class="section-column-btn" 
                                action="/wechat/vote"
                                success-message="投票成功">投票</button>
                            </div>
                            <div class="section-column-info-item">
                                <span class="vote-num">
                                    {{$works[$i]->vote_number}}
                                </span>
                                票
                            </div>
                        </div>
                    </div>
                @endfor
                </div>
            @endif
        </div>
    </div>
</div>

<script type="text/template" id="content-template">
    <div class="section-column-item">
        <a href="<%- url %>" class="section-column-img-wrap">
            <img src="<%- image_url %>" class="section-column-img">
        </a>
        <div class="section-column-info content-desc">
             <%- title %>
        </div>
        <div class="section-column-info">
            <div class="section-column-info-item">
                <input type="hidden" name="project_id" value="<%- project_id %>" class="action-parameter">
                <input type="hidden" name="work_id" value="<%- id %>" class="action-parameter">
                <button class="section-column-btn" 
                action="/wechat/vote"
                success-message="投票成功">投票</button>
            </div>
            <div class="section-column-info-item">
                <span class="vote-num">
                    <%- vote_number %>
                </span>
                票
            </div>
        </div>
    </div>
</script>

<script type="text/template" id="wechat-sign-info">
    <?php json_encode($sign_package) ?>
</script>

<script type="text/javascript" id="wechat-on-menu-share-timeline-info">
    {
        "title": "投票",
        "link": "{{ Request::url() }}",
        "imgUrl": "{{ $adverts[0]->image_url }}"
    }
</script>

<script type="text/javascript" id="wechat-on-menu-share-app-message-info">
    {
        "title": "投票",
        "desc": "标王众筹，汇聚全国最优质创业项目",
        "link": "{{ Request::url() }}",
        "imgUrl": "{{ $adverts[0]->image_url }}",
        "type": "link",
    }
</script>

<input id="app-id" type="hidden" name="app_id" value="{{ $app_id }}">

@stop

@section( 'navigation' )

@include( 'wechat.components.pagination', [
    'url'           =>      '/wechat/vote-pagination',
    'parameters'    =>      [
        'project_id'        => $project->id,
        'sequence_type'     => Input::get( 'type' ) == 'hot' ? 2 : 1
    ]
])

@include( 'wechat.components.navigation' )
@stop
