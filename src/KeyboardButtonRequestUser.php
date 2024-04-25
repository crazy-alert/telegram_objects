<?php declare(strict_types=1);


namespace Parser;


readonly class KeyboardButtonRequestUser
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*  This object defines the criteria used to request a suitable user. The identifier of the selected user will be shared with the bot when the corresponding button is pressed. More about requesting users »*/
	
	public int $request_id;//	Integer	Signed 32-bit identifier of the request, which will be received back in the UserShared object. Must be unique within the message
	public bool|null $user_is_bot;//	Boolean	Optional. Pass True to request a bot, pass False to request a regular user. If not specified, no additional restrictions are applied.
	public bool|null $user_is_premium;//	Boolean	Optional. Pass True to request a premium user, pass False to request a non-premium user. If not specified, no additional restrictions are applied.
}