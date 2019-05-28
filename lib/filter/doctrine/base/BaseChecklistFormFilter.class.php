<?php

/**
 * Checklist filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseChecklistFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'data_de_execucao_inicio'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'data_de_execucao'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'relatorio_fotografico_link' => new sfWidgetFormFilterInput(),
      'relatorio_fotografico_pdf'  => new sfWidgetFormFilterInput(),
      'user_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'corretiva_id'               => new sfWidgetFormFilterInput(),
      'observacao'                 => new sfWidgetFormFilterInput(),
      'preventiva_realizada'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'data_de_execucao_inicio'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'data_de_execucao'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'relatorio_fotografico_link' => new sfValidatorPass(array('required' => false)),
      'relatorio_fotografico_pdf'  => new sfValidatorPass(array('required' => false)),
      'user_id'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'corretiva_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacao'                 => new sfValidatorPass(array('required' => false)),
      'preventiva_realizada'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('checklist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Checklist';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'data_de_execucao_inicio'    => 'Date',
      'data_de_execucao'           => 'Date',
      'relatorio_fotografico_link' => 'Text',
      'relatorio_fotografico_pdf'  => 'Text',
      'user_id'                    => 'ForeignKey',
      'corretiva_id'               => 'Number',
      'observacao'                 => 'Text',
      'preventiva_realizada'       => 'Boolean',
      'created_at'                 => 'Date',
      'updated_at'                 => 'Date',
    );
  }
}
