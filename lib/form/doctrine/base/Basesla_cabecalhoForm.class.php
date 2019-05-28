<?php

/**
 * sla_cabecalho form base class.
 *
 * @method sla_cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_cabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nome'               => new sfWidgetFormTextarea(),
      'tipo_manutencao_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => false)),
      'deducao'            => new sfWidgetFormInputText(),
      'texto_pontuacao'    => new sfWidgetFormTextarea(),
      'texto_calculo'      => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'               => new sfValidatorString(array('max_length' => 3000)),
      'tipo_manutencao_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'))),
      'deducao'            => new sfValidatorNumber(),
      'texto_pontuacao'    => new sfValidatorString(array('max_length' => 1000)),
      'texto_calculo'      => new sfValidatorString(array('max_length' => 1000)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_cabecalho';
  }

}
