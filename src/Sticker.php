<?php declare(strict_types=1);

namespace Parser;

readonly class Sticker
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $file_id;//	        String	Identifier for this file, which can be used to download or reuse the file
	public string $file_unique_id;//	String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	public string $type;//	            String	Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
	public int $width;//	            Integer	Sticker width
	public int $height;//	        Integer	Sticker height
	public bool $is_animated;//	    Boolean	True, if the sticker is animated
	public bool $is_video;//	        Boolean	True, if the sticker is a video sticker
	public PhotoSize|null $thumbnail;//	        PhotoSize	Optional. Sticker thumbnail in the .WEBP or .JPG format
	public string|null $emoji;//	            String	Optional. Emoji associated with the sticker
	public string|null $set_name;//	        String	Optional. Name of the sticker set to which the sticker belongs
	public File|null $premium_animation;//	   File	Optional. For premium regular stickers, premium animation for the sticker
	public MaskPosition|null $mask_position;//	        MaskPosition	Optional. For mask stickers, the position where the mask should be placed
	public string|null $custom_emoji_id;//	    String	Optional. For custom emoji stickers, unique identifier of the custom emoji
	public true|null $needs_repainting;//	    True	Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
	public int|null $file_size;//	            Integer	Optional. File size in bytes
	
	
}