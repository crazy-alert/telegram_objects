<?php declare(strict_types=1);


namespace Parser;


readonly class MessageEntity
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $type;//	String	Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
	public int $offset;//	Integer	Offset in UTF-16 code units to the start of the entity
	public int $length;//	Integer	Length of the entity in UTF-16 code units
	public string|null $url;//	String	Optional. For “text_link” only, URL that will be opened after user taps on the text
	public User|null $user;//	User	Optional. For “text_mention” only, the mentioned user
	public string|null $language;//	String	Optional. For “pre” only, the programming language of the entity text
	public string|null $custom_emoji_id;//	String	Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
	
	
}