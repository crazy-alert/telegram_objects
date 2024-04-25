<?php declare(strict_types=1);


namespace Parser;


readonly class WriteAccessAllowed
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public bool|null $from_request;//	        Boolean	    Optional.   True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
	public string|null $web_app_name;//	        String	    Optional.   Name of the Web App, if the access was granted when the Web App was launched from a link
	public bool|null $from_attachment_menu;//	Boolean	    Optional.   True, if the access was granted when the bot was added to the attachment or side menu
	
}