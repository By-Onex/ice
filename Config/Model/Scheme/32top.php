<?php
return array(
    'models'        => array(
        'admin_log_temp'   => array(
            'source'          => 'Action_Log',
            'keyGen'          => 'Helper_Unique::forModel'
        ),
        'banner_position'   => array(
            'source'          => 'Sync'
        ),
        'cache'   => array(
            'source'          => 'Defined'
        ),
        'cache_group'   => array(
            'source'          => 'Defined'
        ),
        'clinic_adverts_position'   => array(
            'source'          => 'Defined'
        ),
        'clinic_price_category'   => array(
            'source'          => 'Defined'
        ),
        'clinic_statistic_goal'   => array(
            'source'          => 'Defined'
        ),
        'clinic_tab'   => array(
            'source'          => 'Defined'
        ),
        'clinic_trigger_type'   => array(
            'source'          => 'Defined'
        ),
        'clinic_type'   => array(
            'source'          => 'Defined'
        ),
        'component_rating'   => array(
            'table'          => 'ice_rating'
        ),
        'event_cache'   => array(
            'source'          => 'event_cache',
            'keyGen'          => 'Helper_Unique::forModel'
        ),
        'experience'   => array(
            'source'          => 'Defined'
        ),
        'gender'   => array(
            'source'          => 'Defined'
        ),
        'insurance'   => array(
            'source'          => 'Defined'
        ),
        'mail_once_receiver'   => array(
            'source'          => 'Defined'
        ),
        'menu'   => array(
            'source'          => 'Defined'
        ),
        'phone_feedback'   => array(
            'source'          => 'Defined'
        ),
        'service_sync'   => array(
            'source'          => 'Defined'
        ),
        'smf_boards'   => array(
            'table'          => 'ru32top_forum.smf_boards',
            'key'          => 'id_board'
        ),
        'smf_messages'   => array(
            'table'          => 'ru32top_forum.smf_messages',
            'key'          => 'id_msg'
        ),
        'temp_content'   => array(
            'keyGen'          => 'Temp_Content::idForNew',
            'source'          => 'temp_content'
        ),
        'user_notification'   => array(
            'source'          => 'Defined'
        ),
        'user_notification_type'   => array(
            'source'          => 'Defined'
        ),
        'user_session'   => array(
            'source'          => 'user_session',
            'keyGen'          => 'Helper_Unique::forModel',
            'indexes'          => array(
                array('User__id')
            ),
            'keygen'          => 'Helper_Unique::forModel',
            '*source'          => 'user_session',
            '*keygen'          => 'Helper_Unique::forModel',
            '*indexes'          => array(
                array('User__id')
            )
        ),
        'video_category'   => array(
            'source'          => 'Defined'
        ),
        'view_render'   => array(
            'source'          => 'Defined'
        ),
        'currency' => [
            'source' => 'Defined',
        ],
        'course_format' => [
            'source' => 'Defined',
        ],
        'doctor_statistic_goal' => [
            'source' => 'Defined',
        ],
        'integration_provider' => [
            'source' => 'Defined',
        ],
    )
);