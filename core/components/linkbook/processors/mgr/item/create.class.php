<?php

/**
 * Create an Item
 */
class linkBookItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'linkBookItem';
	public $classKey = 'linkBookItem';
	public $languageTopics = array('linkbook');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('linkbook_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('linkbook_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'linkBookItemCreateProcessor';