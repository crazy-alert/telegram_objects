<?php declare(strict_types=1);


namespace Parser;


readonly class InlineKeyboardMarkup
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public array $inline_keyboard;//Array of Array of InlineKeyboardButton	Array of button rows, each represented by an Array of InlineKeyboardButton objects
	
	
}