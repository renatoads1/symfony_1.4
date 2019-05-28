<?php

/**
 * Vinculacao form base class.
 *
 * @method Vinculacao getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVinculacaoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'preventiva_pai'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Preventiva_pai'), 'add_empty' => false)),
      'preventiva_filho' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Preventiva'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'preventiva_pai'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Preventiva_pai'))),
      'preventiva_filho' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Preventiva'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('vinculacao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vinculacao';
  }

}
