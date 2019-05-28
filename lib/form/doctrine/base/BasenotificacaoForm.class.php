<?php

/**
 * notificacao form base class.
 *
 * @method notificacao getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasenotificacaoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'fop_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'uf_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => false)),
      'mes'                     => new sfWidgetFormInputText(),
      'ano'                     => new sfWidgetFormInputText(),
      'destinatario'            => new sfWidgetFormInputText(),
      'email_destinatario'      => new sfWidgetFormInputText(),
      'telefone_destinatario'   => new sfWidgetFormInputText(),
      'arquivo_enviado'         => new sfWidgetFormInputText(),
      'notificacao_foi_enviada' => new sfWidgetFormInputCheckbox(),
      'token'                   => new sfWidgetFormInputText(),
      'notificacao_aceita'      => new sfWidgetFormInputText(),
      'motivo'                  => new sfWidgetFormTextarea(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fop_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'uf_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'))),
      'mes'                     => new sfValidatorString(array('max_length' => 15)),
      'ano'                     => new sfValidatorInteger(),
      'destinatario'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email_destinatario'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefone_destinatario'   => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'arquivo_enviado'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notificacao_foi_enviada' => new sfValidatorBoolean(),
      'token'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notificacao_aceita'      => new sfValidatorPass(array('required' => false)),
      'motivo'                  => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'created_at'              => new sfValidatorDateTime(),
      'updated_at'              => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('notificacao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'notificacao';
  }

}
