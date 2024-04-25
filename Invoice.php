<?php declare(strict_types=1);


namespace Parser;


readonly class Invoice
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $title;//	String	Product name
	public string $description;//	String	Product description
	public string $start_parameter;//	String	Unique bot deep-linking parameter that can be used to generate this invoice
	public string $currency;//	String	Three-letter ISO 4217 currency code
	public int $total_amount;//	Integer	Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
	
}