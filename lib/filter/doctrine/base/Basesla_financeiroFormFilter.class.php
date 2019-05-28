<?php

/**
 * sla_financeiro filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_financeiroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'filial_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => true)),
      'fornecedor_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'), 'add_empty' => true)),
      'ano'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fop_responsavel_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'filial_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUf'), 'column' => 'id')),
      'fornecedor_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('fornecedor'), 'column' => 'id')),
      'ano'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fop_responsavel_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_financeiro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla_financeiro';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'filial_id'          => 'ForeignKey',
      'fornecedor_id'      => 'ForeignKey',
      'ano'                => 'Number',
      'fop_responsavel_id' => 'ForeignKey',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
