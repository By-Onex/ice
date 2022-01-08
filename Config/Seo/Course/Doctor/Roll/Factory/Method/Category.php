<?php
/**
 * Смарти-шаблоны для фабричных методов фабрики сео-компонентов на списке курсов
 * По категории курса.
 * @author d.galdin
 */
return [
    'pageTitle'         => '{$titleForPageTitle}',

    'siteTitle'         => '{$courseCount} {$courseCount|plural:\'курс,курса,курсов\'} {$titleForSiteTitle}'
        . ' {$currentMonth|upper} {$currentYear}',

    'metaDescription'   => 'Курсы {$titleForMetaDescription} — обучение для стоматологов и повышение квалификации {$unicode.checkMark}'
        . ' стоимость обучения, выдача сертификата — выбирайте один из доступных форматов обучения и бронируйте место онлайн {$unicode.checkMark}',

    'pageDescription' => 'Все курсы по {$titleDatv}'
        . '{if $minCoursePrice}'
        . ' от {$minCoursePrice}₽'
        . '{/if}'
        . ' для стоматологов и владельцев клиник.'
        . ' Пополняйте знания, обменивайтесь опытом с коллегами, повышайте квалификацию и будьте в курсе актуальных тенденций {$titleForPageDescription}.'
        . '{if $freeCourseCount}'
        . ' Также на сайте {$freeCourseCount|plural:\'представлен,представлено,представлено\'} {$freeCourseCount} {$freeCourseCount|plural:\'бесплатный курс,бесплатных курса,бесплатных курсов\'}.'
        . '{/if}'
        . '{if $closestDate}'
        . ' Ближайшее мероприятие {$closestDate}.'
        . '{/if}',
];