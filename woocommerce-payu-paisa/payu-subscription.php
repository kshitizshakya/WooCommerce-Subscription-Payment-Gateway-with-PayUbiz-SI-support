<?php 

class WC_Gateway_PayU_Payments_Subscriptions extends WC_Gateway_PayUindia{
	function __construct() { 
		parent::__construct();

		add_action( 'woocommerce_scheduled_subscription_payment_' . $this->id, array( $this, 'scheduled_subscription_payment' ), 10, 2 );

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
	function scheduled_subscription_payment( $amount_to_charge, $renewal_order ) {

		parent::process_subscription_payment( $amount_to_charge, $renewal_order );

	}





}
