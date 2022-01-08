<?php

return array(
    'fields' => array(
        'id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Not_Null',
                'Auto_Increment'
            )    
        ),
        'Clinic__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Агентство, предоставляющее скидку'    
            )    
        ),
        'percent_text' => array(
            'Varchar',
            array(
                'Size' => 255,    
                'Comment' => 'Текст перед значением процентов'    
            )    
        ),
        'percent' => array(
            'Text',
            array(
                'Comment' => 'Процент скидки'    
            )    
        ),
        'conditions' => array(
            'Text',
            array(
                'Comment' => 'На что и при каких условиях предоставляется скидка'    
            )    
        ),
        'coupon_text' => array(
            'Text',
            array(
                'Comment' => 'Текст на купоне, дающем право на скидку'    
            )    
        ),
        'finish_date' => array(
            'Date',
            array(
                'Comment' => 'Дата окончания акции (если акция бессрочная, оставлять 0000-00-00)'    
            )    
        ),
        'Clinic_Coupon_Type__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Шаблон купона на данный вид скидки'    
            )    
        ),
        'priority' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Приоритет купона в списке'    
            )    
        ),
        'City__id' => array(
            'Int',
            array(
                'Size' => 11,    
                'Comment' => 'Город'    
            )    
        ),
        'active' => array(
            'Tinyint',
            array(
                'Size' => 1,    
                'Comment' => 'Показ акции'    
            )    
        )
    ),    
    'indexes' => array(
        'id' => array(
            'Primary',
            array(
                'id'        
            )        
        )        
    )
);