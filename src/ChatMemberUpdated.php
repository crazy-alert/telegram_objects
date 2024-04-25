<?php declare(strict_types=1);

namespace Parser;

/* Чел запусил ботs
$input['update_id'] => int(822918223)
$input['my_chat_member']['chat']['id'] => int(1165133176)
$input['my_chat_member']['chat']['first_name'] => string(14) "⋆ R1H4RD ⋆"
$input['my_chat_member']['chat']['username'] => string(12) "R1HARD_admin"
$input['my_chat_member']['chat']['type'] => string(7) "private"
$input['my_chat_member']['from']['id'] => int(1165133176)
$input['my_chat_member']['from']['is_bot'] => bool(false)
$input['my_chat_member']['from']['first_name'] => string(14) "⋆ R1H4RD ⋆"
$input['my_chat_member']['from']['username'] => string(12) "R1HARD_admin"
$input['my_chat_member']['from']['language_code'] => string(2) "ru"
$input['my_chat_member']['from']['is_premium'] => bool(true)
$input['my_chat_member']['date'] => int(1699161488)
$input['my_chat_member']['old_chat_member']['user']['id'] => int(1998098622)
$input['my_chat_member']['old_chat_member']['user']['is_bot'] => bool(true)
$input['my_chat_member']['old_chat_member']['user']['first_name'] => string(10) "BAS OTCHET"
$input['my_chat_member']['old_chat_member']['user']['username'] => string(14) "bas_otchet_bot"
$input['my_chat_member']['old_chat_member']['status'] => string(6) "kicked"
$input['my_chat_member']['old_chat_member']['until_date'] => int(0)
$input['my_chat_member']['new_chat_member']['user']['id'] => int(1998098622)
$input['my_chat_member']['new_chat_member']['user']['is_bot'] => bool(true)
$input['my_chat_member']['new_chat_member']['user']['first_name'] => string(10) "BAS OTCHET"
$input['my_chat_member']['new_chat_member']['user']['username'] => string(14) "bas_otchet_bot"
$input['my_chat_member']['new_chat_member']['status'] => string(6) "member"     */

/*  Чел заблокировал бот
$input['update_id'] => int(822918222)
$input['my_chat_member']['chat']['id'] => int(1165133176)
$input['my_chat_member']['chat']['first_name'] => string(14) "⋆ R1H4RD ⋆"
$input['my_chat_member']['chat']['username'] => string(12) "R1HARD_admin"
$input['my_chat_member']['chat']['type'] => string(7) "private"
$input['my_chat_member']['from']['id'] => int(1165133176)
$input['my_chat_member']['from']['is_bot'] => bool(false)
$input['my_chat_member']['from']['first_name'] => string(14) "⋆ R1H4RD ⋆"
$input['my_chat_member']['from']['username'] => string(12) "R1HARD_admin"
$input['my_chat_member']['from']['language_code'] => string(2) "ru"
$input['my_chat_member']['from']['is_premium'] => bool(true)
$input['my_chat_member']['date'] => int(1699161408)
$input['my_chat_member']['old_chat_member']['user']['id'] => int(1998098622)
$input['my_chat_member']['old_chat_member']['user']['is_bot'] => bool(true)
$input['my_chat_member']['old_chat_member']['user']['first_name'] => string(10) "BAS OTCHET"
$input['my_chat_member']['old_chat_member']['user']['username'] => string(14) "bas_otchet_bot"
$input['my_chat_member']['old_chat_member']['status'] => string(6) "member"
$input['my_chat_member']['new_chat_member']['user']['id'] => int(1998098622)
$input['my_chat_member']['new_chat_member']['user']['is_bot'] => bool(true)
$input['my_chat_member']['new_chat_member']['user']['first_name'] => string(10) "BAS OTCHET"
$input['my_chat_member']['new_chat_member']['user']['username'] => string(14) "bas_otchet_bot"
$input['my_chat_member']['new_chat_member']['status'] => string(6) "kicked"
$input['my_chat_member']['new_chat_member']['until_date'] => int(0)     */


