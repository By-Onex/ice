var Helper_Input = {
	/**
	 * Проверка введенных данных
	 *
	 * @param {jquery} $input Элемент
	 * @param {string} error_class
	 * 		Класс, который будет присвоен элементу, если допущена ошибка.
	 * 		По умолчанию "err"
	 */
	check: function ($input, error_class = 'err') {
		if (!$input.length) {
			return true;
		}
		let result = true;
		if ($input.length > 1) {
			$input.each (function () {
				if (!Helper_Input.check($(this))) {
					result = false;
				}
			});
			return result;
		}
		let empty_text = $input.attr('placeholder');
		let value = $input.val();
		if (empty_text && value === empty_text) {
			value = "";
		}
		// емейл
		if ($input.hasClass ('input_email')) {
			result = Helper_Input.checkEmail(value);
		}
		// обязательное поле
		if ($input.hasClass('input_required')) {
			result = result && Helper_Input.checkRequired(value);
		}
		if ($input.hasClass('input_phone')) {
			result = result && Helper_Phone.purify(value);
		}
		if (result) {
			$input.removeClass(error_class);
		} else {
			$input.addClass(error_class);
		}
		return result;
	},

	/**
	 * Проверка корректности электронного адреса.
	 * @param email
	 * @returns {Boolean}
	 */
	checkEmail: function (email) {
		if (!email.length) {
			return true;
		}
		let p_at = email.indexOf('@');
		if (p_at < 0) {
			return false;
		}
		let p_dot = email.indexOf ('.', p_at);
		return !(p_dot < 0 || p_dot === email.length - 1);
	},

	/**
	 * Проверка корректности телефонного номера.
	 * В номере должны быть только цифры и пробелы и длина отличной от 1.
	 * @param {string} phone
	 * @returns {Boolean}
	 */
	checkPhone: function (phone) {
		return !(/[^0-9\s]/.test(phone)) && phone.length > 1;
	},

	/**
	 * Проверка обязательного поля.
	 * @param value
	 * @returns {Boolean}
	 */
	checkRequired: function (value) {
		return value.length > 0;
	}
};