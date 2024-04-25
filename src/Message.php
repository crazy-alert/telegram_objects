<?php declare(strict_types=1);


namespace Parser;

/**
 *  Этот объект представляет сообщение.
 */
readonly class Message
{
	use TG_OBJECT_CONSTRUCTOR;
	
	/**
	 * @var int Int Уникальный идентификатор сообщения внутри этого чата
	 */
	public int $message_id;//	Integer	Unique message identifier inside this chat
	/**
	 * @var int|null    Необязательный. Уникальный идентификатор потока сообщений, к которому принадлежит сообщение; только для супергрупп
	 */
	public int|null $message_thread_id;//    Integer Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
	/**
	 * @var User|null   Необязательный. Отправитель сообщения; пусто для сообщений, отправленных в каналы. Для обратной совместимости в неканальных чатах поле содержит фиктивного пользователя-отправителя, если сообщение было отправлено от имени чата.
	 */
	public User|null $from;//	User
	/**
	 * @var Chat|null   Необязательный. Отправитель сообщения, отправленного от имени чата. Например, сам канал для публикаций канала, сама супергруппа для сообщений от администраторов анонимных групп, связанный канал для сообщений, автоматически пересылаемых в дискуссионную группу. Для обратной совместимости поле from содержит поддельного пользователя-отправителя в неканальных чатах, если сообщение было отправлено от имени чата.
	 */
	public Chat|null $sender_chat;
	/**
	 * @var int Дата отправки сообщения по времени Unix
	 */
	public int $date;
	/**
	 * @var Chat    Chat, которому принадлежит сообщение
	 */
	public Chat $chat;
	/**
	 * @var User|null   Необязательный. Для пересылаемых сообщений отправитель исходного сообщения
	 */
	public User|null $forward_from;
	/**
	 * @var Chat|null   Необязательный. Для сообщений, пересылаемых из каналов или от анонимных администраторов, информация об исходном чате отправителя.
	 */
	public Chat|null $forward_from_chat;//	Chat	Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
	/**
	 * @var int|null    Необязательный. Для сообщений, пересылаемых из каналов, идентификатор исходного сообщения в канале.
	 */
	public int|null $forward_from_message_id;//	Integer	Optional. For messages forwarded from channels, identifier of the original message in the channel
	/**
	 * @var string|null Необязательный. Для пересылаемых сообщений, которые изначально были отправлены в каналах или анонимным администратором чата, подпись отправителя сообщения, если она присутствует.
	 */
	public string|null $forward_signature;//	String	Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present
	/**
	 * @var string|null Необязательный. Имя отправителя сообщений, пересылаемых от пользователей, которые запрещают добавлять ссылку на свою учетную запись в пересылаемые сообщения.
	 */
	public string|null $forward_sender_name;//	String	Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
	/**
	 * @var int|null    Необязательный. Для пересылаемых сообщений укажите дату отправки исходного сообщения по времени Unix.
	 */
	public int|null $forward_date;//	Integer	Optional. For forwarded messages, date the original message was sent in Unix time
	/**
	 * @var bool|null   Необязательный. Правда, если сообщение отправлено в тему форума
	 */
	public bool|null $is_topic_message;//	True	Optional. True, if the message is sent to a forum topic
	/**
	 * @var bool|null   Необязательный. Верно, если сообщение представляет собой публикацию канала, которая была автоматически перенаправлена в подключенную дискуссионную группу.
	 */
	public bool|null $is_automatic_forward;//	True	Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
	/**
	 * @var Message|null    Необязательный. Для ответов — исходное сообщение. Обратите внимание, что объект Message в этом поле не будет содержать дополнительных полей Answer_to_message, даже если он сам является ответом.
	 */
	public Message|null $reply_to_message;//	Message	Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
	/**
	 * @var User|null   Необязательный. Бот, через которого было отправлено сообщение
	 */
	public User|null $via_bot;//	User	Optional. Bot through which the message was sent
	/**
	 * @var int|null    Необязательный. Дата последнего редактирования сообщения по времени Unix.
	 */
	public int|null $edit_date;//	Integer	Optional. Date the message was last edited in Unix time
	/**
	 * @var bool|null   Необязательный. Правда, если сообщение невозможно переслать
	 */
	public bool|null $has_public_content;//	True	Optional. True, if the message can't be forwarded
	/**
	 * @var string|null Необязательный. Уникальный идентификатор группы мультимедийных сообщений, к которой принадлежит это сообщение.
	 */
	public string|null $media_group_id;//	String	Optional. The unique identifier of a media message group this message belongs to
	/**
	 * @var string|null Необязательный. Подпись автора поста для сообщений в каналах или произвольный заголовок анонимного администратора группы
	 */
	public string|null $author_signature;//	String	Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
	/**
	 * @var string|null Необязательный. Для текстовых сообщений — фактический текст сообщения в формате UTF-8.
	 */
	public string|null $text;//	String	Optional. For text messages, the actual UTF-8 text of the message
	/**
	 * @var array|null  Array of MessageEntity    Необязательный. Для текстовых сообщений специальные объекты, такие как имена пользователей, URL-адреса, команды бота и т. д., которые появляются в тексте.
	 */
	public array|null $entities;//	Array of MessageEntity	Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
	/**
	 * @var Animation|null  Необязательный. Сообщение — анимация, информация об анимации. В целях обратной совместимости, если это поле установлено, документ
	 */
	public Animation|null $animation;//	Animation	Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document
	/**
	 * @var Audio|null  Необязательный. Сообщение — аудиофайл, информация о файле.
	 */
	public Audio|null $audio;//	Audio	Optional. Message is an audio file, information about the file
	/**
	 * @var Document|null   Необязательный. Сообщение — общий файл, информация о файле
	 */
	public Document|null $document;//	Document	Optional. Message is a general file, information about the file
	/**
	 * @var array|null  Array of PhotoSize    Необязательный. Сообщение представляет собой фотографию, доступные размеры фотографии.
	 */
	public array|null $photo;//	Array of PhotoSize	Optional. Message is a photo, available sizes of the photo
	/**
	 * @var Sticker|null        Необязательный. Сообщение — стикер, информация о стикере
	 */
	public Sticker|null $sticker;//	Sticker	Optional. Message is a sticker, information about the sticker
	/**
	 * @var Story|null  Необязательный. Сообщение – это пересланная история.
	 */
	public Story|null $story;//	Story	Optional. Message is a forwarded story
	/**
	 * @var Video|null  Необязательный. Сообщение — видео, информация о видео
	 */
	public Video|null $video;//	Video	Optional. Message is a video, information about the video
	/**
	 * @var VideoNote|null  VideoNote    Optional. Сообщение – видеозаметка, информация о видеообращении.
	 */
	public VideoNote|null $video_note;//	VideoNote	Optional. Message is a video note, information about the video message
	/**
	 * @var Voice|null  Voice    Optional. Сообщение — голосовое сообщение, информация о файле.
	 */
	public Voice|null $voice;//	Voice	Optional. Message is a voice message, information about the file
	/**
	 * @var string|null
	 */
	public string|null $caption;//	String	Optional. Caption for the animation, audio, document, photo, video or voice
	/**
	 * @var array|null  Array of MessageEntity    Optional. Для сообщений с заголовком в заголовке появляются специальные объекты, такие как имена пользователей, URL-адреса, команды бота и т. д.
	 */
	public array|null $caption_entities;//	Array of MessageEntity	Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
	/**
	 * @var bool|null   True    Optional. Верно, если медиа-сообщение покрыто анимацией-спойлером.
	 */
	public bool|null $has_media_spoiler;//	True	Optional. True, if the message media is covered by a spoiler animation
	/**
	 * @var Contact|null    Contact    Optional. Сообщение — общий контакт, информация о контакте
	 */
	public Contact|null $contact;//	Contact	Optional. Message is a shared contact, information about the contact
	/**
	 * @var Dice|null   GameDice    Optional. Сообщение представляет собой игральную кость со случайным значением.
	 */
	public Dice|null $dice;//	GameDice	Optional. Message is a dice with random value
	/**
	 * @var Game|null   Game    Optional. Сообщение – игра, информация об игре. Подробнее об играх »
	 */
	public Game|null $game;//	Game	Optional. Message is a game, information about the game. More about games »
	/**
	 * @var Poll|null   Poll    Optional. Сообщение - родной опрос, информация об опросе
	 */
	public Poll|null $poll;//	Poll	Optional. Message is a native poll, information about the poll
	/**
	 * @var Venue|null  Venue    Optional. Сообщение – место проведения, информация о месте проведения. В целях обратной совместимости, если это поле установлено, местоположение
	 */
	public Venue|null $venue;//	Venue	Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location
	/**
	 * @var Location|null   Location    Optional. Сообщение — это общее местоположение, информация о местоположении.
	 */
	public Location|null $location;//	Location	Optional. Message is a shared location, information about the location
	/**
	 * @var array|null  Array of User    Optional. Новые участники, которые были добавлены в группу или супергруппу и информация о них (одним из этих участников может быть сам бот)
	 */
	public array|null $new_chat_members;//	Array of User	Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
	/**
	 * @var User|null   User    Optional. Участника удалили из группы, информация о нем (этот участник может быть сам бот
	 */
	public User|null $left_chat_member;//	User	Optional. A member was removed from the group, information about them (this member may be the bot itself)
	/**
	 * @var string|null Optional. Название чата было изменено на это значение
	 */
	public string|null $new_chat_title;//	String	Optional. A chat title was changed to this value
	/**
	 * @var array|null  Array of PhotoSize    Необязательный. Фотография в чате была изменена на это значение
	 */
	public array|null $new_chat_photo;//	Array of PhotoSize	Optional. A chat photo was change to this value
	/**
	 * @var bool|null   Optional. Сервисное сообщение: фото в чате удалено
	 */
	public bool|null $delete_chat_photo;//	True	Optional. Service message: the chat photo was deleted
	/**
	 * @var bool|null
	 */
	public bool|null $group_chat_created;//	True	Optional. Service message: the group has been created
	/**
	 * @var bool|null   Необязательный. Сервисное сообщение: супергруппа создана. Это поле невозможно получить в сообщении, приходящем через обновления, поскольку бот не может быть членом супергруппы при ее создании. Его можно найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в непосредственно созданной супергруппе.
	 */
	public bool|null $supergroup_chat_created;//	True	Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
	/**
	 * @var bool|null   Необязательный. Служебное сообщение: канал создан. Это поле невозможно получить в сообщении, поступающем через обновления, поскольку бот не может быть участником канала на момент его создания. Его можно найти только в ответе_to_message, если кто-то отвечает на самое первое сообщение в канале.
	 */
	public bool|null $channel_chat_created;
	/**
	 * @var MessageAutoDeleteTimerChanged|null  Необязательный. Сервисное сообщение: в чате изменены настройки таймера автоудаления
	 */
	public MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed;//	MessageAutoDeleteTimerChanged	Optional. Service message: auto-delete timer settings changed in the chat
	/**
	 * @var int|null    Необязательный. Группа перенесена в супергруппу с указанным идентификатором. Это число может иметь более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное целое число со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентификатора.
	 */
	public int|null $migrate_to_chat_id;
	/**
	 * @var int|null    Необязательный. Супергруппа была перенесена из группы с указанным идентификатором. Это число может иметь более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или неявные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому 64-битное целое число со знаком или тип с плавающей запятой двойной точности безопасны для хранения этого идентификатора.
	 */
	public int|null $migrate_from_chat_id;//	Integer
	/**
	 * @var Message|null    Указанное сообщение было закреплено. Обратите внимание, что объект Message в этом поле не будет содержать дополнительных полей Answer_to_message, даже если он сам является ответом.
	 */
	public Message|null $pinned_message;
	/**
	 * @var Invoice|null
	 */
	public Invoice|null $invoice;//	OldInvoice	Optional. Message is an invoice for a payment, information about the invoice. More about payments »
	/**
	 * @var SuccessfulPayment|null SuccessfulPayment    Optional. Сообщение – служебное сообщение об успешном платеже, информация о платеже. Подробнее о платежах »
	 */
	public SuccessfulPayment|null $successful_payment;
	/**
	 * @var UserShared|null
	 */
	public UserShared|null $user_shared;//	UserShared	Optional. Service message: a user was shared with the bot
	/**
	 * @var ChatShared|null
	 */
	public ChatShared|null $chat_shared;//	ChatShared	Optional. Service message: a chat was shared with the bot
	/**
	 * @var string|null
	 */
	public string|null $connected_website;//	String	Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
	/**
	 * @var WriteAccessAllowed|null
	 */
	public WriteAccessAllowed|null $write_access_allowed;//	WriteAccessAllowed	Optional. Service message: the user allowed the bot added to the attachment menu to write messages
	/**
	 * @var PassportData|null
	 */
	public PassportData|null $passport_data;//	PassportData	Optional. Telegram Passport data
	/**
	 * @var ProximityAlertTriggered|null
	 */
	public ProximityAlertTriggered|null $proximity_alert_triggered;//	ProximityAlertTriggered	Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
	/**
	 * @var ForumTopicCreated|null
	 */
	public ForumTopicCreated|null $forum_topic_created;//	ForumTopicCreated	Optional. Service message: forum topic created
	/**
	 * @var ForumTopicEdited|null
	 */
	public ForumTopicEdited|null $forum_topic_edited;//	ForumTopicEdited	Optional. Service message: forum topic edited
	/**
	 * @var ForumTopicClosed|null
	 */
	public ForumTopicClosed|null $forum_topic_closed;//	ForumTopicClosed	Optional. Service message: forum topic closed
	/**
	 * @var ForumTopicReopened|null
	 */
	public ForumTopicReopened|null $forum_topic_reopened;//	ForumTopicReopened	Optional. Service message: forum topic reopened
	/**
	 * @var GeneralForumTopicHidden|null    Необязательный. Сервисное сообщение: тема форума «Общие» скрыта
	 */
	public GeneralForumTopicHidden|null $general_forum_topic_hidden;//	GeneralForumTopicHidden	Optional. Service message: the 'General' forum topic hidden
	/**
	 * @var GeneralForumTopicUnhidden|null  Необязательный. Служебное сообщение: тема форума «Общие» не скрыта
	 */
	public GeneralForumTopicUnhidden|null $general_forum_topic_unhidden;//	GeneralForumTopicUnhidden	Optional. Service message: the 'General' forum topic unhidden
	/**
	 * @var VideoChatScheduled|null Необязательный. Служебное сообщение: видеочат запланирован
	 */
	public VideoChatScheduled|null $video_chat_scheduled;//	VideoChatScheduled	Optional. Service message: video chat scheduled
	/**
	 * @var VideoChatStarted|null   Необязательный. Служебное сообщение: видеочат запущен
	 */
	public VideoChatStarted|null $video_chat_started;//	VideoChatStarted	Optional. Service message: video chat started
	/**
	 * @var VideoChatEnded|null Необязательный. Служебное сообщение: видеочат завершен
	 */
	public VideoChatEnded|null $video_chat_ended;//	VideoChatEnded	Optional. Service message: video chat ended
	/**
	 * @var VideoChatParticipantsInvited|null   Необязательный. Служебное сообщение: новые участники приглашены в видеочат
	 */
	public VideoChatParticipantsInvited|null $video_chat_participants_invited;//	VideoChatParticipantsInvited	Optional. Service message: new participants invited to a video chat
	/**
	 * @var WebAppData|null    Необязательный. Служебное сообщение: данные, отправленные веб-приложением.
	 */
	public WebAppData|null $web_app_data;//	WebAppData	Optional. Service message: data sent by a Web App
	/**
	 * @var InlineKeyboardMarkup|null   Необязательный. Встроенная клавиатура, прикрепленная к сообщению. Кнопки login_url представлены как обычные кнопки URL.
	 */
	public InlineKeyboardMarkup|null $reply_markup;//	InlineKeyboardMarkup	Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
	
}