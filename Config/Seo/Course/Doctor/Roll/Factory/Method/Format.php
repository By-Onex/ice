<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов.
 * По формату курса.
 * @author d.galdin
 */
return [
    'pageTitle' => '{$formatMany|mb_ucfirst} по стоматологии',

    'siteTitle' => '{$formatMany|mb_ucfirst} по стоматологии {$currentMonth|upper} {$currentYear}',

    'metaDescription' => '{$courseCount} {$courseCount|plural:$formatPlural} по стоматологии — обучение'
        . ' для стоматологов и повышение квалификации {$unicode.checkMark} стоимость обучения, выдача сертификата'
        . ' {$unicode.checkMark}',

    'pageDescription' => '{$formatMany|mb_ucfirst} для повышения квалификации и обучения стоматологов'
        . '{if $minCoursePrice}'
        . ' от {$minCoursePrice}₽'
        . '{/if}'
        . '.'
        . '{if $freeCourseCount}'
        . ' Также на сайте {$freeCourseCount|plural:\'представлен,представлено,представлено\'} {$freeCourseCount} {$freeCourseCount|plural:$freePlural} {$freeCourseCount|plural:$formatPlural}.'
        . '{/if}'
        . ' Обучайтесь онлайн или офлайн, обменивайтесь профессиональным опытом с коллегами, записывайтесь, чтобы не пропустить.'
        . '{if $closestDate}'
        . ' Ближайшее мероприятие {$closestDate}.'
        . '{/if}',
];