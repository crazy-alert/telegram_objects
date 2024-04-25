<?php declare(strict_types=1);


namespace Parser;


readonly class Story
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;//	String	Identifier for this file, which can be used to download or reuse the file
	public string $file_unique_id;//	String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	public int $width;//	Integer	Video width as defined by sender
	public int $height;//	Integer	Video height as defined by sender
	public int $duration;//	Integer	Duration of the video in seconds as defined by sender
	public PhotoSize|null $thumbnail;//	PhotoSize	Optional. Video thumbnail
	public string|null $file_name;//	String	Optional. Original filename as defined by sender
	public string|null $mime_type;//	String	Optional. MIME type of the file as defined by sender
	public int|null $file_size;//	Integer	Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
	
	
}