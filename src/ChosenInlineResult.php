<?php declare(strict_types=1);


namespace Parser;


readonly class ChosenInlineResult
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $result_id;//	String	The unique identifier for the result that was chosen
	public User $from;//	User	The user that chose the result
	public Location|null $location;//	Location	Optional. Sender location, only for bots that require user location
	public string|null $inline_message_id;//	String	Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
	public string $query;//	String	The query that was used to obtain the result
	
	
}