<?php declare(strict_types=1);


namespace Parser;


readonly class KeyboardButtonRequestChat
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*  This object defines the criteria used to request a suitable chat. The identifier of the selected chat will be shared with the bot when the corresponding button is pressed. More about requesting chats »*/
	
	public int $request_id;//	Integer	Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
	public bool $chat_is_channel;//	Boolean	Pass True to request a channel chat, pass False to request a group or a supergroup chat.
	public bool|null $chat_is_forum;//	Boolean	Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
	public bool|null $chat_has_username;//	Boolean	Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
	public ChatAdministratorRights|null $chat_is_created;//	Boolean	Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
	public ChatAdministratorRights|null $user_administrator_rights;//	ChatAdministratorRights	Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
	public bool|null $bot_administrator_rights;//	ChatAdministratorRights	Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
	public bool|null $bot_is_member;//	Boolean	Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
	
}