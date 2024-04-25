<?php declare(strict_types=1);


namespace Parser;


readonly class PassportData
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public array $data;//	Array of EncryptedPassportElement	Array with information about documents and other Telegram Passport elements that was shared with the bot
	public array $credentials;//	EncryptedCredentials	Encrypted credentials required to decrypt the data
	
	
}