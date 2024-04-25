<?php declare(strict_types=1);

namespace Parser;

readonly class ChatMemberMember extends ChatMember
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $status;
	public User $user;
	
	public function GetStrProperties(): array {
		return ['status'];
	}
	
	public function GetBoolProperties(): array {
		return [];
	}
	
	public function GetIntProperties(): array {
		return [];
	}
	
	public function GetKeyObjectName(): array {
		return ['user' => '\Parser\User'];
	}
	
	public function GetArraysOfObjects(): array {
		return [];
	}
}