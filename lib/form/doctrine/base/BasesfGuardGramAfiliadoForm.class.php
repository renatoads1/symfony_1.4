<?php

/**
 * sfGuardGramAfiliado form base class.
 *
 * @method sfGuardGramAfiliado getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardGramAfiliadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'afiliado_id' => new sfWidgetFormInputHidden(),
      'gram_id'     => new sfWidgetFormInputHidden(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'afiliado_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('afiliado_id')), 'empty_value' => $this->getObject()->get('afiliado_id'), 'required' => false)),
      'gram_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gram_id')), 'empty_value' => $this->getObject()->get('gram_id'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_gram_afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardGramAfiliado';
  }

}
