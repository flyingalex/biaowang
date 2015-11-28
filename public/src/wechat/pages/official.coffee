
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

resource_img_added_event_handler = ( event )->

    _this = $ this

    _this.children( '.resource-img' ).each ( index, img )->

        _reszie_img img

bind_resource_img_added_event = ()->

    _resource_list.livequery resource_img_added_event_handler

$ ()->

    init()
    
    invoke_resize_img()

    bind_resource_img_added_event()