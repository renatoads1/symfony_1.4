<?php

/**
 * Log filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'chamado_id'           => new sfWidgetFormFilterInput(),
      'data_hora'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'acao'                 => new sfWidgetFormFilterInput(),
      'usuario'              => new sfWidgetFormFilterInput(),
      'grupo'                => new sfWidgetFormFilterInput(),
      'justificativa_status' => new sfWidgetFormFilterInput(),
      'estado'               => new sfWidgetFormFilterInput(),
      'gram'                 => new sfWidgetFormFilterInput(),
      'gram_atendimento'     => new sfWidgetFormFilterInput(),
      'contrato'             => new sfWidgetFormFilterInput(),
      'data_hora_saida'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipo_de_servico'      => new sfWidgetFormFilterInput(),
      'manutencao'           => new sfWidgetFormFilterInput(),
      'prioridade'           => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'chamado_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'data_hora'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'acao'                 => new sfValidatorPass(array('required' => false)),
      'usuario'              => new sfValidatorPass(array('required' => false)),
      'grupo'                => new sfValidatorPass(array('required' => false)),
      'justificativa_status' => new sfValidatorPass(array('required' => false)),
      'estado'               => new sfValidatorPass(array('required' => false)),
      'gram'                 => new sfValidatorPass(array('required' => false)),
      'gram_atendimento'     => new sfValidatorPass(array('required' => false)),
      'contrato'             => new sfValidatorPass(array('required' => false)),
      'data_hora_saida'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipo_de_servico'      => new sfValidatorPass(array('required' => false)),
      'manutencao'           => new sfValidatorPass(array('required' => false)),
      'prioridade'           => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'chamado_id'           => 'Number',
      'data_hora'            => 'Date',
      'acao'                 => 'Text',
      'usuario'              => 'Text',
      'grupo'                => 'Text',
      'justificativa_status' => 'Text',
      'estado'               => 'Text',
      'gram'                 => 'Text',
      'gram_atendimento'     => 'Text',
      'contrato'             => 'Text',
      'data_hora_saida'      => 'Date',
      'tipo_de_servico'      => 'Text',
      'manutencao'           => 'Text',
      'prioridade'           => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
