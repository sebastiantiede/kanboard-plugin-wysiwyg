<?php

namespace Plugin\wysiwyg;
use Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/toopay-bootstrap-markdown/bower_components/bootstrap/dist/js/bootstrap.min.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/toopay-bootstrap-markdown/bower_components/markdown/lib/markdown.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/toopay-bootstrap-markdown/js/bootstrap-markdown.js');

        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/js/toopay-bootstrap-markdown/css/bootstrap-markdown.min.css');
        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/css/font-awesome-4.4.0/css/font-awesome.min.css');
        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/css/wysiwyg.css');

        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/wysiwyg.js');
    }
}
