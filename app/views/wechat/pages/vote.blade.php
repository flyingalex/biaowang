@extends( 'wechat.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/wechat/css/pages/vote.css">
@stop

@section( 'content' )

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
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
        <img src="/images/resource-title.png">
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
                <span class="vote-info-item-message">
                    28天19分52秒
                </span>
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
                <span class="vote-info-item-message">
                    {{$project->content}}
                </span>
            </div>
        </div>
    </div>
    @endif
</div>

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content">
        <div class="section-column section-column-left">
            <h2 class="section-column-title">最新项目</h2>
            
            @if( isset( $work_news ))
                @foreach( $work_news as $work_new )
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="{{$work_new->image_url}}" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">{{$work_new->vote_number}}票</div>
                </div>
            </div>
                @endforeach
            @endif
           
        </div>
        <div class="section-column">
            <h2 class="section-column-title">热门项目</h2>
          
            @if( isset( $work_numbers ))
                @foreach( $work_numbers as $work_number )
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="{{$work_number->image_url}}" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">{{$work_number->vote_number}}票</div>
                </div>
            </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
@stop