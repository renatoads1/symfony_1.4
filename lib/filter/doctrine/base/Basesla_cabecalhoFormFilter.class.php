<?php

/**
 * sla_cabecalho filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_cabecalhoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_manutencao_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => true)),
      'deducao'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'texto_pontuacao'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'texto_calculo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nome'               => new sfValidatorPass(array('required' => false)),
      'tipo_manutencao_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('preventiva_tipo'), 'column' => 'id')),
      'deducao'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'texto_pontuacao'    => new sfValidatorPass(array('required' => false)),
      'texto_calculo'      => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_cabecalho_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_cabecalho';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nome'               => 'Text',
      'tipo_manutencao_id' => 'ForeignKey',
      'deducao'            => 'Number',
      'texto_pontuacao'    => 'Text',
      'texto_calculo'      => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
