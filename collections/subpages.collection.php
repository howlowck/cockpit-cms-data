<?php
 return array (
  'name' => 'subpages',
  'label' => 'Sub Pages',
  '_id' => 'subpages5bf1eedec3691',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'Title',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'slug' => true,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'sections',
      'label' => 'Sections',
      'type' => 'layout',
      'default' => '',
      'info' => '',
      'group' => 'Page Sections',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'subpages',
      'label' => 'Sub Pages',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'link' => 'subpages',
        'display' => 'name',
        'multiple' => true,
        'limit' => 15,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    3 => 
    array (
      'name' => 'slug',
      'label' => 'Slug',
      'type' => 'text',
      'default' => '',
      'info' => 'This will be populated automatically',
      'group' => 'Metadata',
      'localize' => false,
      'options' => 
      array (
        'cls' => 'uk-hidden',
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1542581982,
  '_modified' => 1542584222,
  'color' => '',
  'acl' => 
  array (
    'api' => 
    array (
      'entries_view' => true,
    ),
    'author' => 
    array (
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
    ),
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'post.svg',
);