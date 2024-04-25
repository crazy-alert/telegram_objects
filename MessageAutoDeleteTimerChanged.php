<?php declare(strict_types=1);


namespace Parser;


readonly class MessageAutoDeleteTimerChanged
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public int $message_auto_delete_time;//	Integer	New auto-delete time for messages in the chat; in seconds
	
}