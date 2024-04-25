<?php declare(strict_types=1);


namespace Parser;


readonly class Dice
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $emoji;//	String	Emoji on which the dice throw animation is based
	public int $value;//	Integer	Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
	
}