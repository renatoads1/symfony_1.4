<?php

/**
 * fiscalizacao form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fiscalizacaoForm extends BasefiscalizacaoForm
{
  public function configure()
  {
  	unset(
      $this['created_at'],$this['updated_at']
    );

   //Validacao base predial
    $this->widgetSchema['base_predial_id'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('base_predial')->getTypes(),
      'expanded' => true,
    ));

    $this->validatorSchema['base_predial_id'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('base_predial')->getTypes()),   
      'required' => true,
    ));

   //Validacao contrato
    $this->widgetSchema['contract_id'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('sfGuardContract')->getTypes(),
      'expanded' => true,
    ));

    $this->validatorSchema['contract_id'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('sfGuardContract')->getTypes()),   
      'required' => true,
    ));

  //Validacao usuario
    $this->widgetSchema['user_id'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('sfGuardUser')->getTypes(),
      'expanded' => true,
    ));

    $this->validatorSchema['user_id'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('sfGuardUser')->getTypes()),   
      'required' => true,
    ));

	
  //Validacao relatorio fotografico
  	$this->widgetSchema['relatorio_fotografico'] = new sfWidgetFormInputFile(array(
      'label' => 'Informações complementares <h6><i>Permitido arquivos .xlsx, .rar e .zip com tamanho máximo de 25MB</i></h6>',
    ));

    $this->validatorSchema['relatorio_fotografico'] = new sfValidatorFile(array(
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/fiscalizacao',
      'mime_types' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/x-gzip', 'application/x-rar'),
    ), array(
      'mime_types' => 'Tipo de arquivo não permitido ',
      'max_size' => 'Arquivo muito grande (Máximo de 25MB).',
    ));

  
  //Validacao data da fiscalizacao
    $this->widgetSchema['data_de_execucao'] = new sfWidgetFormDateTime();
    $this->validatorSchema['data_de_execucao'] = new sfValidatorDateTime();

  //Validacao da data inserida - nao pode ser uma data invalida
    $this->mergePostValidator(new sfValidatorCallback(array('callback' => 'checkDataFiscalizacao'), array('invalid' => 'Incorrect current data.')));

    function checkDataFiscalizacao($validator, $values, $arguments){

	    $data_hora = explode(" ", $values['data_de_execucao']);
	    $data = explode("-", $data_hora[0]);
	    $d = intval($data[2]);
	    $m = intval($data[1]);
	    $y = intval($data[0]);
	    $res = checkdate($m, $d, $y);

	    if($res != 1){
	      throw new sfValidatorErrorSchema($validator, array('data_de_execucao' => new sfValidatorError($validator, 'Data inválida')));
	    }

	    return $values; 
    }


  //Validacao nota da estacao - nota tem que ser de 0 a 10
   $this->mergePostValidator(new sfValidatorCallback(array('callback' => 'checkNotaEstacao'), array('invalid' => 'Incorrect current data.')));

    function checkNotaEstacao($validator, $values, $arguments){

      if($values['nota_estacao'] < 0 || $values['nota_estacao'] > 10){
        throw new sfValidatorErrorSchema($validator, array('nota_estacao' => new sfValidatorError($validator, 'Nota da estação inválida')));
      }

      return $values; 
    }

  }
}
