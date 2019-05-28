<?php

/**
 * sla filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseslaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'conformidade_apurada'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_sla'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quantidade_apurada'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fiscalizacao_item_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'), 'add_empty' => true)),
      'fiscalizacao_id'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'conformidade_apurada'           => new sfValidatorPass(array('required' => false)),
      'item_sla'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quantidade_apurada'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'                           => new sfValidatorPass(array('required' => false)),
      'fiscalizacao_item_cabecalho_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('fiscalizacao_item_cabecalho'), 'column' => 'id')),
      'fiscalizacao_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sla_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sla';
  }

  public function getFields()
  {
    return array(
      'id'                             => 'Number',
      'conformidade_apurada'           => 'Text',
      'item_sla'                       => 'Number',
      'quantidade_apurada'             => 'Number',
      'tipo'                           => 'Text',
      'fiscalizacao_item_cabecalho_id' => 'ForeignKey',
      'fiscalizacao_id'                => 'Number',
      'created_at'                     => 'Date',
      'updated_at'                     => 'Date',
    );
  }
}
