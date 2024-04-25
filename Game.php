<?php declare(strict_types=1);


namespace Parser;


readonly class Game
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $title;//	String	Title of the game
	public string $description;//	String	Description of the game
	public array $photo;//	Array of PhotoSize	Photo that will be displayed in the game message in chats.
	public string|null $text;//	String	Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
	public array|null $text_entities;//	Array of MessageEntity	Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
	public Animation|null $animation;//	Animation	Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
	
	
}