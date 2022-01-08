/**
 * Строитель url
 */
var Helper_Url_Builder = {
    newInstance: function() {
        return {
            data: {
                host: '',
                gets: {},
                hash: ''
            },

            /**
             * Устанавливает url
             */
            setUrl: function(url) {
                let uriSplited = url.split('#');
                if (uriSplited[1] !== undefined) {
                    this.data.hash = uriSplited[1];
                }
                let uriSplited2 = uriSplited[0].split('?');
                this.data.host = uriSplited2[0];
                if (uriSplited2[1] !== undefined) {
                    this.data.gets = this.parseGets(uriSplited2[1]);
                }
            },
            
            /**
             * Парсятся get параметры
             */
            parseGets: function(text) {
                let result = {};
                let textSplited = text.split('&');
                for (let i in textSplited) {
                    let get = textSplited[i].split('=');
                    let getName = get[0];
                    let getValue = get[1] !== undefined
                        ? get[1]
                        : 1;
                    if (getName.slice(-2) === '[]') {
                        let getNameArray = getName.slice(0, getName.length-2);
                        if (result[getNameArray] === undefined) {
                            result[getNameArray] = [];
                        }
                        result[getNameArray].push(getValue);
                    } else {
                        result[getName] = getValue;
                    }
                }
                return result;
            },
            
            /**
             * Устанавливает параметр Get
             */
            setGetParam: function(name, value) {
                this.data.gets[name] = value;
            },
            
            /**
             * Удаляет параметр get
             */
            removeGetParam: function(name) {
                if (this.data.gets[name] !== undefined) {
                    delete this.data.gets[name];
                }
            }, 
            
            /**
             * Удаляет все параметры get
             */
            clearGetParams: function() {
                this.data.gets = [];
            },
            
            /**
             * Собираются в строку get параметры
             */
            getsFormat: function() {
                console.log(this.data.gets);
                let result = '?';
                if (this.data.gets.length === 0) {
                    return '';
                }
                for (let i in this.data.gets) {
                    let get = this.data.gets[i];
                    if (typeof get === 'Array' || typeof get === 'object') {
                        for (let j in get) {
                            result += i + '[]=' + get[j] + '&';
                        }
                    } else {
                        result += i + '=' +  get + '&';
                    }
                }
                return result;
            },
            
            /**
             * Возвращает url
             */
            getUrl: function() {
                let url = this.data.host + this.getsFormat();
                return this.data.hash
                    ? `${url}#${this.data.hash}`
                    : url;
            }
        };
    }
};

/**
 * Помощник по работе с url
 * 
 * @author markov
 */
var Helper_Url = {
    /**
     * Создает url
     */
    createBuilder: function(url) {
        if (url === undefined) {
            url = location.href;
        }
        let builder = Helper_Url_Builder.newInstance();
        builder.setUrl(url);
        return builder;
    },

    /**
     * проверка урл на валидность
     *
     * @param {String} url - урл
     */
    isValid: function (url) {
        try {
            new URL(url);
        } catch (_) {
            return false;
        }
        return true;
    }
};