$ ()->
	$('#cover-image').fileupload({
        url: "/admin/image-upload",
        dataType: 'json',
        done: (e, data)->
            alert data.result['message'] if  data.result['errCode'] isnt '0'

            $(".picture-input-holder").remove()
            if not $(".thumbnail")[0]
            	$(".picture-input-wrap").append($("<img/>"))
            	$(".picture-input-wrap img").attr({"class":"thumbnail"})
            $(".thumbnail").attr("src", data.result['image_url'])
            $("#image-url").val data.result['image_url']
    });

