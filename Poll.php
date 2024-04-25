<?php declare(strict_types=1);


namespace Parser;


readonly class Poll
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public string $id;//	String	Unique poll identifier
	public string $question;//	String	Poll question, 1-300 characters
	public array $options;//	Array of PollOption	List of poll options
	public int $total_voter_count;//	Integer	Total number of users that voted in the poll
	public bool $is_closed;//	Boolean	True, if the poll is closed
	public bool $is_anonymous;//	Boolean	True, if the poll is anonymous
	public string $type;//	String	Poll type, currently can be “regular” or “quiz”
	public bool $allows_multiple_answers;//	Boolean	True, if the poll allows multiple answers
	public int|null $correct_option_id;//	Integer	Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
	public string|null $explanation;//	String	Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
	public array|null $explanation_entities;//	Array of MessageEntity	Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
	public int|null $open_period;//	Integer	Optional. Amount of time in seconds the poll will be active after creation
	public int|null $close_date;//	Integer	Optional. Point in time (Unix timestamp) when the poll will be automatically closed
	
	
}