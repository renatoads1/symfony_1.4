<?php

/**
 * cabecalho_uf form base class.
 *
 * @method cabecalho_uf getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecabecalho_ufForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'), 'add_empty' => false)),
      'uf_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cabecalho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'))),
      'uf_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cabecalho_uf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'cabecalho_uf';
  }

}
