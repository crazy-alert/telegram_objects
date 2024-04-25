<?php declare(strict_types=1);


namespace Parser;


readonly class EncryptedCredentials
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $data;//	String	Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
	public string $hash;//	String	Base64-encoded data hash for data authentication
	public string $secret;//	String	Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
	
}