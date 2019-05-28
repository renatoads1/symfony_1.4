<?php

/**
 * sla_financeiro form base class.
 *
 * @method sla_financeiro getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_financeiroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'filial_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => false)),
      'fornecedor_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'), 'add_empty' => false)),
      'ano'                => new sfWidgetFormInputText(),
      'fop_responsavel_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filial_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'))),
      'fornecedor_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'))),
      'ano'                => new sfValidatorInteger(),
      'fop_responsavel_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_financeiro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_financeiro';
  }

}
