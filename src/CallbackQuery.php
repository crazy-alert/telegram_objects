<?php declare(strict_types=1);


namespace Parser;


/**
 *  Этот объект представляет входящий запрос обратного вызова от кнопки обратного вызова на встроенной клавиатуре. Если кнопка, вызвавшая запрос, была прикреплена к сообщению, отправленному ботом, поле message будет присутствовать. Если кнопка была прикреплена к сообщению, отправленному через бота (в инлайн-режиме), то поле inline_message_id будет присутствовать. Будет присутствовать ровно одно из полей data или game_short_name.
 */
readonly class CallbackQuery
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/**
	 * @var string String Уникальный идентификатор для этого запроса
	 */
	public string $id;//	String	Unique identifier for this query
	/**
	 * @var User Пользователь-отправитель
	 */
	public User $from;//	User	Sender
	/**
	 * @var Message    Сообщение Необязательно. Сообщение с кнопкой обратного вызова, вызвавшее запрос. Обратите внимание, что содержание сообщения и дата сообщения не будут доступны, если сообщение слишком старое.
	 */
	public Message|null $message;//	Message	Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
	/**
	 * @var string|null Строка Необязательно. Идентификатор сообщения, отправленного через бот во встроенном режиме, из которого был отправлен запрос.
	 */
	public string|null $inline_message_id;//	String	Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
	/**
	 * @var string String Глобальный идентификатор, однозначно соответствующий чату, в который было отправлено сообщение с кнопкой обратного вызова. Полезно для высоких результатов в играх.
	 */
	public string $chat_instance;//	String	Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
	/**
	 * @var string|null Строка Необязательно. Данные, связанные с кнопкой обратного вызова. Имейте в виду, что сообщение, породившее запрос, не может содержать кнопок обратного вызова с этими данными.
	 */
	public string|null $data;//	String	Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
	/**
	 * @var string|null Строка Необязательно. Краткое название возвращаемой игры служит уникальным идентификатором игры.
	 */
	public string|null $game_short_name;//	String	Optional. Short name of a Game to be returned, serves as the unique identifier for the game
	
	
}