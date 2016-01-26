<?php
$xpdo_meta_map['linkBookItem']= array (
  'package' => 'linkbook',
  'version' => '1.1',
  'table' => 'linkbook_items',
  'extends' => 'xPDOSimpleObject',
  'fields' =>
  array (
    'name' => '',
    'link' => '',
  ),
  'fieldMeta' =>
  array (
    'name' =>
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'link' =>
    array (
      'dbtype' => 'varchar',
      'precision' => '150',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
  ),
  'indexes' =>
  array (
    'name' =>
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' =>
      array (
        'name' =>
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);