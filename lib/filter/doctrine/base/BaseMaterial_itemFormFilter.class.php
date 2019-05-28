<?php

/**
 * Material_item filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMaterial_itemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'orcamento_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Orcamento'), 'add_empty' => true)),
      'codigo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descricao'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidade'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quantidade'     => new sfWidgetFormFilterInput(),
      'valor_unitario' => new sfWidgetFormFilterInput(),
      'valor_total'    => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'orcamento_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Orcamento'), 'column' => 'id')),
      'codigo'         => new sfValidatorPass(array('required' => false)),
      'descricao'      => new sfValidatorPass(array('required' => false)),
      'unidade'        => new sfValidatorPass(array('required' => false)),
      'quantidade'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_unitario' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_total'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('material_item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Material_item';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'orcamento_id'   => 'ForeignKey',
      'codigo'         => 'Text',
      'descricao'      => 'Text',
      'unidade'        => 'Text',
      'quantidade'     => 'Number',
      'valor_unitario' => 'Number',
      'valor_total'    => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
