<?php declare(strict_types=1);


namespace Parser;


readonly class VideoChatParticipantsInvited
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public array $users;// Array of User	New members that were invited to the video chat
	
	
}