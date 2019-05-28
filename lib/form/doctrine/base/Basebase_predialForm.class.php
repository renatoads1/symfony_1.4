<?php

/**
 * base_predial form base class.
 *
 * @method base_predial getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basebase_predialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_predio'        => new sfWidgetFormInputText(),
      'endereco'         => new sfWidgetFormTextarea(),
      'estado'           => new sfWidgetFormInputText(),
      'cidade'           => new sfWidgetFormInputText(),
      'sigla'            => new sfWidgetFormInputText(),
      'tipo_imovel'      => new sfWidgetFormInputText(),
      'codigo_imovel'    => new sfWidgetFormInputText(),
      'categoria'        => new sfWidgetFormInputText(),
      'gram'             => new sfWidgetFormInputText(),
      'gram_atendimento' => new sfWidgetFormInputText(),
      'regiao'           => new sfWidgetFormInputText(),
      'flag'             => new sfWidgetFormInputText(),
      'ativado'          => new sfWidgetFormInputCheckbox(),
      'contrato'         => new sfWidgetFormInputText(),
      'regional'         => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_predio'        => new sfValidatorInteger(),
      'endereco'         => new sfValidatorString(array('max_length' => 4000)),
      'estado'           => new sfValidatorString(array('max_length' => 2)),
      'cidade'           => new sfValidatorString(array('max_length' => 255)),
      'sigla'            => new sfValidatorString(array('max_length' => 255)),
      'tipo_imovel'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'codigo_imovel'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'categoria'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gram'             => new sfValidatorString(array('max_length' => 255)),
      'gram_atendimento' => new sfValidatorString(array('max_length' => 255)),
      'regiao'           => new sfValidatorString(array('max_length' => 255)),
      'flag'             => new sfValidatorString(array('max_length' => 255)),
      'ativado'          => new sfValidatorBoolean(array('required' => false)),
      'contrato'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'regional'         => new sfValidatorString(array('max_length' => 255)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'base_predial', 'column' => array('sigla')))
    );

    $this->widgetSchema->setNameFormat('base_predial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'base_predial';
  }

}
