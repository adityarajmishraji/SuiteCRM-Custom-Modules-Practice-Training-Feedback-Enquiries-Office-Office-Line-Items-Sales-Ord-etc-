<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['UNF_Sales_Order']['fields']['line_items'] = array(
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' => array(
        'return' => 'html',
        'name' => 'customUNF_Sales_OrderLineItems',
        'include' => 'custom/Unify/modules/UNF_SalesOrder/Line_Item.php',
    ),
    'studio' => 'visible',
    'inline_edit' => false,
);

// created: 2025-09-02 12:10:42
$dictionary["UNF_Sales_Order"]["fields"]["unf_sales_order_unf_so_line_items"] = array (
  'name' => 'unf_sales_order_unf_so_line_items',
  'type' => 'link',
  'relationship' => 'unf_sales_order_unf_so_line_items',
  'source' => 'non-db',
  'module' => 'UNF_SO_Line_Items',
  'bean_name' => 'UNF_SO_Line_Items',
  'side' => 'right',
  'vname' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SO_LINE_ITEMS_TITLE',
);

?>