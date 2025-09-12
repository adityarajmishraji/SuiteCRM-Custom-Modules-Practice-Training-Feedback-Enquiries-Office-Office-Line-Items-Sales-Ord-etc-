<?php
 // created: 2025-09-02 14:57:11
$layout_defs["UNF_Credit_Notes"]["subpanel_setup"]['unf_credit_notes_unf_credit_notes_line_items'] = array (
  'order' => 100,
  'module' => 'UNF_Credit_Notes_Line_Items',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_LINE_ITEMS_TITLE',
  'get_subpanel_data' => 'unf_credit_notes_unf_credit_notes_line_items',
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
