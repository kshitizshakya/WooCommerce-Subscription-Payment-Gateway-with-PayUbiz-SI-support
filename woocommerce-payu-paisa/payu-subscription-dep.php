<?php 

class WC_Gateway_PayU_Payments_Subscriptions_Deprecated extends WC_Gateway_PayUindia{
	function __construct() { 
		parent::__construct();

			add_action( 'scheduled_subscription_payment_' . $this->id, array( $this, 'process_scheduled_subscription_payment' ), 10, 3 );
	}

	/**
	 * Process the payment and return the result
	 *
	 * @since 1.0.0
	 */
	function process_payment( $order_id ){
		return parent::process_payment($order_id);
	}


	/**
	 * scheduled_subscription_payment function.
	 * 
	 * @param $amount_to_charge float The amount to charge.
	 * @param WC_Order $renewal_order A WC_Order object created to record the renewal payment.
	 * @access public
	 * @return void
	 */
	function process_scheduled_subscription_payment( $amount_to_charge, $order, $product_id) {
		
		parent::process_subscription_payment( $amount_to_charge, $order );		
	}






}

