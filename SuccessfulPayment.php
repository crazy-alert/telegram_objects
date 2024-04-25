<?php declare(strict_types=1);


namespace Parser;


readonly class SuccessfulPayment
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $currency;//	String	Three-letter ISO 4217 currency code
	public int $total_amount;//	Integer	Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
	public string $invoice_payload;//	String	Bot specified invoice payload
	public string|null $shipping_option_id;//	String	Optional. Identifier of the shipping option chosen by the user
	public OrderInfo|null $order_info;//	OrderInfo	Optional. Order information provided by the user
	public string $telegram_payment_charge_id;//	String	Telegram payment identifier
	public string $provider_payment_charge_id;//	String	Provider payment identifier
	
	
}