
albumThumbItem = React.createClass {
    render: ()->
        return (
            <div className="swiper-slide album-thumbs-item">
                <img src={this.props.image_url} alt={this.props.title} className="album-thumbs-img" />
            </div>
        )
}

albumThumbWrap = React.createClass {
    render: ()->
        albumThumbNodes = this.props.data.map (albumThumb)->
            return ( <albumThumbItem key={albumThumb.id} image_url={albumThumb.image_url} title={albumThumb.title} />)

        return (
            <div className="swiper-wrapper album-thumbs-wrap">
                { albumThumbNodes }
            </div>
        )
}

albumNormalItem = React.createClass {
    render: ()->
        return (
            <div className="swiper-slide album-normal-item">
                <span className="img-vertical-middle-helper"></span>
                <img src={this.props.image_url} alt={this.props.title} className="album-normal-img img-to-vertical-middle" />
            </div>
        )
}

albumNormalWrap = React.createClass {
    render: ()->
        albumNormalNodes = this.props.data.map  (albumNormal)->
            return ( <albumNormalItem key={albumNormal.id} image_url={albumNormal.image_url} title={albumNormal.title} />)

        return (
            <div className="swiper-wrapper album-normal-wrap">
                { albumNormalNodes }
            </div>
        )
}

aysnGetGalleryAll = ( getMessageCallback, renderMessageCallback )->
    $.get '/wechat/album-detail', { album_id: $('#album_id').val() }, (message)->
        
        getMessageCallback message, renderMessageCallback

    , 'json'

renderPage = (message, renderMessageCallback)->
    if parseInt(message.errCode) is 0
        React.render <albumNormalWrap data={message.data} />, document.getElementById('album-normal-container')
        React.render <albumThumbWrap data={message.data} />, document.getElementById('album-thumbs-container')
        renderMessageCallback()

module.exports =
    render: (renderMessageCallback)->
        aysnGetGalleryAll renderPage, renderMessageCallback

