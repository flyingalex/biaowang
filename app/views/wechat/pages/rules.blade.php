@extends( 'wechat.template.master' )

@section( 'content' )
    @if( isset( $project ) )
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content">
        {{$project->content}}
    </div>
</div>
<hr class="split-line">
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content section-single-line">
        {{$project->sign_up_start}} --------- {{$project->sign_up_stop}}
    </div>
</div>
<hr class="split-line">
<div class="section-wrap">
    <div class="section-header">
        <img src="/images/resource-title.png">
    </div>
    <div class="section-content section-single-line">
         {{$project->vote_start}} ---------  {{$project->vote_stop}}
    </div>
</div>
@endif
@stop
