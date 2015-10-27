<?php

namespace Kanboard\Plugin\wysiwyg;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/meltdown/js/jquery.meltdown.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/meltdown/js/lib/js-markdown-extra.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/meltdown/js/lib/rangyinputs-jquery.min.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/meltdown/js/lib/element_resize_detection.js');

        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/bower_components/meltdown/css/meltdown.css');

        $this->hook->on('template:layout:css', 'plugins/wysiwyg/Asset/css/wysiwyg.css');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/js/wysiwyg.js');
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
        return '1.1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/sebastiantiede/kanboard-plugin-wysiwyg';
    }

}
