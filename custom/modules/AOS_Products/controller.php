 <?php

    if (!defined('sugarEntry') || !sugarEntry)die('Not A Valid Entry Point');
    require_once 'modules/AOS_Products/controller.php';

    class CustomAOS_ProductsController extends SugarController
    {
        public function action_getDetails()
        {
            $return = [];
            if (isset($_REQUEST['product_id'])) {
                $productId = $_REQUEST['product_id'];
                
                $productBean = BeanFactory::getBean('AOS_Products', $productId);

                $fields = array(
                    'id',
                    'name',
                    'uom_c',
                    'price',

                );

                foreach ($fields as $key => $field) {
                    $return[$field] = html_entity_decode($productBean->$field, ENT_QUOTES, 'UTF-8');
                }
                
            }

            echo json_encode(($return));
            die();
        }
        

    }
  
      