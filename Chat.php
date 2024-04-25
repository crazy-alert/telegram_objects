<?php declare(strict_types=1);


namespace Parser;

readonly class Chat
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public int $id;            //	//Integer	Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
	
	public string $type;          //	String	Type of chat, can be either "private",  “protected”, “group”, “supergroup” or “channel”
	public string|null $title;         //	String	Optional. Title, for supergroups, channels and group chats
	public string|null $username;      //	String	Optional. Username, for protected chats, supergroups and channels if available
	public string|null $first_name;        //	String	Optional. First name of the other party in a protected chat
	public string|null $last_name;     //	String	Optional. Last name of the other party in a protected chat
	public bool|null $is_forum;      //	True	Optional. True, if the supergroup chat is a forum (has topics enabled)
	public ChatPhoto|null $photo;         //	ChatPhoto	Optional. Chat photo. Returned only in getChat.
	public array|null $active_usernames;//	Array of String	Optional. If non-empty, the list of all active chat usernames; for protected chats, supergroups and channels. Returned only in getChat.
	public string|null $emoji_status_custom_emoji_id;//	String	Optional. Custom emoji identifier of emoji status of the other party in a protected chat. Returned only in getChat.
	public int|null $emoji_status_expiration_date;//	Integer	Optional. Expiration date of the emoji status of the other party in a protected chat in Unix time, if any. Returned only in getChat.
	public string|null $bio;           //	String	Optional. Bio of the other party in a protected chat. Returned only in getChat.
	public bool|null $has_protected_forwards;//	True	Optional. True, if privacy settings of the other party in the protected chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
	public bool|null $has_restricted_voice_and_video_messages;//	True	Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the protected chat. Returned only in getChat.
	public bool|null $join_to_send_messages;//	True	Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
	public bool|null $join_by_request;//	True	Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat.
	public string|null $description;//	String	Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
	public string|null $invite_link;//	String	Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
	public Message|null $pinned_message;//	Message	Optional. The most recent pinned message (by sending date). Returned only in getChat.
	public ChatPermissions|null $permissions;//	ChatPermissions	Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
	public int|null $slow_mode_delay;//	Integer	Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat.
	public int|null $message_auto_delete_time;//	Integer	Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
	public bool|null $has_aggressive_anti_spam_enabled;//	True	Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in getChat.
	public bool|null $has_hidden_members;//	True	Optional. True, if non-administrators can only get the list of bots and administrators in the chat. Returned only in getChat.
	public bool|null $has_protected_content;//	True	Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
	public string|null $sticker_set_name;//	String	Optional. For supergroups, name of group sticker set. Returned only in getChat.
	public bool|null $can_set_sticker_set;//	True	Optional. True, if the bot can change the group sticker set. Returned only in getChat.
	public int|null $linked_chat_id;//	Integer	Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
	public ChatLocation|null $location;//	ChatLocation	Optional. For supergroups, the location to which the supergroup is connected. Returned only in
	
	
}