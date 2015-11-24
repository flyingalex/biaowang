
$ ()->

    _current_url = window.location.href
    _path_spliter = ' > '
    _site_path = $ '.site-path'

    $( '.three-level-menu-item-link' ).each ( index, element )->

        _element = $ element
        
        if _element.prop( 'href' ) is _current_url
            
            # 根据sidebar中的目录结构查找路径
            _path_level_3_text = _element.text()
            _path_level_2_text = _element.parents('.three-level-menu').siblings( '.sub-menu-link' ).text()
            _path_root_text = _element.parents( '.sub-menu-item' ).siblings( '.dropdown-btn' ).find( '.dropdown-btn-title' ).text()

            # 组合路径，2级路径和3级路径相同时只保留2级路径
            _site_path_text = _path_root_text + _path_spliter + _path_level_2_text

            if _path_level_2_text isnt _path_level_3_text
                _site_path_text += _path_spliter + _path_level_3_text

            _site_path.text _site_path_text