<?php

/**
 * Pendencia filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePendenciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'checklist_pendenciado'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'relatorio_fotografico_pendenciado' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'orcamento_pendenciado'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'num_pendencias'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'checklist_pendenciado'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'relatorio_fotografico_pendenciado' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'orcamento_pendenciado'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'num_pendencias'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('pendencia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pendencia';
  }

  public function getFields()
  {
    return array(
      'id'                                => 'Number',
      'checklist_pendenciado'             => 'Boolean',
      'relatorio_fotografico_pendenciado' => 'Boolean',
      'orcamento_pendenciado'             => 'Boolean',
      'num_pendencias'                    => 'Number',
      'created_at'                        => 'Date',
      'updated_at'                        => 'Date',
    );
  }
}
