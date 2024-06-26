<?php
/**
 * @author    3Liz
 * @copyright 2021 3Liz
 *
 * @see       https://3liz.com
 *
 * @license   Mozilla Public License : http://www.mozilla.org/MPL/
 */
class pgroutingModuleUpgrader extends jInstallerModule
{
    public function install()
    {
        // Copy CSS and JS assets
        $overwrite = true;
        $this->copyDirectoryContent('../www/css', jApp::wwwPath('pgrouting/css'), $overwrite);
        $this->copyDirectoryContent('../www/js', jApp::wwwPath('pgrouting/js'), $overwrite);
    }
}
