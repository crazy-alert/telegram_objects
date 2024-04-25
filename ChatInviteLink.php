<?php declare(strict_types=1);

namespace Parser;


readonly class ChatInviteLink
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $invite_link;//  Ссылка для приглашения. Если ссылку создал другой администратор чата, то вторая часть ссылки будет заменена на «…».
	public User $creator;//         Создатель ссылки
	public bool $creates_join_request;//    ИСТИНА, если пользователи, присоединяющиеся к чату по ссылке, должны быть одобрены администраторами чата.
	public bool $is_primary;//    ИСТИНА, если ссылка первичная
	public bool $is_revoked;//    ИСТИНА, если ссылку отзовут
	public string|null $name;//     Необязательный. Имя ссылки для приглашения
	public int|null $expire_date;//   Необязательный. Момент времени (временная метка Unix), когда срок действия ссылки истечет или срок ее действия истек.
	public int|null $member_limit;//  Необязательный. Максимальное количество пользователей, которые могут быть участниками чата одновременно после присоединения к чату по этой ссылке-приглашению; 1-99999
	public int|null $pending_join_request_count;//  Необязательный. Количество ожидающих запросов на присоединение, созданных по этой ссылке
	
	
}