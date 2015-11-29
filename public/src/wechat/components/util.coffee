
util = new Object

# 动态调整图片高度
# 1. 高度大于宽度的图片在水平方向上对齐，同时保持原图片比例
# 2. 调整图片尺寸后，根据调整后图片的溢出方向，在对应方向中居中
#    使图片中间部分能够展现
util.resize_img = ( img )->

    img.css 'position', 'relative'

    if img.width() > img.height()

        img.height img.parent().height()
        img.css 'left', - ( img.width() - img.parent().width() ) / 2

    else
        img.width img.parent().width()
        img.css 'top', - ( img.height() - img.parent().height() ) / 2

# Resize images onload
util.resize_imgs_onload = ( imgs )->

    imgs.one 'load', ()->

        util.resize_img $ this
        
    .each ()->
        if this.complete
            $(this).load()

module.exports = util
