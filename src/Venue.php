<?php declare(strict_types=1);


namespace Parser;


readonly class Venue
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public Location $location;//	Location	Venue location. Can't be a live location
	public string $titl;//	String	Name of the venue
	public string $addres;//	String	Address of the venue
	public string|null $foursquare_id;//	String	Optional. Foursquare identifier of the venue
	public string|null $foursquare_type;//	String	Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
	public string|null $google_place_id;//	String	Optional. Google Places identifier of the venue
	public string|null $google_place_type;//	String	Optional. Google Places type of the venue. (See supported types.)
	
	
}