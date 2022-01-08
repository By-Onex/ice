/**
 * Created by merrooy on 14.06.18.
 */

var Helper_Modal = {
    openForm: function (selector, selectorToOpenAfterClose, afterCloseCallback=null) {
        setTimeout(function() {
            $('html').addClass('overHidden');
            selector.removeClass('hidden');
            selector.addClass('opened');
        }, 200);
        $(document).bind('mousedown', (event) => {
            let modalWindowContainer = selector.find('.popup-form:first');
            if (
                !modalWindowContainer.is(event.target)
                && !modalWindowContainer.has(event.target).length
                && !this.checkTargetInModalVex(event)
            ) {
                this.closeForm(selector);
                if (afterCloseCallback) {
                    afterCloseCallback();
                }
                if (selectorToOpenAfterClose) {
                    this.openForm(selectorToOpenAfterClose);
                }
            }
        });
        $('.popup-close').bind('click', () => {
            this.closeForm(selector);
            if (selectorToOpenAfterClose) {
                this.openForm(selectorToOpenAfterClose);
            }
            if (afterCloseCallback) {
                afterCloseCallback();
            }
        })
    },

    closeForm: function (selector, selectorToOpenAfterClose) {
        selector.removeClass('opened');
        $(document).unbind('mousedown');
        $('.popup-close').unbind('click');
        setTimeout(() => {
            selector.addClass('hidden');
            $('html').removeClass('overHidden');
            if (selectorToOpenAfterClose) {
                this.openForm(selectorToOpenAfterClose);
                selector.removeClass('opened');
            }
        }, 200);

    },

    /**
     * Паллитив для предотвращения закрытия модального окна при закрытии vex.
     *
     * @description Цель события находится внутри DOM модального окна Vex.
     *
     * @param {Event} event Событие.
     *
     * @returns {boolean}
     */
    checkTargetInModalVex(event) {
        let target = $(event.target);
        return !!(
               target.closest('.vex').length
            || target.closest('.vex-overlay').length
        );

    }
};