
$ ()->
	$('#cover-image').fileupload({
        url: "/xxx",
        dataType: 'json',
        done: (e, data)->
            console.log e
            console.log data
    }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');