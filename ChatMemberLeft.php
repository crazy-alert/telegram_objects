<?php declare(strict_types=1);

namespace Parser;

/** ChatMemberLeft Представляет участника чата, который в данный момент не является участником чата, но может присоединиться к нему самостоятельно.
 *
 * @package Parser
 *
 * @property-read string $status Статус участника в чате всегда  “left”
 * @property-read User $user Информация о пользователе
 */
readonly class ChatMemberLeft extends ChatMember
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