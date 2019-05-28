<?php

/**
 * sla_evidencia form base class.
 *
 * @method sla_evidencia getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_evidenciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'sla_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => false)),
      'mes_referencia'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => false)),
      'nao_conformidade'   => new sfWidgetFormTextarea(),
      'item_sla_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'), 'add_empty' => false)),
      'unidade_medicao'    => new sfWidgetFormInputText(),
      'quantidade_apurada' => new sfWidgetFormInputText(),
      'observacoes'        => new sfWidgetFormTextarea(),
      'evidencias'         => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sla_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'))),
      'mes_referencia'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'))),
      'nao_conformidade'   => new sfValidatorString(array('max_length' => 4000)),
      'item_sla_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'))),
      'unidade_medicao'    => new sfValidatorString(array('max_length' => 100)),
      'quantidade_apurada' => new sfValidatorInteger(),
      'observacoes'        => new sfValidatorString(array('max_length' => 4000)),
      'evidencias'         => new sfValidatorString(array('max_length' => 4000)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_evidencia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_evidencia';
  }

}
