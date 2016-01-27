<?php
/** @var array $scriptProperties */
/** @var linkBook $linkBook */
if (!$linkBook = $modx->getService('linkbook', 'linkBook', $modx->getOption('linkbook_core_path', null, $modx->getOption('core_path') . 'components/linkbook/') . 'model/linkbook/', $scriptProperties)) {
	return 'Could not load linkBook class!';
}

$input = $modx->getOption('input', $scriptProperties, '');

$query = $modx->newQuery('linkBookItem', array());
$query->select('name,link');
if ($query->prepare() && $query->stmt->execute()) {
    $res = $query->stmt->fetchAll(PDO::FETCH_ASSOC);
    $find = array();
    $replace = array();
    foreach($res as $r){
        //echo $r['name'].'<br>';
        $name = $r['name'];
        $link = $r['link'];
        $find[] = '/\b('.$name.')\b/iu';
        $replace[] = '<a class="linkbook" href="'.$link.'">$1</a>';
    }
    $input = preg_replace($find,$replace,$input);
}
return $input;