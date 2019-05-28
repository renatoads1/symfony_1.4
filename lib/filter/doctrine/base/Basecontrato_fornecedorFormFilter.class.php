<?php

/**
 * contrato_fornecedor filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecontrato_fornecedorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero_contrato'    => new sfWidgetFormFilterInput(),
      'filial_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUf'), 'add_empty' => true)),
      'fornecedor_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fornecedor'), 'add_empty' => true)),
      'tipo_manutencao_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => true)),
      'valor_mensal'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ano_referencia'     => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'numero_contrato'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'filial_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUf'), 'column' => 'id')),
      'fornecedor_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('fornecedor'), 'column' => 'id')),
      'tipo_manutencao_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('preventiva_tipo'), 'column' => 'id')),
      'valor_mensal'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ano_referencia'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('contrato_fornecedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'contrato_fornecedor';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'numero_contrato'    => 'Number',
      'filial_id'          => 'ForeignKey',
      'fornecedor_id'      => 'ForeignKey',
      'tipo_manutencao_id' => 'ForeignKey',
      'valor_mensal'       => 'Number',
      'ano_referencia'     => 'Number',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
