<?php

/**
 * Remove an Items
 */
class linkBookItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'linkBookItem';
	public $classKey = 'linkBookItem';
	public $languageTopics = array('linkbook');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('linkbook_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var linkBookItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('linkbook_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'linkBookItemRemoveProcessor';