
_navigation_imgs = null

get_raw_url = ( url )->

    return url.split('?')[0]

init = ()->

    _current_url = get_raw_url( window.location.href )

    _navigation_imgs = $ '.navigation-img'

    _navigation_imgs.each ( index, ele )->

        _ele = $ ele

        if get_raw_url( _ele.parents( '.navigation-link' ).prop( 'href' ) )== _current_url

            _ele.attr 'src', _ele.attr( 'active-src' )

        else

            _ele.attr 'src', _ele.attr( 'normal-src' )

module.exports = 

    init: init