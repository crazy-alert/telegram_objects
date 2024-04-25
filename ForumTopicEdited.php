<?php declare(strict_types=1);


namespace Parser;


readonly class ForumTopicEdited
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $name;//	String	Optional. New name of the topic, if it was edited
	public string|null $icon_custom_emoji_id;//	String	Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
	
	
}