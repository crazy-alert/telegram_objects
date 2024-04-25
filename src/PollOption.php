<?php declare(strict_types=1);


namespace Parser;


readonly class PollOption
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $text;//	String	Option text, 1-100 characters
	public int $voter_count;//	Integer	Number of users that voted for this option
	
}