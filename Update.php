<?php declare(strict_types=1);

namespace Parser;

/**
 *  Этот объект представляет входящее обновление.
 * В любом данном обновлении может присутствовать не более одного из необязательных параметров.
 */
readonly class Update
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/**
	 * @var int Уникальный идентификатор обновления. Идентификаторы обновлений начинаются с определенного положительного числа и последовательно увеличиваются. Этот идентификатор становится особенно удобным, если вы используете веб-перехватчики, поскольку он позволяет игнорировать повторяющиеся обновления или восстанавливать правильную последовательность обновлений, если они выходят из строя. Если новых обновлений нет в течение как минимум недели, то идентификатор следующего обновления будет выбран случайно, а не последовательно.
	 */
	public int $update_id;
	/**
	 * @var Message|null    Optional. Новое входящее Message любого типа - text, photo, sticker, etc.
	 */
	public Message|null $message;
	/**
	 * @var Message|null    Optional. Новая версия Message, известная боту и отредактированная
	 */
	public Message|null $edited_message;
	/**
	 * @var Message|null    Optional. Любая новая входящая публикация на канале - text, photo, sticker, etc.
	 */
	public Message|null $channel_post;
	/**
	 * @var Message|null    Optional. Новая версия публикации канала, известная боту и отредактированная.
	 */
	public Message|null $edited_channel_post;
	/**
	 * @var InlineQuery|null    Optional. New incoming inline query
	 */
	public InlineQuery|null $inline_query;
	/**
	 * @var ChosenInlineResult|null Optional. Результат inline query, который выбрал пользователь и отправил своему собеседнику. Подробную информацию о том, как включить эти обновления для вашего бота, см. в нашей документации по сбору отзывов.
	 */
	public ChosenInlineResult|null $chosen_inline_result;
	/**
	 * @var CallbackQuery|null  Optional. Новое поступление callback query
	 */
	public CallbackQuery|null $callback_query;
	/**
	 * @var ShippingQuery|null  Optional. New incoming shipping query. Only for invoices with flexible price
	 */
	public ShippingQuery|null $shipping_query;
	/**
	 * @var PreCheckoutQuery|null   Optional. New incoming pre-checkout query. Contains full information about checkout
	 */
	public PreCheckoutQuery|null $pre_checkout_query;
	/**
	 * @var Poll|null   Новое состояние опроса. Боты получают только обновления об остановленных опросах и опросах, которые отправляет бот.
	 */
	public Poll|null $poll;
	/**
	 * @var PollAnswer|null Optional. Пользователь изменил свой ответ в неанонимном опросе. Боты получают новые голоса только в опросах, которые отправил сам бот.
	 */
	public PollAnswer|null $poll_answer;
	/**
	 * @var ChatMemberUpdated|null  Optional. Статус участника чата был обновлен в чате. Бот должен быть администратором в чате и должен явно указать «chat_member» в списке разрешенных_обновлений, чтобы получать эти обновления.
	 */
	public ChatMemberUpdated|null $my_chat_member;
	/**
	 * @var ChatJoinRequest|null    Optional. Запрос на вступление в чат отправлен. Чтобы получать эти обновления, бот должен иметь права администратора can_invite_users в чате.
	 */
	public ChatJoinRequest|null $chat_join_request;
	
	
}