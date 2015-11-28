<div class="load-btn-wrap">
    <div class="load-btn" data-loaded-text="点击加载更多" data-empty-text="已全部加载">
        点击加载更多
    </div>
    <form class="load-btn-action-info">
        <input type="hidden" id="load-btn-info-url" name="url" value="{{ $url or null }}">
        <input type="hidden" id="load-btn-info-list-id" name="list_id" value="{{ $list_id or null }}">
        <input type="hidden" id="load-btn-info-template-id" name="template_id" value="{{ $template_id or null }}">
    </form>
    <form id="load-btn-action-parameters">
        @foreach ( $parameters as $key => $value )
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <input type="hidden" id="next-page" name="page" value="{{ $init_next_page or 2 }}">
    </form>
</div>