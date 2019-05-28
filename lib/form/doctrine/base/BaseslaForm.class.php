<?php

/**
 * sla form base class.
 *
 * @method sla getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseslaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'conformidade_apurada'           => new sfWidgetFormInputText(),
      'item_sla'                       => new sfWidgetFormInputText(),
      'quantidade_apurada'             => new sfWidgetFormInputText(),
      'tipo'                           => new sfWidgetFormInputText(),
      'fiscalizacao_item_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'), 'add_empty' => false)),
      'fiscalizacao_id'                => new sfWidgetFormInputText(),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'conformidade_apurada'           => new sfValidatorString(array('max_length' => 255)),
      'item_sla'                       => new sfValidatorInteger(),
      'quantidade_apurada'             => new sfValidatorInteger(),
      'tipo'                           => new sfValidatorString(array('max_length' => 100)),
      'fiscalizacao_item_cabecalho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'))),
      'fiscalizacao_id'                => new sfValidatorInteger(),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla';
  }

}
