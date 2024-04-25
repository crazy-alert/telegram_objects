<?php declare(strict_types=1);

namespace Parser;


readonly class ChatMemberOwner extends ChatMember
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $status;
	public User $user;
	public bool $is_anonymous;
	public string|null $custom_title;
	
	
}