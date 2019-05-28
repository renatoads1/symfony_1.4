<?php

/**
 * sla_valores_totais form base class.
 *
 * @method sla_valores_totais getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_valores_totaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'sla_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => false)),
      'mes_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => false)),
      'tipo_manutencao_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => false)),
      'percentual_multa_periodo'           => new sfWidgetFormInputText(),
      'valor_da_multa'                     => new sfWidgetFormInputText(),
      'valor_multa_utilizado_extra_mensal' => new sfWidgetFormInputText(),
      'valor_multa_aplicada'               => new sfWidgetFormInputText(),
      'indice_performance'                 => new sfWidgetFormInputText(),
      'created_at'                         => new sfWidgetFormDateTime(),
      'updated_at'                         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sla_id'                             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'))),
      'mes_id'                             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'))),
      'tipo_manutencao_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'))),
      'percentual_multa_periodo'           => new sfValidatorNumber(),
      'valor_da_multa'                     => new sfValidatorNumber(),
      'valor_multa_utilizado_extra_mensal' => new sfValidatorNumber(array('required' => false)),
      'valor_multa_aplicada'               => new sfValidatorNumber(),
      'indice_performance'                 => new sfValidatorNumber(),
      'created_at'                         => new sfValidatorDateTime(),
      'updated_at'                         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_valores_totais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_valores_totais';
  }

}
