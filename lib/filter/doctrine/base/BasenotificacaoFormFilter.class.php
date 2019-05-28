<?php

/**
 * notificacao filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasenotificacaoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fop_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'uf_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => true)),
      'mes'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ano'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'destinatario'            => new sfWidgetFormFilterInput(),
      'email_destinatario'      => new sfWidgetFormFilterInput(),
      'telefone_destinatario'   => new sfWidgetFormFilterInput(),
      'arquivo_enviado'         => new sfWidgetFormFilterInput(),
      'notificacao_foi_enviada' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'token'                   => new sfWidgetFormFilterInput(),
      'notificacao_aceita'      => new sfWidgetFormFilterInput(),
      'motivo'                  => new sfWidgetFormFilterInput(),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fop_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'uf_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUf'), 'column' => 'id')),
      'mes'                     => new sfValidatorPass(array('required' => false)),
      'ano'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'destinatario'            => new sfValidatorPass(array('required' => false)),
      'email_destinatario'      => new sfValidatorPass(array('required' => false)),
      'telefone_destinatario'   => new sfValidatorPass(array('required' => false)),
      'arquivo_enviado'         => new sfValidatorPass(array('required' => false)),
      'notificacao_foi_enviada' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'token'                   => new sfValidatorPass(array('required' => false)),
      'notificacao_aceita'      => new sfValidatorPass(array('required' => false)),
      'motivo'                  => new sfValidatorPass(array('required' => false)),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('notificacao_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'notificacao';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'fop_id'                  => 'ForeignKey',
      'uf_id'                   => 'ForeignKey',
      'mes'                     => 'Text',
      'ano'                     => 'Number',
      'destinatario'            => 'Text',
      'email_destinatario'      => 'Text',
      'telefone_destinatario'   => 'Text',
      'arquivo_enviado'         => 'Text',
      'notificacao_foi_enviada' => 'Boolean',
      'token'                   => 'Text',
      'notificacao_aceita'      => 'Text',
      'motivo'                  => 'Text',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
