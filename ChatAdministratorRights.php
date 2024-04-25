<?php declare(strict_types=1);


namespace Parser;


readonly class ChatAdministratorRights
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/*  Represents the rights of an administrator in a chat.    */
	
	
	public bool $is_anonymous;//	Boolean	True, if the user's presence in the chat is hidden
	public bool $can_manage_chat;//	Boolean	True, if the administrator can access the chat event log, boost list in channels, see channel members, report spam messages, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
	public bool $can_delete_messages;//	Boolean	True, if the administrator can delete messages of other users
	public bool $can_manage_video_chats;//	Boolean	True, if the administrator can manage video chats
	public bool $can_restrict_members;//	Boolean	True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
	public bool $can_promote_members;//	Boolean	True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
	public bool $can_change_info;//	Boolean	True, if the user is allowed to change the chat title, photo and other settings
	public bool $can_invite_users;//	Boolean	True, if the user is allowed to invite new users to the chat
	public bool|null $can_post_messages;//	Boolean	Optional. True, if the administrator can post messages in the channel, or access channel statistics; channels only
	public bool|null $can_edit_messages;//	Boolean	Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
	public bool|null $can_pin_messages;//	Boolean	Optional. True, if the user is allowed to pin messages; groups and supergroups only
	public bool|null $can_post_stories;//	Boolean	Optional. True, if the administrator can post stories in the channel; channels only
	public bool|null $can_edit_stories;//	Boolean	Optional. True, if the administrator can edit stories posted by other users; channels only
	public bool|null $can_delete_stories;//	Boolean	Optional. True, if the administrator can delete stories posted by other users; channels only
	public bool|null $can_manage_topics;//	Boolean	Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
}