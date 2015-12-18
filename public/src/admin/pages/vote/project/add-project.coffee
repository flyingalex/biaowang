$ ()->
    $('.edit-area-date-input').datetimepicker {
        format: 'Y-m-d H:i'
    }

    CKEDITOR.replace 'content'
    CKEDITOR.replace 'activity_rule'
    CKEDITOR.replace 'award_site'

