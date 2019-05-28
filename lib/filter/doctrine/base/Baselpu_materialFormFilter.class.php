<?php

/**
 * lpu_material filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Baselpu_materialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'especificacao' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidade'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'        => new sfValidatorPass(array('required' => false)),
      'especificacao' => new sfValidatorPass(array('required' => false)),
      'unidade'       => new sfValidatorPass(array('required' => false)),
      'valor'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estado'        => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('lpu_material_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'lpu_material';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'codigo'        => 'Text',
      'especificacao' => 'Text',
      'unidade'       => 'Text',
      'valor'         => 'Number',
      'estado'        => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
