Online Ordering

The repository includes following files
1. Index.php - Contains table structure for explaining test cases. Table shows all the test orders. On selecting any one of the test order, controller will be redirected to particular method of that type of order.

2. class.online.php - This is include file comprise of main class includeing methods orders. 

a. type_physical - Method will be called for physical type orders
   generate_label - In the same method 'generate_label' method will be called to generate the label
   
b. type_service_subscription - For the product type service this method will be called
   subscription_active - To activate the subscription this method will be called. Cron job will be created for regular interval calls of this method. The payment transaction performed in payment gateway and the record will be updated from this function in the system. Separate database table will be included to maintain the records
   
c. type_book_online - For online books this method will be called.
   generate_label - to generate label this method will be used.In this method itself we will find order type and if it is book online then tax exemption will be added.
   
d. type_digi_media - For digital products, this method will be called. In this method itself, next action method is called.
   discount_voucher - This method will allow discount to that particular user for this order. Separate table will be maintain to keep user id and order id records.
   
3. DB_diagram.xls - I have included three tables
a. tbl_order - Show all the order listing
b. tbl_ord_subscription - Show periodic subscriptions
c. tbl_discount_vouchers - Show discount vouchers

Note : This is basic structure of database. According to scope we can add other related tables as follows

a. tbl_order_details - Explaining all products in the order with their shipping and billing details
b. payment_subscription - if there are multiple payment gateways we can track the details here
c. voucher details - Various voucher details with their discount options, expiration, no of usage etc

Also, single Class created here, Online_Order. In case if payment method types will have different scenarios (such as active, deactive, user types, different stores), we can create classes of them and extended parent Online_Order class. In this case, we can add specific methods of each payment type in separate class.

