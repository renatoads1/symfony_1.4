<?php

/**
 * sla_evidencia filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_evidenciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sla_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => true)),
      'mes_referencia'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => true)),
      'nao_conformidade'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_sla_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'), 'add_empty' => true)),
      'unidade_medicao'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quantidade_apurada' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacoes'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'evidencias'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sla_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sla_financeiro'), 'column' => 'id')),
      'mes_referencia'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('meses_ano'), 'column' => 'id')),
      'nao_conformidade'   => new sfValidatorPass(array('required' => false)),
      'item_sla_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sla_cabecalho'), 'column' => 'id')),
      'unidade_medicao'    => new sfValidatorPass(array('required' => false)),
      'quantidade_apurada' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacoes'        => new sfValidatorPass(array('required' => false)),
      'evidencias'         => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_evidencia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_evidencia';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'sla_id'             => 'ForeignKey',
      'mes_referencia'     => 'ForeignKey',
      'nao_conformidade'   => 'Text',
      'item_sla_id'        => 'ForeignKey',
      'unidade_medicao'    => 'Text',
      'quantidade_apurada' => 'Number',
      'observacoes'        => 'Text',
      'evidencias'         => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
