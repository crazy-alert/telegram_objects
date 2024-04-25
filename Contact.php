<?php declare(strict_types=1);


namespace Parser;


readonly class Contact
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $phone_number;//	String	Contact's phone number
	public string $first_name;//	String	Contact's first name
	public string|null $last_name;//	String	Optional. Contact's last name
	public int|null $user_id;//	Integer	Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
	public string|null $vcard;//	String	Optional. Additional data about the contact in the form of a vCard
	
	
}