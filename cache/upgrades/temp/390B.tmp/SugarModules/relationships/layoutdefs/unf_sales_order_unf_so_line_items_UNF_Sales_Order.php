<?php
 // created: 2025-09-02 12:10:42
$layout_defs["UNF_Sales_Order"]["subpanel_setup"]['unf_sales_order_unf_so_line_items'] = array (
  'order' => 100,
  'module' => 'UNF_SO_Line_Items',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SO_LINE_ITEMS_TITLE',
  'get_subpanel_data' => 'unf_sales_order_unf_so_line_items',
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
