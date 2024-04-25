<?php declare(strict_types=1);


namespace Parser;


readonly class KeyboardButtonPollType
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*	This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.*/
	
	public string|bool $type;//	String	Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
	
}