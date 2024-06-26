<?php declare(strict_types=1);


namespace Parser;


readonly class KeyboardButton
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*This object represents one button of the reply keyboard. For simple text buttons, String can be used instead of this object to specify the button text. The optional fields web_app, request_user, request_chat, request_contact, request_location, and request_poll are mutually exclusive.*/
	
	public string $text;//	String	Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
	public KeyboardButtonRequestUser|null $request_user;//	KeyboardButtonRequestUser	Optional. If specified, pressing the button will open a list of suitable users. Tapping on any user will send their identifier to the bot in a “user_shared” service message. Available in private chats only.
	public KeyboardButtonRequestChat|null $request_chat;//	KeyboardButtonRequestChat	Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
	public bool|null $request_contact;//	Boolean	Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
	public bool|null $request_location;//	Boolean	Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
	public KeyboardButtonPollType|null $request_poll;//	KeyboardButtonPollType	Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
	public WebAppInfo|null $web_app;//	WebAppInfo	Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
	/*  Note: request_contact and request_location options will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported message.
		Note: request_poll option will only work in Telegram versions released after 23 January, 2020. Older clients will display unsupported message.
		Note: web_app option will only work in Telegram versions released after 16 April, 2022. Older clients will display unsupported message.
		Note: request_user and request_chat options will only work in Telegram versions released after 3 February, 2023. Older clients will display unsupported message.    */
	
}