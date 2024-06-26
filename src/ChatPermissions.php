<?php declare(strict_types=1);


namespace Parser;


readonly  class ChatPermissions
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public bool|null $can_send_messages;//	Boolean	Optional. True, if the user is allowed to send text messages, contacts, invoices, locations and venues
	public bool|null $can_send_audios;//	Boolean	Optional. True, if the user is allowed to send audios
	public bool|null $can_send_documents;//	Boolean	Optional. True, if the user is allowed to send documents
	public bool|null $can_send_photos;//	Boolean	Optional. True, if the user is allowed to send photos
	public bool|null $can_send_videos;//	Boolean	Optional. True, if the user is allowed to send videos
	public bool|null $can_send_video_notes;//	Boolean	Optional. True, if the user is allowed to send video notes
	public bool|null $can_send_voice_notes;//	Boolean	Optional. True, if the user is allowed to send voice notes
	public bool|null $can_send_polls;//	Boolean	Optional. True, if the user is allowed to send polls
	public bool|null $can_send_other_messages;//	Boolean	Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
	public bool|null $can_add_web_page_previews;//	Boolean	Optional. True, if the user is allowed to add web page previews to their messages
	public bool|null $can_change_info;//	Boolean	Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
	public bool|null $can_invite_users;//	Boolean	Optional. True, if the user is allowed to invite new users to the chat
	public bool|null $can_pin_messages;//	Boolean	Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
	public bool|null $can_manage_topics;//	Boolean	Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
	
	
}