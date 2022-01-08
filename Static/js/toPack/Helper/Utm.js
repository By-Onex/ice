/**
 * помошник для работы с утм метками
 */
var Helper_Utm = {

    /**
     * доваляет utm к ссылке
     *
     * @param link - ссылка
     * @param utm - метка ()
     *
     * @return string
     */
    addUtm: function (link, utm) {
        if (typeof utm == 'undefined' || !link) {
            return link;
        }
        if (utm[0] != '?') {
            if (utm[0] == '&') {
                utm[0] = '?';
            } else {
                utm = '?' + utm;
            }
        }
        var resultLink,
            reg = /([^#]+)(#.*)?/i;
        if (link.indexOf('/redirect/?to=') != -1) {
            resultLink = link + encodeURIComponent(utm);
        } else {
            if (link.indexOf('?') != -1) {
                utm = utm.replace('?', '&');
            }
            resultLink = reg.exec(link);
            resultLink = resultLink[1] + utm + (resultLink[2] ? resultLink[2] : '');
        }
        return resultLink;
    }
};
