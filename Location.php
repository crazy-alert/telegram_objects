<?php declare(strict_types=1);


namespace Parser;


readonly class Location
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public float $longitude;//	Float	Longitude as defined by sender
	public float $latitude;//	Float	Latitude as defined by sender
	public float|null $horizontal_accuracy;//	Float number	Optional. The radius of uncertainty for the location, measured in meters; 0-1500
	public int|null $live_period;//	Integer	Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
	public int|null $heading;//	Integer	Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
	public int|null $proximity_alert_radius;//	Integer	Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
	
}