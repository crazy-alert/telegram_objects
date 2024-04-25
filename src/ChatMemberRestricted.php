<?php declare(strict_types=1);

namespace Parser;

readonly class ChatMemberRestricted extends ChatMember
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $status;
	public User $user;
	
}