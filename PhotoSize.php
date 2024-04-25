<?php declare(strict_types=1);
//']['file_id'];// string(78) "AAMCAgADGQEAAgXsZUDrSsv_JMd69ZnrLUXv68hkT7kAAnk5AAIlTQhK5-zjz9NdUYgBAAdtAAMzBA"
//']['file_unique_id;//  string(16) "AQADeTkAAiVNCEpy"
//']['file_size;//  int(6176)
//']['width;//  int(320)
//']['height;//  int(200)
namespace Parser;

readonly class PhotoSize
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;//Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
	public string $file_unique_id;// Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов. Невозможно использовать для загрузки или повторного использования файла.
	public int $width;// Ширина
	public int $height;//   Высота
	public int|null $file_size;//   Необязательный. Размер файла в байтах
	
	
}