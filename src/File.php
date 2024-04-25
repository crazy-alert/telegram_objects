<?php declare(strict_types=1);

namespace Parser;

/**
 * File Этот объект представляет собой файл, готовый к загрузке. Скачать файл можно по ссылке https://api.telegram.org/file/bot<токен>/<путь_файла>. Гарантируется, что ссылка будет действительна не менее 1 часа. Когда срок действия ссылки истечет, новую можно запросить, вызвав getFile.
 *
 * @package Parser
 *
 * @property-read string file_id    String    Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
 * @property-read string file_unique_id    String    Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов. Невозможно использовать для загрузки или повторного использования файла.
 * @property-read int file_size    Integer    Optional.Размер файла в байтах
 * @property-read string file_path    Optional. Путь к файлу. Используйте https://api.telegram.org/file/bot<token>/<file_path>, чтобы получить файл.
 *
 */
readonly class File
{
	use TG_OBJECT_CONSTRUCTOR;
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;
	public string $file_unique_id;
	public int|null $file_size;
	public string|null $file_path;
	
	
}