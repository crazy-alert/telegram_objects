<?php declare(strict_types=1);
/*id	Integer	Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
is_bot	Boolean	True, if this user is a bot
first_name	String	User's or bot's first name
last_name	String	Optional. User's or bot's last name
username	String	Optional. User's or bot's username
language_code	String	Optional. IETF language tag of the user's language
is_premium	True	Optional. True, if this user is a Telegram Premium user
added_to_attachment_menu	True	Optional. True, if this user added the bot to the attachment menu
can_join_groups	Boolean	Optional. True, if the bot can be invited to groups. Returned only in getMe.
can_read_all_group_messages	Boolean	Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
supports_inline_queries	Boolean	Optional. True, if the bot supports inline queries. Returned only in getMe.*/

namespace Parser;


/**
 *  Этот объект представляет пользователя или бота Telegram. Рождается парсером.
 */
readonly class User
{
	use TG_OBJECT_CONSTRUCTOR;
	
	
	/**
	 * @var int Целое число Уникальный идентификатор этого пользователя или бота. Это число может иметь более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому для хранения этого идентификатора можно безопасно использовать 64-битное целое число или тип с плавающей запятой двойной точности.
	 */
	public int $id;//	Integer	Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
	/**
	 * @var bool True, если этот пользователь — бот
	 */
	public bool $is_bot;//	Boolean	True, if this user is a bot
	/**
	 * @var string Имя пользователя или бота.
	 */
	public string $first_name;//	String	User's or bot's first name
	/**
	 * @var string|null Необязательный. Фамилия пользователя или бота
	 */
	public string|null $last_name;//	String	Optional. User's or bot's last name
	/**
	 * @var string|null Необязательный. Имя пользователя или бота
	 */
	public string|null $username;//	String	Optional. User's or bot's username
	/**
	 * @var string|null Необязательный. Языковой тег IETF для языка пользователя.
	 */
	public string|null $language_code;//	String	Optional. IETF language tag of the user's language
	/**
	 * @var bool|null   Необязательный. True, если этот пользователь является пользователем Telegram Premium.
	 */
	public bool|null $is_premium;//	True	Optional. True, if this user is a Telegram Premium user
	/**
	 * @var bool|null   Необязательный. True, если этот пользователь добавил бота в меню вложений
	 */
	public bool|null $added_to_attachment_menu;//	True	Optional. True, if this user added the bot to the attachment menu
	/**
	 * @var bool|null   Необязательный. True, если бота можно будет приглашать в группы. Вернулся только в getMe.
	 */
	public bool|null $can_join_groups;//	Boolean	Optional. True, if the bot can be invited to groups. Returned only in getMe.
	/**
	 * @var bool|null   Необязательный. True, если у бота отключен режим приватности. Вернулся только в getMe.
	 */
	public bool|null $can_read_all_group_messages;//	Boolean	Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
	/**
	 * @var bool|null   Необязательный. True, если бот поддерживает встроенные запросы. Вернулся только в getMe.
	 */
	public bool|null $supports_inline_queries;//	Boolean	Optional. True, if the bot supports inline queries. Returned only in getMe.
	
	
}