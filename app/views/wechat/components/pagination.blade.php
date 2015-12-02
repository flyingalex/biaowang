<div class="pagination-wrap">
    <div class="pagination" data-loaded-text="点击加载更多" data-empty-text="已全部加载">
        点击加载更多
    </div>
    <form class="pagination-action-info">
        <input type="hidden" id="pagination-info-url" name="url" value="{{ $url or null }}">
        <input type="hidden" id="pagination-info-list-id" name="list_id" value="{{ $list_id or null }}">
        <input type="hidden" id="pagination-info-template-id" name="template_id" value="{{ $template_id or null }}">
    </form>
    <form id="pagination-action-parameters">
        @foreach ( $parameters as $key => $value )
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <input type="hidden" id="pagination-next-page" name="page" value="{{ $init_next_page or 2 }}">
    </form>
</div>