<?php

/**
 * sfGuardContractAfiliado form base class.
 *
 * @method sfGuardContractAfiliado getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardContractAfiliadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'afiliado_id' => new sfWidgetFormInputHidden(),
      'contract_id' => new sfWidgetFormInputHidden(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'afiliado_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('afiliado_id')), 'empty_value' => $this->getObject()->get('afiliado_id'), 'required' => false)),
      'contract_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('contract_id')), 'empty_value' => $this->getObject()->get('contract_id'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_contract_afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardContractAfiliado';
  }

}
