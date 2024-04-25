<?php declare(strict_types=1);


namespace Parser;


readonly class SwitchInlineQueryChosenChat
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*objectThis object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.*/
	
	public string|null $query;//	String	Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
	public bool|null $allow_user_chats;//	Boolean	Optional. True, if private chats with users can be chosen
	public bool|null $allow_bot_chats;//	Boolean	Optional. True, if private chats with bots can be chosen
	public bool|null $allow_group_chats;//	Boolean	Optional. True, if group and supergroup chats can be chosen
	public bool|null $allow_channel_chats;//	Boolean	Optional. True, if channel chats can be chosen
	
}