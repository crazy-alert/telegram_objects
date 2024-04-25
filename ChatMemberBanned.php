<?php declare(strict_types=1);

namespace Parser;

/** ChatMemberBanned Представляет участника чата, который был заблокирован в чате и не может вернуться в чат или просмотреть сообщения чата.
 *
 * @package Parser
 *
 * @property-read string $status Статус участника в чате, всегда “kicked”
 * @property-read User $user Информация о пользователеы
 * @property-read int $until_date Дата снятия ограничений для данного пользователя; Время Юникса. Если 0, то пользователь забанен навсегда
 */
readonly class ChatMemberBanned extends ChatMember
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $status;
	public User $user;
	public int $until_date;
	
	public function GetStrProperties(): array {
		return ['status'];
	}
	
	public function GetBoolProperties(): array {
		return [];
	}
	
	public function GetIntProperties(): array {
		return ['until_date'];
	}
	
	public function GetKeyObjectName(): array {
		return ['user' => '\Parser\User'];
	}
	
	public function GetArraysOfObjects(): array {
		return [];
	}
}