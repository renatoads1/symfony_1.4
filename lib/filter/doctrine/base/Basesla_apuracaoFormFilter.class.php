<?php

/**
 * sla_apuracao filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_apuracaoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sla_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_financeiro'), 'add_empty' => true)),
      'item_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sla_cabecalho'), 'add_empty' => true)),
      'mes_referencia'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('meses_ano'), 'add_empty' => true)),
      'quantidade_nao_conformidade' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pontuacao_alcancada'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porcentagem_multa'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sla_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sla_financeiro'), 'column' => 'id')),
      'item_id'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sla_cabecalho'), 'column' => 'id')),
      'mes_referencia'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('meses_ano'), 'column' => 'id')),
      'quantidade_nao_conformidade' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pontuacao_alcancada'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porcentagem_multa'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_apuracao_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_apuracao';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'sla_id'                      => 'ForeignKey',
      'item_id'                     => 'ForeignKey',
      'mes_referencia'              => 'ForeignKey',
      'quantidade_nao_conformidade' => 'Number',
      'pontuacao_alcancada'         => 'Number',
      'porcentagem_multa'           => 'Number',
      'created_at'                  => 'Date',
      'updated_at'                  => 'Date',
    );
  }
}
