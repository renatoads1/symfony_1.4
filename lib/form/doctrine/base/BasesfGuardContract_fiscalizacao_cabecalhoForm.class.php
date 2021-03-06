<?php

/**
 * sfGuardContract_fiscalizacao_cabecalho form base class.
 *
 * @method sfGuardContract_fiscalizacao_cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardContract_fiscalizacao_cabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'contract_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardContract'), 'add_empty' => false)),
      'fiscalizacao_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_cabecalho'), 'add_empty' => false)),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'contract_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardContract'))),
      'fiscalizacao_cabecalho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_cabecalho'))),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_contract_fiscalizacao_cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardContract_fiscalizacao_cabecalho';
  }

}
