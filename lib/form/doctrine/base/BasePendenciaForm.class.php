<?php

/**
 * Pendencia form base class.
 *
 * @method Pendencia getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePendenciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                => new sfWidgetFormInputHidden(),
      'checklist_pendenciado'             => new sfWidgetFormInputCheckbox(),
      'relatorio_fotografico_pendenciado' => new sfWidgetFormInputCheckbox(),
      'orcamento_pendenciado'             => new sfWidgetFormInputCheckbox(),
      'num_pendencias'                    => new sfWidgetFormInputText(),
      'created_at'                        => new sfWidgetFormDateTime(),
      'updated_at'                        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'checklist_pendenciado'             => new sfValidatorBoolean(array('required' => false)),
      'relatorio_fotografico_pendenciado' => new sfValidatorBoolean(array('required' => false)),
      'orcamento_pendenciado'             => new sfValidatorBoolean(array('required' => false)),
      'num_pendencias'                    => new sfValidatorInteger(array('required' => false)),
      'created_at'                        => new sfValidatorDateTime(),
      'updated_at'                        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('pendencia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pendencia';
  }

}
