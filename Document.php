<?php declare(strict_types=1);

namespace Parser;

/**
 * Document Этот объект представляет собой общий файл (в отличие от фотографий , голосовых сообщений и аудиофайлов ).
 *
 * @package Parser
 *
 * @property-read string $file_id  Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
 * @property-read string $file_unique_id Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов. Невозможно использовать для загрузки или повторного использования файла.
 * @property-read PhotoSize $thumbnail Необязательно . Миниатюра документа, заданная отправителем
 * @property-read string $file_name  Необязательно . Исходное имя файла, определенное отправителем
 * @property-read string $mime_type Необязательно . MIME-тип файла, определенный отправителем
 * @property-read int $file_size Необязательно . Размер файла в байтах. Он может быть больше 2^31, и в некоторых языках программирования могут возникать трудности/скрытые дефекты при его интерпретации. Но оно имеет не более 52 значащих битов, поэтому для хранения этого значения безопасно использовать 64-битное целое число со знаком или тип с плавающей запятой двойной точности.
 *
 */
readonly class Document
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;//  string(71) "BQACAgIAAxkBAAIF7GVA60rL_yTHevWZ6y1F7-vIZE-5AAJ5OQACJU0ISufs48_TXVGIMwQ"
	public string $file_unique_id;//  string(15) "AgADeTkAAiVNCEo"
	public PhotoSize|null $thumbnail;
	public string|null $file_name;// string(10) "333234.jpg"
	public string|null $mime_type;// string(10) "image/jpeg"
	public int|null $file_size;
	
	
}