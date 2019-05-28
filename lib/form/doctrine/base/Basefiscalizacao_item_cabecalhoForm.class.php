<?php

/**
 * fiscalizacao_item_cabecalho form base class.
 *
 * @method fiscalizacao_item_cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_item_cabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'fiscalizacao_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_cabecalho'), 'add_empty' => false)),
      'nome'                      => new sfWidgetFormInputText(),
      'tipo_avaliacao_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tipo_avaliacao'), 'add_empty' => false)),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fiscalizacao_cabecalho_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_cabecalho'))),
      'nome'                      => new sfValidatorString(array('max_length' => 255)),
      'tipo_avaliacao_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('tipo_avaliacao'))),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('fiscalizacao_item_cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fiscalizacao_item_cabecalho';
  }

}
