<?php declare(strict_types=1);


namespace Parser;


readonly class PollAnswer
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $poll_id;//	String	Unique poll identifier
	public Chat|null $voter_chat;//	Chat	Optional. The chat that changed the answer to the poll, if the voter is anonymous
	public User|null $user;//	User	Optional. The user that changed the answer to the poll, if the voter isn't anonymous
	public array $option_ids;//	Array of Integer	0-based identifiers of chosen answer options. May be empty if the vote was retracted.
	
}