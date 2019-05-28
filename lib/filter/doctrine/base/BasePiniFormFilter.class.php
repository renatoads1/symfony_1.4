<?php

/**
 * Pini filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePiniFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_pini'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descricao'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'classe'     => new sfWidgetFormFilterInput(),
      'unidade'    => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_pini'   => new sfValidatorPass(array('required' => false)),
      'descricao'  => new sfValidatorPass(array('required' => false)),
      'classe'     => new sfValidatorPass(array('required' => false)),
      'unidade'    => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('pini_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pini';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'cod_pini'   => 'Text',
      'descricao'  => 'Text',
      'classe'     => 'Text',
      'unidade'    => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
