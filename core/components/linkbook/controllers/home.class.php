<?php

/**
 * The home manager controller for linkBook.
 *
 */
class linkBookHomeManagerController extends linkBookMainController {
	/* @var linkBook $linkBook */
	public $linkBook;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('linkbook');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->linkBook->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->linkBook->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "linkbook-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->linkBook->config['templatesPath'] . 'home.tpl';
	}
}