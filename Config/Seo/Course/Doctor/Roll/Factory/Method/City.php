<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов
 * По городу проведения.
 * @author d.galdin
 */
return [
    'pageTitle'         => 'Курсы по стоматологии в {$cityName|declensions:"loct"}',

    'siteTitle'         => '{$courseCount} {$courseCount|plural:\'курс,курса,курсов\'} для стоматологов в'
        . ' {$cityName|declensions:"loct"} {$currentMonth|upper} {$currentYear}',

    'metaDescription'   => 'Курсы по стоматологии в {$cityName|declensions:"loct"} — обучение для стоматологов и повышение квалификации {$unicode.checkMark}'
        . ' стоимость обучения, выдача сертификата {$unicode.checkMark}'
        . ' Выбирайте один из доступных форматов обучения в {$cityName|declensions:\'loct\'} и бронируйте место онлайн {$unicode.checkMark}',

    'pageDescription'   => 'Актуальное обучение для стоматологов в {$cityName|declensions:"loct"}'
        . '{if $minCoursePrice}'
        . ' от {$minCoursePrice}₽'
        . '{/if}'
        . '.'
        . '{if $freeCourseCount}'
        . ' Также на сайте {$freeCourseCount|plural:\'представлен,представлено,представлено\'} {$freeCourseCount} {$freeCourseCount|plural:\'бесплатный курс,бесплатных курса,бесплатных курсов\'}.'
        . ' Выбирайте подходящий формат, направление и время обучения.'
        . '{/if}'
        . ' Пополняйте знания и повышайте квалификацию.',
];