<?php

/**
 * fiscalizacao_item_checklist form base class.
 *
 * @method fiscalizacao_item_checklist getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_item_checklistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'fiscalizacao_id'                => new sfWidgetFormInputText(),
      'fiscalizacao_item_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'), 'add_empty' => false)),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fiscalizacao_id'                => new sfValidatorInteger(),
      'fiscalizacao_item_cabecalho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'))),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('fiscalizacao_item_checklist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fiscalizacao_item_checklist';
  }

}
