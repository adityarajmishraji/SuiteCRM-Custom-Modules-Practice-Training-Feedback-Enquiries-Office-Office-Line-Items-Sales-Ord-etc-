 <?php

    if (!defined('sugarEntry') || !sugarEntry)die('Not A Valid Entry Point');


    class CustomUNF_Sales_OrderController extends SugarController
    {
        public function action_getDetails()
        {
            $return = [];
            if (isset($_REQUEST['product_id'])) {
                $productId = $_REQUEST['product_id'];
                $productBean = BeanFactory::getBean('AOS_Products', $productId);

                if ($productBean && $productBean->id) {
                    $return['id'] = $productBean->id;
                    $return['name'] = $productBean->name;
                    $return['uom_c'] = $productBean->uom_c;
                    $return['price'] = $productBean->price;
                }
            }

            echo json_encode($return);
            die();
        }
        
    }
  
      