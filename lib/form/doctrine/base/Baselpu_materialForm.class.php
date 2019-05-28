<?php

/**
 * lpu_material form base class.
 *
 * @method lpu_material getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Baselpu_materialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'codigo'        => new sfWidgetFormInputText(),
      'especificacao' => new sfWidgetFormTextarea(),
      'unidade'       => new sfWidgetFormInputText(),
      'valor'         => new sfWidgetFormInputText(),
      'estado'        => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 255)),
      'especificacao' => new sfValidatorString(array('max_length' => 4000)),
      'unidade'       => new sfValidatorString(array('max_length' => 255)),
      'valor'         => new sfValidatorNumber(),
      'estado'        => new sfValidatorString(array('max_length' => 255)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('lpu_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'lpu_material';
  }

}
