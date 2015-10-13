$(window).ready(function() {
    $('#markdown-preview').closest('.form-tabs-nav').hide();
    var form_comment = $("#form-comment"),
        form_comment_clone = form_comment.clone(true),
        form_comment_container = $('<div class="kanboard-bootstrap-markdown-container"></div>').append(form_comment_clone);

    form_comment.replaceWith(form_comment_container);

    form_comment_clone.markdown({
        autofocus:false,
        savable:false,
        iconlibrary:'fa',
    });
});
