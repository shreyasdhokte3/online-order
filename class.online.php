<?php
// main class which defines methods of order type
Class Online_Order
{
	
	function __construct() {		
			
			extract($_POST);
			
			if(!empty($_POST['ord_id'])){
				
			// Loop to store and display values of individual checked checkbox.
			foreach($_POST['ord_id'] as $selected){
					
					$status = $_POST["status"][$selected];
					if($status =='online')
					{
						Online_Order::type_online($selected);
					}
					if($status =='digital')
					{
						Online_Order::type_digi_media($selected);
						
					}
					if($status =='subscription')
					{
						Online_Order::type_service_subscription($selected);
		
					}
					if($status =='physical')
					{
						Online_Order::type_physical($selected);
						
					}
					 
				}
			}
		}	
	
	public function type_physical($ord_id)
    {
        //do something
		echo "type_physical";
	}
	
	public function type_service_subscription($ord_id)
    {
        //do something
		echo "type_service_subscription";

    }
	public function type_online($ord_id)
    {
        //do something
		echo "type_online";

    }
	public function type_digi_media($ord_id)
    {
        //do something
				echo "type_digimedia";

    }
	
}

?>