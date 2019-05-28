<?php

/**
 * sla_valores_totais filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_valores_totaisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sla_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => true)),
      'mes_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => true)),
      'tipo_manutencao_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => true)),
      'percentual_multa_periodo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor_da_multa'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor_multa_utilizado_extra_mensal' => new sfWidgetFormFilterInput(),
      'valor_multa_aplicada'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'indice_performance'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sla_id'                             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sla_financeiro'), 'column' => 'id')),
      'mes_id'                             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('meses_ano'), 'column' => 'id')),
      'tipo_manutencao_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('preventiva_tipo'), 'column' => 'id')),
      'percentual_multa_periodo'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_da_multa'                     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_multa_utilizado_extra_mensal' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_multa_aplicada'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'indice_performance'                 => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_valores_totais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_valores_totais';
  }

  public function getFields()
  {
    return array(
      'id'                                 => 'Number',
      'sla_id'                             => 'ForeignKey',
      'mes_id'                             => 'ForeignKey',
      'tipo_manutencao_id'                 => 'ForeignKey',
      'percentual_multa_periodo'           => 'Number',
      'valor_da_multa'                     => 'Number',
      'valor_multa_utilizado_extra_mensal' => 'Number',
      'valor_multa_aplicada'               => 'Number',
      'indice_performance'                 => 'Number',
      'created_at'                         => 'Date',
      'updated_at'                         => 'Date',
    );
  }
}
