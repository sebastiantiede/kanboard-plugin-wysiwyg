<?php

namespace Kanboard\Plugin\wysiwyg;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/pagedown/Markdown.Converter.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/pagedown/Markdown.Editor.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/pagedown/Markdown.Extra.js');
        $this->hook->on('template:layout:js', 'plugins/wysiwyg/Asset/bower_components/pagedown/Markdown.Sanitizer.js');

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
        return '2.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/sebastiantiede/kanboard-plugin-wysiwyg';
    }

}
