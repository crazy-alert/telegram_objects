<?php declare(strict_types=1);


namespace Parser;


readonly class ChatJoinRequest
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public Chat $chat;//	Chat	Chat to which the request was sent
	public User $from;//	User	User that sent the join request
	public int $user_chat_id;//	Integer	Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
	public int $date;//	Integer	Date the request was sent in Unix time
	public string|null $bio;//	String	Optional. Bio of the user.
	public ChatInviteLink|null $invite_link;//	ChatInviteLink	Optional. Chat invite link that was used by the user to send the join request
	
}