<?php declare(strict_types=1);


namespace Parser;


readonly class VideoChatScheduled
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public int $start_date;//	Integer	Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
	
	
}