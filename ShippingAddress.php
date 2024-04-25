<?php declare(strict_types=1);


namespace Parser;


readonly class ShippingAddress
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $country_code;//	String	    Two-letter ISO 3166-1 alpha-2 country code
	public string $state;//	        String	    State, if applicable
	public string $city;//	        String	    City
	public string $street_line1;//	String	    First line for the address
	public string $street_line2;//	String	    Second line for the address
	public string $post_code;//	    String	    Address post code
	
}