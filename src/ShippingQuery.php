<?php declare(strict_types=1);


namespace Parser;


readonly class ShippingQuery
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $id;//	String	Unique query identifier
	public User $from;//	User	User who sent the query
	public string $invoice_payload;//	String	Bot specified invoice payload
	public ShippingAddress $shipping_address;//	ShippingAddress	User specified shipping address
	
	
}