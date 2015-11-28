
next_page = 2
_resource_imgs = null
_resource_list = null
_resource_template = null
_resource_template_render_func = null

init = ()->
    _resource_imgs = $ '.resource-img'
    _resource_list = $ '#resource-list'
    _resource_template = $ '#resource-template'
    _resource_template_render_func = _.template _resource_template.text()

_reszie_img = ( img )->

    if img.width() > img.height()

        img.height img.parent().height()
    else

        img.width img.parent().width()

invoke_resize_img = ()->

    _resource_imgs.one 'load', ()->

        _reszie_img $ this
        
    .each ()->
        if this.complete
            $(this).load()

resource_list_load_change_event_handler = ( event )->

    _resource_imgs = $ '.resource-img'
    invoke_resize_img()

bind_resource_img_added_event = ()->

    $(document).on 'DOMNodeInserted', resource_list_load_change_event_handler

$ ()->

    # 缓存dom元素
    init()
    
    # 调整图片尺寸
    invoke_resize_img()

    # 绑定图片元素添加事件，
    # 使图片新添时可以调整尺寸
    bind_resource_img_added_event()