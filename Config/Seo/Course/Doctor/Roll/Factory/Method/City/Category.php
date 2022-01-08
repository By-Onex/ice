<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов
 * По городу и категории курса.
 * @author d.galdin
 */
return [
    'pageTitle'         => 'Курсы по {$categoryTitleDatv} в {$cityName|declensions:\'loct\'}',

    'siteTitle'         => '{$courseCount} {$courseCount|plural:\'курс,курса,курсов\'} по {$categoryTitleDatv} в {$cityName|declensions:\'loct\'} {$currentMonth|upper} {$currentYear}',

    // Здесь про Москву ввиду того что стратегия работает только для Москвы.
    'metaDescription'   => 'Курсы по {$categoryTitleDatv} в Москве и Московской области — обучение и повышение квалификации {$unicode.checkMark}'
        . ' стоимость обучения, выдача сертификата — выбирайте один из доступных форматов обучения и бронируйте место онлайн {$unicode.checkMark}',

    'pageDescription' => '{$courseCount} {$courseCount|plural:\'проверенный курс,проверенных курса,проверенных курсов\'} для стоматологов'
        . '{if $minCoursePrice}'
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