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
    public function getPluginName()
    {
        return 'WYSIWYG';
    }

    public function getPluginDescription()
    {
        return 'Extension for Kanboard default comment textarea.';
    }

    public function getPluginAuthor()
    {
        return 'Sebastian Tiede';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/sebastiantiede/kanboard-plugin-wysiwyg';
    }

}
