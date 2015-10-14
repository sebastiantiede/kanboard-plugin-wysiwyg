<?php

namespace Plugin\wysiwyg;
use Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/bootstrap/dist/js/bootstrap.min.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/markdown/lib/markdown.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/bootstrap-markdown/js/bootstrap-markdown.js');

        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/bower_components/bootstrap-markdown/css/bootstrap-markdown.min.css');
        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/bower_components/font-awesome/css/font-awesome.min.css');

        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/css/wysiwyg.css');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/wysiwyg.js');

        //$this->template->hook->attach('template:layout:bottom', 'wysiwyg:layout/bottom');
    }
}
