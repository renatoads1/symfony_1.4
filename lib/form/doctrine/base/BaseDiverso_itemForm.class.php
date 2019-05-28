<?php

/**
 * Diverso_item form base class.
 *
 * @method Diverso_item getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDiverso_itemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'orcamento_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Orcamento'), 'add_empty' => false)),
      'codigo'         => new sfWidgetFormInputText(),
      'descricao'      => new sfWidgetFormTextarea(),
      'unidade'        => new sfWidgetFormInputText(),
      'quantidade'     => new sfWidgetFormInputText(),
      'valor_unitario' => new sfWidgetFormInputText(),
      'valor_total'    => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'orcamento_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Orcamento'))),
      'codigo'         => new sfValidatorString(array('max_length' => 255)),
      'descricao'      => new sfValidatorString(array('max_length' => 4000)),
      'unidade'        => new sfValidatorString(array('max_length' => 255)),
      'quantidade'     => new sfValidatorNumber(array('required' => false)),
      'valor_unitario' => new sfValidatorNumber(array('required' => false)),
      'valor_total'    => new sfValidatorNumber(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('diverso_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Diverso_item';
  }

}