readonly class ChatMemberUpdated
{
	use TG_OBJECT_CONSTRUCTOR;
	
	public Chat $chat;
	public User $from;
	public int $date;
	public ChatMember $old_chat_member;//       Предыдущая информация об участнике чата
	public ChatMember $new_chat_member;//        ChatMember Новая информация об участнике чата
	public ChatInviteLink|null $invite_link;//        Необязательный. Ссылка-приглашение в чат, которую пользователь использовал для присоединения к чату; только для участия в мероприятиях по приглашению.
	public bool|null $via_chat_folder_invite_link;//  Необязательный.  Верно, если пользователь присоединился к чату через ссылку приглашения в папку чата
	
	public function __construct(array $input) {
		$this->chat = new Chat($input['chat']);
		$this->from = new User($input['from']);
		$this->date = $input['date'];
		
		if($input['new_chat_member']['status'] == 'kicked'){
			$this->new_chat_member = new ChatMemberBanned($input['new_chat_member']);
		}
		elseif($input['new_chat_member']['status'] == 'left'){
			$this->new_chat_member = new ChatMemberLeft($input['new_chat_member']);
		}
		elseif($input['new_chat_member']['status'] == 'restricted'){
			$this->new_chat_member = new ChatMemberRestricted($input['new_chat_member']);
		}
		elseif($input['new_chat_member']['status'] == 'member'){
			$this->new_chat_member = new ChatMemberMember($input['new_chat_member']);
		}
		elseif($input['new_chat_member']['status'] == 'administrator'){
			$this->new_chat_member = new ChatMemberAdministrator($input['new_chat_member']);
		}
		elseif($input['new_chat_member']['status'] == 'creator'){
			$this->new_chat_member = new ChatMemberOwner($input['new_chat_member']);
		}
		
		if($input['old_chat_member']['status'] == 'kicked'){
			$this->old_chat_member = new ChatMemberBanned($input['old_chat_member']);
		}
		elseif($input['old_chat_member']['status'] == 'left'){
			$this->old_chat_member = new ChatMemberLeft($input['old_chat_member']);
		}
		elseif($input['old_chat_member']['status'] == 'restricted'){
			$this->old_chat_member = new ChatMemberRestricted($input['old_chat_member']);
		}
		elseif($input['old_chat_member']['status'] == 'member'){
			$this->old_chat_member = new ChatMemberMember($input['old_chat_member']);
		}
		elseif($input['old_chat_member']['status'] == 'administrator'){
			$this->old_chat_member = new ChatMemberAdministrator($input['old_chat_member']);
		}
		elseif($input['old_chat_member']['status'] == 'creator'){
			$this->old_chat_member = new ChatMemberOwner($input['old_chat_member']);
		}

        $this->invite_link = $input['invite_link'] ?? null;
        $this->via_chat_folder_invite_link = $input['via_chat_folder_invite_link'] ?? null;
		/*
		 ChatMemberOwner	string $status;
					        User $user;
					        bool $is_anonymous;
							string|null $custom_title;
		
		ChatMemberMember 	string $status;
							User $user;
		
	ChatMemberRestricted    string $status;
							User $user;
		
			ChatMemberLeft 	string $status;
							User $user;
		
		ChatMemberBanned    string $status;
							User $user;
							int $until_date;
	
		
	ChatMemberAdministrator	string $status;//	String	The member's status in the chat, always “administrator”
							User $user;//	User	Information about the user
							bool $can_be_edited;//	Boolean	True, if the bot is allowed to edit administrator privileges of that user
							bool $is_anonymous;//	Boolean	True, if the user's presence in the chat is hidden
							bool $can_manage_chat;//	Boolean	True, if the administrator can access the chat event log, boost list in channels, see channel members, report spam messages, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
							bool $can_delete_messages;//	Boolean	True, if the administrator can delete messages of other users
							bool $can_manage_video_chats;//	Boolean	True, if the administrator can manage video chats
							bool $can_restrict_members;//	Boolean	True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
							bool $can_promote_members;//	Boolean	True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
							bool $can_change_info;//	Boolean	True, if the user is allowed to change the chat title, photo and other settings
							bool $can_invite_users;//	Boolean	True, if the user is allowed to invite new users to the chat
							bool|null $can_post_messages;//	Boolean	Optional. True, if the administrator can post messages in the channel, or access channel statistics; channels only
							bool|null $can_edit_messages;//	Boolean	Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
							bool|null $can_pin_messages;//	Boolean	Optional. True, if the user is allowed to pin messages; groups and supergroups only
							bool|null $can_post_stories;//	Boolean	Optional. True, if the administrator can post stories in the channel; channels only
							bool|null $can_edit_stories;//	Boolean	Optional. True, if the administrator can edit stories posted by other users; channels only
							bool|null $can_delete_stories;//	Boolean	Optional. True, if the administrator can delete stories posted by other users; channels only
							bool|null $can_manage_topics;//	Boolean	Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
							string|null $custom_title;//	String	Optional. Custom title for this user
		
		
		
		
		*/
		

		
	}
	
	


    public function SaveAdminPrivileges():bool{
        /*------------$Update->my_chat_member->new_chat_member is object of Parser\ChatMemberAdministrator
                    $Update->my_chat_member->new_chat_member->status => string(13) "administrator"
     ------------$Update->my_chat_member->new_chat_member->user is object of Parser\User
                $Update->my_chat_member->new_chat_member->user->id => int(5149320675)
                $Update->my_chat_member->new_chat_member->user->is_bot => bool(true)
                $Update->my_chat_member->new_chat_member->user->first_name => string(31) "💥 💸 Best PR Bot 💸 💥"
                $Update->my_chat_member->new_chat_member->user->last_name => NULL
                $Update->my_chat_member->new_chat_member->user->username => string(10) "Ton_pr_bot"
                $Update->my_chat_member->new_chat_member->user->language_code => NULL
                $Update->my_chat_member->new_chat_member->user->is_premium => NULL
                $Update->my_chat_member->new_chat_member->user->added_to_attachment_menu => NULL
                $Update->my_chat_member->new_chat_member->user->can_join_groups => NULL
                $Update->my_chat_member->new_chat_member->user->can_read_all_group_messages => NULL
                $Update->my_chat_member->new_chat_member->user->supports_inline_queries => NULL
                $Update->my_chat_member->new_chat_member->can_be_edited => bool(false)
                $Update->my_chat_member->new_chat_member->is_anonymous => bool(false)
                $Update->my_chat_member->new_chat_member->can_manage_chat => bool(true)
                $Update->my_chat_member->new_chat_member->can_delete_messages => bool(false)
                $Update->my_chat_member->new_chat_member->can_manage_video_chats => bool(true)
                $Update->my_chat_member->new_chat_member->can_restrict_members => bool(true)
                $Update->my_chat_member->new_chat_member->can_promote_members => bool(false)
                $Update->my_chat_member->new_chat_member->can_change_info => bool(false)
                $Update->my_chat_member->new_chat_member->can_invite_users => bool(true)
                $Update->my_chat_member->new_chat_member->can_post_messages => bool(false)
                $Update->my_chat_member->new_chat_member->can_edit_messages => bool(false)
                $Update->my_chat_member->new_chat_member->can_pin_messages => NULL
                $Update->my_chat_member->new_chat_member->can_post_stories => bool(true)
                $Update->my_chat_member->new_chat_member->can_edit_stories => bool(true)
                $Update->my_chat_member->new_chat_member->can_delete_stories => bool(true)
                $Update->my_chat_member->new_chat_member->can_manage_topics => NULL
     */
    }
	
}