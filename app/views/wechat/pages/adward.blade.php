@extends( 'wechat.template.master' )

@section( 'content' )

<div class="section-wrap">
    <div class="section-header">
        <img src="/images/reward-desc.png">
    </div>
    @if( isset( $project ) )
    <div class="section-content">
        {{$project->award_site}}
    </div>
    @endif
</div>

@stop

@section('navigation')
@include( 'wechat.components.navigation' )
@stop