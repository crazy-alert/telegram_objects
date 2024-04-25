<?php declare(strict_types=1);


namespace Parser;


readonly class OrderInfo
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $name;//	String	Optional. User name
	public string|null $phone_number;//	String	Optional. User's phone number
	public string|null $email;//	String	Optional. User email
	public ShippingAddress|null $shipping_address;//	ShippingAddress	Optional. User shipping address
	
	
}