<?php declare(strict_types=1);


namespace Parser;


readonly class InlineQuery
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $id;//	String	Unique identifier for this query
	public User $from;//	User	Sender
	public string $query;//	String	Text of the query (up to 256 characters)
	public string $offset;//	String	Offset of the results to be returned, can be controlled by the bot
	public string|null $chat_type;//	String	Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
	public Location|null $location;//	Location	Optional. Sender location, only for bots that request user location
	
}