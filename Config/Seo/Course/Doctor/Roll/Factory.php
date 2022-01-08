<?php
return [
    'unicode' => [  // Фигурные символы и юникод
        'checkMark' => '✓',
    ],
    'courseFormats' => [  // склонения форматов
        Course_Format::ID_SEMINAR => [
            'many' => 'семинары',
            'plural' => 'семинар,семинара,семинаров',
        ],
        Course_Format::ID_WEBINAR => [
            'many' => 'вебинары',
            'plural' => 'вебинар,вебинара,вебинаров',
        ],
        Course_Format::ID_MASTER_CLASS => [
            'many' => 'мастер-классы',
            'plural' => 'мастер-класс,мастер-класса,мастер-классов'
        ],
    ],
    'courseDoctorCategories' => [  // склонения категорий курсов
        Course_Doctor_Category::ID_THERAPY => [
            'datv' => 'терапевтической стоматологии',
            'gent' => 'терапевтической стоматологии',
        ],
        Course_Doctor_Category::ID_SURGERY => [
            'datv' => 'хирургической стоматологии',
            'gent' => 'хирургической стоматологии',
        ],
        Course_Doctor_Category::ID_ORTHODONTICS => [
            'datv' => 'ортодонтии',
            'gent' => 'ортодонтии',
        ],
        Course_Doctor_Category::ID_ORTHOPEDICS => [
            'datv' => 'ортопедии',
            'gent' => 'ортопедии',
        ],
        Course_Doctor_Category::ID_IMPLANTOLOGY => [
            'datv' => 'имплантации зубов',
            'gent' => 'имплантации зубов',
        ],
        Course_Doctor_Category::ID_PERIODONTICS => [
            'datv' => 'пародонтологии',
            'gent' => 'пародонтологии',
        ],
        Course_Doctor_Category::ID_CHILD_DENTISTRY => [
            'datv' => 'детской стоматологии',
            'gent' => 'детской стоматологии',
        ],
        Course_Doctor_Category::ID_ENDODONTICS => [
            'datv' => 'эндодонтии',
            'gent' => 'эндодонтии',
        ],
        Course_Doctor_Category::ID_MAXILLOFACIAL_SURGERY => [
            'datv' => 'челюстно-лицевой хирургии',
            'gent' => 'челюстно-лицевой хирургии',
        ],
        Course_Doctor_Category::ID_GNATHOLOGY => [
            'datv' => 'гнатологии',
            'gent' => 'гнатологии',
        ],
        Course_Doctor_Category::ID_HYGIENE => [
            'datv' => 'гигиене полости рта',
            'gent' => 'гигиены полости рта',
        ],
        Course_Doctor_Category::ID_RESTORATIVE => [
            'datv' => 'реставрации зубов',
            'gent' => 'реставрации зубов',
        ],
        Course_Doctor_Category::ID_DENTAL_MARKETING => [
            'datv' => 'маркетингу',
            'gent' => 'маркетинга',
        ],
        Course_Doctor_Category::ID_MANAGEMENT => [
            'datv' => 'управлению стоматологией',
            'gent' => 'управления стоматологией',
        ],
    ],
    'free' => [
        'plural' => 'бесплатный,бесплатных,бесплатных'
    ],
];