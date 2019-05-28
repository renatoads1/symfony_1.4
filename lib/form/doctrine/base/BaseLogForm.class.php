<?php

/**
 * Log form base class.
 *
 * @method Log getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'chamado_id'           => new sfWidgetFormInputText(),
      'data_hora'            => new sfWidgetFormInputText(),
      'acao'                 => new sfWidgetFormInputText(),
      'usuario'              => new sfWidgetFormInputText(),
      'grupo'                => new sfWidgetFormInputText(),
      'justificativa_status' => new sfWidgetFormInputText(),
      'estado'               => new sfWidgetFormInputText(),
      'gram'                 => new sfWidgetFormInputText(),
      'gram_atendimento'     => new sfWidgetFormInputText(),
      'contrato'             => new sfWidgetFormInputText(),
      'data_hora_saida'      => new sfWidgetFormInputText(),
      'tipo_de_servico'      => new sfWidgetFormInputText(),
      'manutencao'           => new sfWidgetFormInputText(),
      'prioridade'           => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'chamado_id'           => new sfValidatorInteger(array('required' => false)),
      'data_hora'            => new sfValidatorPass(array('required' => false)),
      'acao'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'usuario'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'grupo'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'justificativa_status' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'gram'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gram_atendimento'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contrato'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'data_hora_saida'      => new sfValidatorPass(array('required' => false)),
      'tipo_de_servico'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'manutencao'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prioridade'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

}
