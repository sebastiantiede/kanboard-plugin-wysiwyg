$(window).ready(function() {
    $.fn.WYSIWYG = function() {
        this.each(function() {
            $(this)
                .before('<div id="wmd-button-bar"></div>')
                .addClass('wmd-input')
                .attr({id:'wmd-input'});
            var converter = new Markdown.Converter(),
                editor = new Markdown.Editor(converter);
            editor.run();
        });
    };

    $(window).ajaxSuccess(function(event, request, settings) {
        console.log(settings.url,settings.url.match(/controller=comment/));
        if(settings.url.match(/controller=taskcreation/) || settings.url.match(/controller=comment/)) {
            $('#form-description,#form-comment').WYSIWYG();
        }
    });

    $('#form-comment,#form-description').WYSIWYG();
});
