<?php

/**
 * tipo_preventiva_uf form base class.
 *
 * @method tipo_preventiva_uf getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basetipo_preventiva_ufForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'tipo_preventiva_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tipo_preventiva'), 'add_empty' => false)),
      'uf_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => false)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo_preventiva_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('tipo_preventiva'))),
      'uf_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tipo_preventiva_uf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'tipo_preventiva_uf';
  }

}
