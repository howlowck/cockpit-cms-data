<?php
 return array (
  'name' => 'pages',
  'label' => 'Pages',
  '_id' => 'pages5bf1edc4db0c1',
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
    ),
    1 => 
    array (
      'name' => 'published',
      'label' => 'Published',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => 'Metadata',
      'localize' => false,
      'options' => 
      array (
        'default' => false,
        'label' => false,
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    2 => 
    array (
      'name' => 'menu',
      'label' => 'Menu',
      'type' => 'multipleselect',
      'default' => '',
      'info' => 'Set if the page will be displayed in the menus',
      'group' => 'Metadata',
      'localize' => false,
      'options' => 
      array (
        'options' => 'main, footer',
      ),
      'width' => '1-3',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    3 => 
    array (
      'name' => 'subpages',
      'label' => 'Sub Pages',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => 'Metadata',
      'localize' => false,
      'options' => 
      array (
        'link' => 'subpages',
        'display' => 'name',
        'multiple' => true,
        'limit' => 15,
      ),
      'width' => '1-3',
      'lst' => false,
      'acl' => 
      array (
      ),
    ),
    4 => 
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
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    5 => 
    array (
      'name' => 'slug',
      'label' => 'Slug',
      'type' => 'text',
      'default' => '',
      'info' => 'This will be populated automatically',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'cls' => 'uk-hidden',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    6 => 
    array (
      'name' => 'description',
      'label' => 'Meta Description',
      'type' => 'text',
      'default' => '',
      'info' => 'this is not visible on the page, but is used primarily for SEO.',
      'group' => 'Metadata',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => true,
  'in_menu' => true,
  '_created' => 1542581700,
  '_modified' => 1542584253,
  'color' => '',
  'acl' => 
  array (
    'api' => 
    array (
      'entries_edit' => false,
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
  'icon' => 'newspaper.svg',
);