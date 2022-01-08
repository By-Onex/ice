<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов
 * По-умолчанию.
 * @author d.galdin
 */
return [
    'pageTitle' => 'Курсы по стоматологии',

    'siteTitle' => '{$courseCount} {$courseCount|plural:\'учебный курс,учебных курса,учебных курсов\'} по стоматологии {$currentMonth|upper} {$currentYear}',

    'metaDescription' => 'Лучшие курсы по стоматологии — обучение для стоматологов и повышение квалификации'
        . ' {$unicode.checkMark} стоимость обучения, выдача сертификата {$unicode.checkMark} Выбирайте один из'
        . ' форматов обучения и бронируйте место онлайн {$unicode.checkMark}',

    'pageDescription' => '{$courseCount} {$courseCount|plural:\'проверенный курс,проверенных курса,проверенных курсов\'} для стоматологов'
        . '{if !$minCoursePrice}'
        . ' от {$minCoursePrice}₽'
        . '{/if}'
        . '.'
        . ' {$formatCount} {$formatCount|plural:\'формат,формата,форматов\'} и {$categoryCount} {$categoryCount|plural:\'направление,направления,направлений\'} обучения, онлайн и офлайн, разной продолжительности.'
        . '{if $freeCourseCount}'
        . ' Также на сайте {$freeCourseCount|plural:\'представлен,представлено,представлено\'} {$freeCourseCount} {$freeCourseCount|plural:\'бесплатный курс,бесплатных курса,бесплатных курсов\'}.'
        . '{/if}'
        . ' Выбирайте подходящие курсы с помощью фильтров и записывайтесь, чтобы повысить квалификацию и стать востребованным специалистом.'
        . '{if $closestDate}'
        . ' Ближайшее мероприятие {$closestDate}.'
        . '{/if}',
];