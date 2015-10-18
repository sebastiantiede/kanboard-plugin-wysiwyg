$(window).load(function() {
    var controlsGroup = function(name, label, controls) {
        controls.name = name;
        controls.label = label;
        return controls;
    };

    $.fn.WYSIWYG = function() {
        this.each(function() {
            $(this).meltdown({
                controls: controlsGroup('','',[
                    //"preview",
                    "bold",
                    "italics",
                    "ul",
                    "ol",
                    "|",
                    "table",
                    controlsGroup("h", "Headers", ["h1", "h2", "h3", "h4", "h5", "h6"]),
                    "|",
                    controlsGroup("kitchenSink", "Kitchen Sink", [
                        "link",
                        "img",
                        "blockquote",
                        "codeblock",
                        "code",
                        "footnote",
                        "hr"
                    ]),
                    "fullscreen",
                    "sidebyside"
                ])
            });
        });
    };

    $('#form-comment,#form-description').WYSIWYG();

    $(document).on("click", ".popover", function() {
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
