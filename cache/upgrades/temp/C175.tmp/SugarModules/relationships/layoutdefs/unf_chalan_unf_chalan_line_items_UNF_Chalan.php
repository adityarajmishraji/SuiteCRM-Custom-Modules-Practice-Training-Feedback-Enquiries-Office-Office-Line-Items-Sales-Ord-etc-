<?php
 // created: 2025-09-04 10:56:10
$layout_defs["UNF_Chalan"]["subpanel_setup"]['unf_chalan_unf_chalan_line_items'] = array (
  'order' => 100,
  'module' => 'UNF_Chalan_Line_Items',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_LINE_ITEMS_TITLE',
  'get_subpanel_data' => 'unf_chalan_unf_chalan_line_items',
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
