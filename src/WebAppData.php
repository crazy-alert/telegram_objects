<?php declare(strict_types=1);


namespace Parser;


readonly class WebAppData
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $data;//	        String	The data. Be aware that a bad client can send arbitrary data in this field.
	public string $button_text;//	String	Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
	
}