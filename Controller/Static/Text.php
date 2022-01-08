<?php

/**
 *  @author markov
 */
class Controller_Static_Text extends Controller_Abstract
{
	protected $config = array(
        'modes' => array(
            'main'      => 'Main_Text',
            'contacts'  => 'Advertis'
        )
    ); 
    
	/**
	 * @Route(
     *     "/admin/staticText/{$mode}/",
     *     "components"={
     *         "mode"={
     *             "pattern"="([a-zA-Z]+)" 
     *         } 
     *     },
     *     "weight"=10
     * )
     * @Context("city", "helperHeader")
     * @Template(null)
	 */
	public function index($mode, $context)
	{
        $config = $this->config();
        if (!isset($config->modes[$mode])) {
            return $this->replaceAction('Error', 'notFound');
        }
        $cityId = $context->city->id(); 
        $model = $context->modelManager->byOptions($config->modes[$mode], array(
            'name'  => '::City',
            'id'    => $cityId
        ));
        if (!$model) {
            return $this->replaceAction('Error', 'notFound');
        }
        $link = '/cp/row/' . $config->modes[$mode] . '/' . $model->key() . '/';
        $context->helperHeader->redirect($link);
        return;
	}
}