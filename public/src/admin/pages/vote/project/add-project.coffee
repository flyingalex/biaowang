$ ()->
    $('.edit-area-date-input').datepicker {
        dateFormat: 'yy-mm-dd'
    }

    CKEDITOR.replace 'content'
    CKEDITOR.replace 'activity_rule'
    CKEDITOR.replace 'award_site'

