<?php

/**
 * fiscalizacao form base class.
 *
 * @method fiscalizacao getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasefiscalizacaoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'base_predial_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'), 'add_empty' => false)),
      'contract_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardContract'), 'add_empty' => false)),
      'user_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'relatorio_fotografico' => new sfWidgetFormInputText(),
      'observacao'            => new sfWidgetFormTextarea(),
      'data_de_execucao'      => new sfWidgetFormInputText(),
      'num_nao_conformidade'  => new sfWidgetFormInputText(),
      'nota_estacao'          => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'base_predial_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'))),
      'contract_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardContract'))),
      'user_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'relatorio_fotografico' => new sfValidatorString(array('max_length' => 255)),
      'observacao'            => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'data_de_execucao'      => new sfValidatorPass(),
      'num_nao_conformidade'  => new sfValidatorInteger(),
      'nota_estacao'          => new sfValidatorNumber(),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('fiscalizacao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fiscalizacao';
  }

}
