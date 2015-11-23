
_active_sub_menu_link = ( link_elements, target_link )->

    link_elements.removeClass 'active-link'

    for link_element in link_elements
        if link_element.prop( 'href' ) is target_link
            link_element.addClass 'active-link'
            return

$ ()->
    _sub_menus = $ '.sub-menu'
    _sub_menu_links = $ '.sub-menu-link'
    _dropdown_btn_titles = $ '.dropdown-btn-title'
    _three_level_menu_item_links = $ '.three-level-menu-item-link'

    # 当前页面所属子菜单项高亮显示
    _active_sub_menu_link _sub_menu_links, window.location.href

    # 主菜单项点击事件
    _dropdown_btn_titles.on 'click', ( event )->

        _this = $ this
        event.preventDefault()

        # 显示点击的主菜单项的子菜单，其他主菜单项的子菜单隐藏
        _sub_menus.removeClass 'active-menu'
        _this.parents( '.sub-menu' ).addClass 'active-menu'
