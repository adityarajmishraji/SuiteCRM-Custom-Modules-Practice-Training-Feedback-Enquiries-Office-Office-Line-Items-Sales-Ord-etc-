<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-09-02 12:10:42
$dictionary["UNF_SO_Line_Items"]["fields"]["unf_sales_order_unf_so_line_items"] = array (
  'name' => 'unf_sales_order_unf_so_line_items',
  'type' => 'link',
  'relationship' => 'unf_sales_order_unf_so_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Sales_Order',
  'bean_name' => 'UNF_Sales_Order',
  'vname' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SALES_ORDER_TITLE',
  'id_name' => 'unf_sales_order_unf_so_line_itemsunf_sales_order_ida',
);
$dictionary["UNF_SO_Line_Items"]["fields"]["unf_sales_order_unf_so_line_items_name"] = array (
  'name' => 'unf_sales_order_unf_so_line_items_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SALES_ORDER_TITLE',
  'save' => true,
  'id_name' => 'unf_sales_order_unf_so_line_itemsunf_sales_order_ida',
  'link' => 'unf_sales_order_unf_so_line_items',
  'table' => 'unf_sales_order',
  'module' => 'UNF_Sales_Order',
  'rname' => 'name',
);
$dictionary["UNF_SO_Line_Items"]["fields"]["unf_sales_order_unf_so_line_itemsunf_sales_order_ida"] = array (
  'name' => 'unf_sales_order_unf_so_line_itemsunf_sales_order_ida',
  'type' => 'link',
  'relationship' => 'unf_sales_order_unf_so_line_items',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SO_LINE_ITEMS_TITLE',
);

?>