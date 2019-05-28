<?php

/**
 * Orcamento form base class.
 *
 * @method Orcamento getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrcamentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'controle_id'      => new sfWidgetFormInputText(),
      'responsavel'      => new sfWidgetFormInputText(),
      'subtotalGeral'    => new sfWidgetFormInputText(),
      'subtotalMaterial' => new sfWidgetFormInputText(),
      'subtotalDiversos' => new sfWidgetFormInputText(),
      'subtotal20'       => new sfWidgetFormInputText(),
      'subtotalPini'     => new sfWidgetFormInputText(),
      'subtotalPiniBdi'  => new sfWidgetFormInputText(),
      'total'            => new sfWidgetFormInputText(),
      'anexo'            => new sfWidgetFormInputText(),
      'informacao'       => new sfWidgetFormInputText(),
      'observacao'       => new sfWidgetFormTextarea(),
      'usuario'          => new sfWidgetFormInputText(),
      'data_hora'        => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'edicao'           => new sfWidgetFormInputCheckbox(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'controle_id'      => new sfValidatorInteger(),
      'responsavel'      => new sfValidatorString(array('max_length' => 255)),
      'subtotalGeral'    => new sfValidatorNumber(array('required' => false)),
      'subtotalMaterial' => new sfValidatorNumber(array('required' => false)),
      'subtotalDiversos' => new sfValidatorNumber(array('required' => false)),
      'subtotal20'       => new sfValidatorNumber(array('required' => false)),
      'subtotalPini'     => new sfValidatorNumber(array('required' => false)),
      'subtotalPiniBdi'  => new sfValidatorNumber(array('required' => false)),
      'total'            => new sfValidatorNumber(),
      'anexo'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'informacao'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'observacao'       => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'usuario'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'data_hora'        => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'edicao'           => new sfValidatorBoolean(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('orcamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orcamento';
  }

}
