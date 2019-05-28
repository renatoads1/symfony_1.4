<?php

/**
 * fiscalizacao filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasefiscalizacaoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'base_predial_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'), 'add_empty' => true)),
      'contract_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardContract'), 'add_empty' => true)),
      'user_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'relatorio_fotografico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacao'            => new sfWidgetFormFilterInput(),
      'data_de_execucao'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'num_nao_conformidade'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nota_estacao'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'base_predial_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('base_predial'), 'column' => 'id')),
      'contract_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardContract'), 'column' => 'id')),
      'user_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'relatorio_fotografico' => new sfValidatorPass(array('required' => false)),
      'observacao'            => new sfValidatorPass(array('required' => false)),
      'data_de_execucao'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'num_nao_conformidade'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nota_estacao'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('fiscalizacao_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fiscalizacao';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'base_predial_id'       => 'ForeignKey',
      'contract_id'           => 'ForeignKey',
      'user_id'               => 'ForeignKey',
      'relatorio_fotografico' => 'Text',
      'observacao'            => 'Text',
      'data_de_execucao'      => 'Date',
      'num_nao_conformidade'  => 'Number',
      'nota_estacao'          => 'Number',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}
