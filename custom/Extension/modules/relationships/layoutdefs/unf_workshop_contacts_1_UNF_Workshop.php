<?php
 // created: 2025-08-07 15:51:39
$layout_defs["UNF_Workshop"]["subpanel_setup"]['unf_workshop_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNF_WORKSHOP_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'unf_workshop_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
