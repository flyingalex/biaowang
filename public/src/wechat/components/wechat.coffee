
module.exports =

    share: ()->
        
        _app_id = $ '#app-id'
        _config_parameters = JSON.stringify $('#wechat-sign-info').text()
        _share_time_line_parameters = JSON.stringify $('#wechat-on-menu-share-timeline-info').text()
        _share_app_message_paramters = JSON.stringify $('#wechat-on-menu-share-app-message-info').text()

        _config_parameters.appId = _app_id
        _config_parameters.jsApiList = [
            'onMenuShareTimeline'
            'onMenuShareAppMessage'
        ]

        wx.config _config_parameters
        wx.ready ()->
            wx.onMenuShareTimeline _share_time_line_parameters
            wx.onMenuShareAppMessage _share_app_message_paramters