<?php

return array (
	'author'		=> 'denis.d',
    'admin' => array(
        'title' => 'name'
    ),
	'fields'		=> array (
		'id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null',
				'Auto_Increment'
			)
		),
		'name'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		),
		'lastName'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> '',
				'Comment'	=> 'Фамилия',
				'Null'
			)
		),
		'patronymic'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> '',
				'Comment'	=> 'Отчество',
				'Null'
			)
		),
		'interest'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> '',
				'Comment'	=> 'Интересы',
				'Null'
			)
		),
		'occupation'	=> array (
			'Varchar',
			array (
				'Size'	=> 255,
				'Default'	=> '',
				'Comment'	=> 'Род занятий',
				'Null'
			)
		),
		'nickName'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> '',
				'Comment'	=> 'Ник',
				'Null'
			)
		),
		'siteUrl'	=> array (
			'Varchar',
			array (
				'Size'	=> 64,
				'Default'	=> '',
				'Comment'	=> 'Url сайта',
				'Null'
			)
		),
		'notificationCommentAnswer'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Ответы на комментарии, оставленные мной',
				'Null'
			)
		),
		'notificationPoll'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о голосованиях в опубликованных мною опросах',
				'Null'
			)
		),
		'notificationAddFriend'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о добавлении меня в друзья',
				'Null'
			)
		),
		'notificationDeleteFriend'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять об удалении меня из списка друзей',
				'Null'
			)
		),
		'notificationNewMessage'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о новом личном сообщении',
				'Null'
			)
		),
		'notificationInviteCommunity'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о приглашениях в сообщества',
				'Null'
			)
		),
		'notificationEventFriend'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о событиях у друзей',
				'Null'
			)
		),
		'notificationBirthday'	=> array (
			'Int',
			array (
				'Size'	=> 1,
				'Default'	=> 0,
				'Comment'	=> 'Уведомлять о приближающемся дне рождении друзей',
				'Null'
			)
		),
		'notificationReceiptMode'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Default'	=> 0,
				'Comment'	=> 'Режим поступления уведомлений',
				'Null'
			)
		),
		'birthDate'	=> array (
			'Datetime',
			array (
				'Default'	=> '2000-01-01 00:00:00',
				'Comment'	=> 'День рождения',
				'Null'
			)
		),
		'User__id'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'userRegisterDate'	=> array (
			'Datetime',
			array (
				'Null'
			)
		),
		'userSign'	=> array (
			'Text',
			array (
				'Null'
			)
		),
		'userPostCount'	=> array (
			'Int',
			array (
				'Size'	=> 11,
				'Null'
			)
		),
		'userAvatar'	=> array (
			'Varchar',
			array (
				'Size'	=> 128,
				'Default'	=> null,
				'Null'
			)
		)
	)
	);
