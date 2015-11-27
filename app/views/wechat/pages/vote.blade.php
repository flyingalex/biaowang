@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/vote.css">
@stop

@section( 'scripts' )
@parent
<script type="text/javascript" src="/dist/wechat/js/pages/vote.js"></script>
@stop

@section( 'content' )

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/statistic-title.png">
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
        <img src="/images/active-status.png">
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
                        <span>{{$days}}</span>天
                        <span>{{$hours}}</span>小时
                        <span>{{$mins}}</span>分种
                        <span>{{$seconds}}</span>秒
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
            <button class="vote-intro-content-display-btn vote-content-btn-normal">
                <img class="vote-content-btn-close-img" src="/images/icon/arrow-close.png">
                <img class="vote-content-btn-normal-img" src="/images/icon/arrow-normal.png">
            </button>
        </div>
    </div>
    @endif
</div>

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/active-project.png">
    </div>
    <div class="section-content">
        <div class="section-link">
            <a href="/wechat/vote?type=new" class="section-column-title">最新项目</a>
            <a href="/wechat/vote?type=hot" class="section-column-title">热门项目</a>
        </div>
        <div class="section-list">
            @if( isset( $works ))
                @foreach( $works as $work )
            <div class="section-column-item">
                <a href="{{{ $work->url }}}" class="section-column-img-wrap">
                    <img src="{{$work->image_url}}" class="section-column-img">
                </a>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <input type="hidden" name="project_id" value="{{ $project->id }}" class="action-parameter">
                        <input type="hidden" name="work_id" value="{{ $work->id }}" class="action-parameter">
                        <button class="section-column-btn" 
                        action="/wechat/vote"
                        success-message="投票成功">投票</button>
                    </div>
                    <div class="section-column-info-item">
                        <span class="vote-num">
                            {{$work->vote_number}}
                        </span>
                        票
                    </div>
                </div>
            </div>
                @endforeach
            @endif
           
        </div>

        </div>
    </div>
</div>
@stop

@section( 'navigation' )
@include( 'wechat.components.navigation' )
@stop