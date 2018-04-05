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
						Online_Order::type_book_online($selected);
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
		Online_Order::generate_label($ord_id);
	}
	
	public function type_service_subscription($ord_id)
    {
        //do something
		echo "type_service_subscription";
		Online_Order::subscription_active($ord_id);
    }
	
	public function type_book_online($ord_id)
    {
        //do something
		echo "type_online";
		Online_Order::generate_label($ord_id);
    }
	
	public function type_digi_media($ord_id)
    {
        //do something
		echo "type_digimedia";
		Online_Order::discount_voucher($ord_id);
    }
	
	//method will be called for physical payment
	public function generate_label($ord_id)
    {
        //do something
		$type = Online_Order::get_order_type($ord_id);
		if($type=="book_online")
		{
			Online_Order::deduct_tax_exe($ord_id);
		}
				
    }
	
	//method will be called for services
	public function subscription_active($ord_id)
    {
        //do something
		//cron will be run each time as per subscription duration and this function will call which will deduct amount from user's credit card
				
    }
	
	//method will be called for digital media 
	public function discount_voucher($ord_id)
    {
        //do something
		//entry into discount voucher table		
    }
	
	//get order type from order id
	public function get_order_type($ord_id)
	{
		//function to get order type online, physical, book or digital
		
	}
	
}

?>
