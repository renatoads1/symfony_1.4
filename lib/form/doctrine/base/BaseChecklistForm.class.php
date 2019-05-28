<?php

/**
 * Checklist form base class.
 *
 * @method Checklist getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChecklistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'data_de_execucao_inicio'    => new sfWidgetFormInputText(),
      'data_de_execucao'           => new sfWidgetFormInputText(),
      'relatorio_fotografico_link' => new sfWidgetFormInputText(),
      'relatorio_fotografico_pdf'  => new sfWidgetFormInputText(),
      'user_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'corretiva_id'               => new sfWidgetFormInputText(),
      'observacao'                 => new sfWidgetFormTextarea(),
      'preventiva_realizada'       => new sfWidgetFormInputCheckbox(),
      'created_at'                 => new sfWidgetFormDateTime(),
      'updated_at'                 => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'data_de_execucao_inicio'    => new sfValidatorPass(),
      'data_de_execucao'           => new sfValidatorPass(),
      'relatorio_fotografico_link' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'relatorio_fotografico_pdf'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'corretiva_id'               => new sfValidatorInteger(array('required' => false)),
      'observacao'                 => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'preventiva_realizada'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'                 => new sfValidatorDateTime(),
      'updated_at'                 => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('checklist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Checklist';
  }

}
