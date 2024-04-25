<?php declare(strict_types=1);


namespace Parser;


readonly class ProximityAlertTriggered extends ForumTopicReopened
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public User $traveler;//	User	User that triggered the alert
	public User $watcher;//	    User	User that set the alert
	public int $distance;//	    Integer	The distance between the users
	
	
}