<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var linkBook $linkBook */
$linkBook = $modx->getService('linkbook', 'linkBook', $modx->getOption('linkbook_core_path', null, $modx->getOption('core_path') . 'components/linkbook/') . 'model/linkbook/');
$modx->lexicon->load('linkbook:default');

// handle request
$corePath = $modx->getOption('linkbook_core_path', null, $modx->getOption('core_path') . 'components/linkbook/');
$path = $modx->getOption('processorsPath', $linkBook->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));