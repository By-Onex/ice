<?php

/**
 *  option for 
 */
class Model_Option_IU_User extends Model_Option
{
	/**
	 * @inheritdoc
	 */
	public function after()
	{

	}

	/**
	 * @inheritdoc
	 */
	public function before()
	{
		$this->query->where('IU_User__id', $this->params['User']);
	}
}