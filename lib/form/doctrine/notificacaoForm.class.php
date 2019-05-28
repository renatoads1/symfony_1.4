<?php

/**
 * notificacao form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class notificacaoForm extends BasenotificacaoForm
{
  public function configure()
  {

    unset(
        $this['created_at'], $this['updated_at']
    );

 	$this->widgetSchema['arquivo_enviado'] = new sfWidgetFormInputFile(array(
      'label' => 'Foto do local <h6><i>Permitido apenas uma imagem ou arquivo zip com tamanho máximo de 25MB</i></h6>',
      )); 

      $this->validatorSchema['arquivo_enviado'] = new sfValidatorFile(array(
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/notificacoes',
      'mime_types' => array('application/pdf'),
      'max_size' => '25000000', 
      ), array(
      'mime_types' => '<p class="text-danger">Tipo de arquivo não permitido</p> ',
      'max_size' => '<p class="text-danger">Arquivo muito grande (Máximo de 25MB).</p>',
       ));


  }
}
