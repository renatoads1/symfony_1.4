<?php

/**
 * preventiva_tipo filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basepreventiva_tipoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descricao'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cabecalho_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho')),
      'sf_guard_uf_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
    ));

    $this->setValidators(array(
      'nome'             => new sfValidatorPass(array('required' => false)),
      'descricao'        => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cabecalho_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho', 'required' => false)),
      'sf_guard_uf_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('preventiva_tipo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addCabecalhoListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.preventiva_tipo_cabecalho preventiva_tipo_cabecalho')
      ->andWhereIn('preventiva_tipo_cabecalho.cabecalho_id', $values)
    ;
  }

  public function addSfGuardUfListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.preventiva_tipo_uf preventiva_tipo_uf')
      ->andWhereIn('preventiva_tipo_uf.uf_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'preventiva_tipo';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nome'             => 'Text',
      'descricao'        => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'cabecalho_list'   => 'ManyKey',
      'sf_guard_uf_list' => 'ManyKey',
    );
  }
}
