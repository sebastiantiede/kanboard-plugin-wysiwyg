$(window).ready(function() {
    console.log('wysiwyg');
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
        if(
            settings.url.match(/controller=taskmodification/) ||
            settings.url.match(/controller=taskcreation/) || 
            settings.url.match(/controller=comment/)) {
            $('#form-description,#form-comment,#form-description').WYSIWYG();
        }
    });

    $('#form-comment,#form-description').WYSIWYG();
});
