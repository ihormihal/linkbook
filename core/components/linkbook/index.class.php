<?php

/**
 * Class linkBookMainController
 */
abstract class linkBookMainController extends modExtraManagerController {
	/** @var linkBook $linkBook */
	public $linkBook;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('linkbook_core_path', null, $this->modx->getOption('core_path') . 'components/linkbook/');
		require_once $corePath . 'model/linkbook/linkbook.class.php';

		$this->linkBook = new linkBook($this->modx);
		//$this->addCss($this->linkBook->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->linkBook->config['jsUrl'] . 'mgr/linkbook.js');
		$this->addHtml('
		<script type="text/javascript">
			linkBook.config = ' . $this->modx->toJSON($this->linkBook->config) . ';
			linkBook.config.connector_url = "' . $this->linkBook->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('linkbook:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends linkBookMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}