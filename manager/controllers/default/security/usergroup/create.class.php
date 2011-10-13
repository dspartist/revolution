<?php
/**
 * Loads the usergroup create page
 *
 * @package modx
 * @subpackage manager.controllers
 */
class SecurityUserGroupCreateManagerController extends modManagerController {
    /**
     * Check for any permissions or requirements to load page
     * @return bool
     */
    public function checkPermissions() {
        return $this->modx->hasPermission('access_permissions');
    }

    /**
     * Register custom CSS/JS for the page
     * @return void
     */
    public function loadCustomCssJs() {
        $mgrUrl = $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
        $this->addJavascript($mgrUrl.'assets/modext/widgets/security/modx.grid.user.group.context.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/security/modx.grid.user.group.resource.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/security/modx.grid.user.group.category.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/security/modx.grid.user.group.source.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/security/modx.panel.user.group.js');
        $this->addJavascript($mgrUrl.'assets/modext/sections/security/usergroup/create.js');
    }

    /**
     * Custom logic code here for setting placeholders, etc
     * @param array $scriptProperties
     * @return mixed
     */
    public function process(array $scriptProperties = array()) {}

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('user_group_new');
    }

    /**
     * Return the location of the template file
     * @return string
     */
    public function getTemplateFile() {
        return 'security/usergroup/create.tpl';
    }

    /**
     * Specify the language topics to load
     * @return array
     */
    public function getLanguageTopics() {
        return array('user','access','policy','context');
    }
}
