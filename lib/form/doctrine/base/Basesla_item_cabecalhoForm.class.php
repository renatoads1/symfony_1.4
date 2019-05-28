<?php

/**
 * sla_item_cabecalho form base class.
 *
 * @method sla_item_cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_item_cabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nome'          => new sfWidgetFormTextarea(),
      'cabecalho_pai' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'), 'add_empty' => false)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'          => new sfValidatorString(array('max_length' => 3000)),
      'cabecalho_pai' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'))),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sla_item_cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_item_cabecalho';
  }

}
