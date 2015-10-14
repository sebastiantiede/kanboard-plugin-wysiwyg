$(window).ready(function() {
    $.fn.WYSIWYG = function() {
        var form_comment = this,
            form_comment_clone = form_comment.clone(true),
            form_comment_container = $('<div class="kanboard-bootstrap-markdown-container"></div>').append(form_comment_clone);
        console.log(form_comment);
        form_comment.closest('.form-tabs').find('>.form-tabs-nav').hide();

        form_comment.replaceWith(form_comment_container);

        form_comment_clone.markdown({
            autofocus:false,
            savable:false,
            iconlibrary:'fa',
        });
    };

    $('#form-comment').WYSIWYG();

    $(document).on("click", ".popover", function() {
        console.log($('#popover-container'));
        ifTextareaNotExists('#form-description');
    });

    var i=0;
    function ifTextareaNotExists(selector) {
        var textarea = $(selector);
        console.log(textarea,textarea.length,i);
        if(!textarea.length&&i<10) {
            setTimeout(function() {
                ifTextareaNotExists(selector);
            },100);
        } else {
            textarea.WYSIWYG();
        }
        i++;
    }


});
