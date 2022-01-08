<?php

/**
 * Пакует в контроллер Static_Js_Time_Rebuild время пересборки
 *
 * @author markov
 */
class Controller_Static_Js_Time_Rebuild extends Controller_Abstract
{
    /**
	 * @inheritdoc
	 */
	protected $config = array(
		'target_file'	=> '{$root}cache/resource/staticJsTimeRebuild.js'
	);
    
	/**
	 * Упаковывает время пересборки
	 */
	public function toFile($context)
	{
		$this->task->setTemplate(null);
		$filename = strtr(
			$this->config()->target_file,
			array(
				'{$root}'		=> IcEngine::root()
			)
		);
		$dir = dirname($filename);
		if (!is_dir($dir)) {
			mkdir($dir, 0750, true);
		}
        $time = microtime();
        $time = str_replace(' ', '_', $time);
		$code = 'var Static_Js_Time_Rebuild = { get: function() { return \'' .
        $time . '\'; } };';
		file_put_contents($filename, $code);
	}
}
