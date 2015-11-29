@extends( 'wechat.template.master' )

@section( 'scripts' )
@parent
<script type="text/javascript" src="/dist/wechat/js/pages/adward.js"></script>
@stop

@section( 'content' )

<hr class="split-line">

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/reward-desc.png" class="section-header-img">
    </div>
    @if( isset( $project ) )
    <div class="section-content">
        {{$project->award_site}}
    </div>
    @endif
</div>

<hr class="split-line">

@stop

@section('navigation')
@include( 'wechat.components.navigation' )
@stop