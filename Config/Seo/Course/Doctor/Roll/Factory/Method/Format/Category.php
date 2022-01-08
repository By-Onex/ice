<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов
 * По категории и формату курса.
 * @author d.galdin
 */
return [
    'pageTitle'         => '{$formatTitleMany|mb_ucfirst} {$categoryTitleSpecial}',

    'siteTitle'         => '{$formatTitleMany|mb_ucfirst} {$categoryTitleSpecial} {$currentMonth|upper} {$currentYear}',

    'metaDescription'   => '{$formatTitleMany|mb_ucfirst} {$categoryTitleSpecial} — обучение и повышение квалификации {$unicode.checkMark}'
        . ' стоимость обучения, выдача сертификата — выбирайте один из доступных форматов обучения и бронируйте место онлайн {$unicode.checkMark}',

    'pageDescription' => 'Обучающие {$formatTitleMany|mb_ucfirst} по {$categoryTitleDatv} для стоматологов в {$currentYear}'
        . '{if $minCoursePrice}'
        . ' от {$minCoursePrice}₽'
        . '{/if}'
        . '.'
        . '{if $freeCourseCount}'
        . ' Также на сайте {$freeCourseCount|plural:\'представлен,представлено,представлено\'} {$freeCourseCount} {$freeCourseCount|plural:$freePlural} {$freeCourseCount|plural:$formatPlural}.'
        . '{/if}'
        . ' Обучайтесь новому, повышайте квалификацию, будьте в курсе актуальных тенденций {$categoryTitleGent} в стоматологии.',
];