<?php declare(strict_types=1);


namespace Parser;


readonly  class ChatLocation
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public Location $location;//	Location	The location to which the supergroup is connected. Can't be a live location.
	public string $address;//	String	Location address; 1-64 characters, as defined by the chat owner
	
	
}