<?php

/**
 * Pini form base class.
 *
 * @method Pini getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePiniForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'cod_pini'   => new sfWidgetFormInputText(),
      'descricao'  => new sfWidgetFormTextarea(),
      'classe'     => new sfWidgetFormInputText(),
      'unidade'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cod_pini'   => new sfValidatorString(array('max_length' => 255)),
      'descricao'  => new sfValidatorString(array('max_length' => 4000)),
      'classe'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'unidade'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Pini', 'column' => array('cod_pini')))
    );

    $this->widgetSchema->setNameFormat('pini[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pini';
  }

}
