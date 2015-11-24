
active_sub_menu_link = ( three_level_elements, target_link )->

    three_level_elements.each ( index, element )->
        _element = $ element

        if _element.prop( 'href' ) is target_link
            _element.parents( '.sub-menu' ).addClass( 'active-menu' )
            _element.parents( '.three-level-menu' ).siblings( '.sub-menu-link' ).addClass( 'active-link' )

$ ()->
    _sub_menus = $ '.sub-menu'
    _sub_menu_links = $ '.sub-menu-link'
    _dropdown_btn_titles = $ '.dropdown-btn-title'
    _three_level_menu_item_links = $ '.three-level-menu-item-link'

    _sub_menu_links.removeClass 'active-link'

    # 当前页面所属子菜单项高亮显示
    active_sub_menu_link _three_level_menu_item_links, window.location.href

    # 主菜单项点击事件
    _dropdown_btn_titles.on 'click', ( event )->

        _this = $ this
        event.preventDefault()

        # 显示点击的主菜单项的子菜单，其他主菜单项的子菜单隐藏
        _sub_menus.removeClass 'active-menu'
        _this.parents( '.sub-menu' ).addClass 'active-menu'
