<?php

/**
 * sla_apuracao form base class.
 *
 * @method sla_apuracao getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_apuracaoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'sla_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => false)),
      'item_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'), 'add_empty' => false)),
      'mes_referencia'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => false)),
      'quantidade_nao_conformidade' => new sfWidgetFormInputText(),
      'pontuacao_alcancada'         => new sfWidgetFormInputText(),
      'porcentagem_multa'           => new sfWidgetFormInputText(),
      'created_at'                  => new sfWidgetFormDateTime(),
      'updated_at'                  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sla_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'))),
      'item_id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'))),
      'mes_referencia'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'))),
      'quantidade_nao_conformidade' => new sfValidatorInteger(),
      'pontuacao_alcancada'         => new sfValidatorNumber(),
      'porcentagem_multa'           => new sfValidatorNumber(),
      'created_at'                  => new sfValidatorDateTime(),
      'updated_at'                  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_apuracao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_apuracao';
  }

}
