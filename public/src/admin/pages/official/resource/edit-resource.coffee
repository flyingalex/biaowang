
$ ()->
	$('#cover-image').fileupload({
        url: "/xxx",
        dataType: 'json',
        done: (e, data)->
            console.log e
            console.log data

            $("#resource-image").attr("src", "url");
            $("#image-url").val "url"
    });