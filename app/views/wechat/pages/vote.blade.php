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
        <div class="vote-statistics-item" id="vote-statistics-register">
            <div class="vote-statistics-key">已报名</div>
            <div class="vote-statistics-value">1114</div>
        </div>
        <div class="vote-statistics-item" id="vote-statistics-total">
            <div class="vote-statistics-key">投票人数</div>
            <div class="vote-statistics-value">53154</div>
        </div>
        <div class="vote-statistics-item" id="vote-statistics-pv">
            <div class="vote-statistics-key">访问量</div>
            <div class="vote-statistics-value">952706</div>
        </div>
    </div>
</div>

<hr class="split-line">

<div class="section-wrap">
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
                    立于不败明星企业家
                </span>
            </div>
        </div>
        <div class="vote-info-item">
            <div class="vote-info-img-wrap">
                <img src="/images/icon/vote-period.png" class="vote-info-img">
            </div>
            <div class="vote-info-item-content">
                <span class="vote-info-item-key">
                    2015-11-10至2015-11-26
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
                    本活动仅限山政在校大学生参加，男女不限
                </span>
            </div>
        </div>
    </div>
</div>

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content">
        <div class="section-column section-column-left">
            <h2 class="section-column-title">最新项目</h2>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test2.jpeg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">15票</div>
                </div>
            </div>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test2.jpeg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">15票</div>
                </div>
            </div>
        </div>
        <div class="section-column">
            <h2 class="section-column-title">热门项目</h2>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test3.jpg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">15票</div>
                </div>
            </div>
            <div class="section-column-item">
                <div class="section-column-img-wrap">
                    <img src="/images/test/test3.jpg" class="section-column-img">
                </div>
                <div class="section-column-info">
                    <div class="section-column-info-item">
                        <button class="section-column-btn">投票</button>
                    </div>
                    <div class="section-column-info-item">15票</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop