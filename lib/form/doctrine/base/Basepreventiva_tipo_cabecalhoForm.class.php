<?php

/**
 * preventiva_tipo_cabecalho form base class.
 *
 * @method preventiva_tipo_cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basepreventiva_tipo_cabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'cabecalho_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'), 'add_empty' => false)),
      'preventiva_tipo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => false)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cabecalho_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'))),
      'preventiva_tipo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'))),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('preventiva_tipo_cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'preventiva_tipo_cabecalho';
  }

}
