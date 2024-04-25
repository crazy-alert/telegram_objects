<?php declare(strict_types=1);


namespace Parser;


readonly class VideoNote
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;//	String	Identifier for this file, which can be used to download or reuse the file
	public string $file_unique_id;//	String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	public int $length;//	Integer	Video width and height (diameter of the video message) as defined by sender
	public int $duration;//	Integer	Duration of the video in seconds as defined by sender
	public PhotoSize|null $thumbnail;//	PhotoSize	Optional. Video thumbnail

	public int|null $file_size;//	Integer	Optional. File size in bytes
	
}