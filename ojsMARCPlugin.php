<?php

//plugins/blocks/ojsMARC/ojsMARCPlugin.php

namespace APP\plugins\blocks\ojsMARC;

use PKP\plugins\BlockPlugin;

class ojsMARCPlugin extends BlockPlugin
{
    public function getInstallSitePluginSettingsFile()
    {
        return $this->getPluginPath() . '/settings.xml';
    }

    public function getContextSpecificPluginSettingsFile()
    {
        return $this->getPluginPath() . '/settings.xml';
    }

    public function getDisplayName()
    {
        return __('plugins.block.ojsMARC.displayName');
    }

    public function getDescription()
    {
        return __('plugins.block.ojsMARC.description');
    }
}

if (!PKP_STRICT_MODE) {
    class_alias('\APP\plugins\blocks\ojsMARC\ojsMARCPlugin', '\ojsMARCPlugin');
}
