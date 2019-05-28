<?php

/**
 * contrato_fornecedor form base class.
 *
 * @method contrato_fornecedor getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecontrato_fornecedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'numero_contrato'    => new sfWidgetFormInputText(),
      'filial_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => false)),
      'fornecedor_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'), 'add_empty' => false)),
      'tipo_manutencao_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => true)),
      'valor_mensal'       => new sfWidgetFormInputText(),
      'ano_referencia'     => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'numero_contrato'    => new sfValidatorInteger(array('required' => false)),
      'filial_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'))),
      'fornecedor_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'))),
      'tipo_manutencao_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'required' => false)),
      'valor_mensal'       => new sfValidatorNumber(),
      'ano_referencia'     => new sfValidatorInteger(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('contrato_fornecedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'contrato_fornecedor';
  }

}
