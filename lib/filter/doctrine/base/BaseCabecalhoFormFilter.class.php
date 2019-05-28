<?php

/**
 * Cabecalho filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCabecalhoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cabecalho_pai'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'), 'add_empty' => true)),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'preventiva_tipo_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo')),
      'sf_guard_uf_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
    ));

    $this->setValidators(array(
      'nome'                 => new sfValidatorPass(array('required' => false)),
      'cabecalho_pai'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cabecalho'), 'column' => 'id')),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'preventiva_tipo_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo', 'required' => false)),
      'sf_guard_uf_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cabecalho_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addPreventivaTipoListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('preventiva_tipo_cabecalho.preventiva_tipo_id', $values)
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
      ->leftJoin($query->getRootAlias().'.cabecalho_uf cabecalho_uf')
      ->andWhereIn('cabecalho_uf.uf_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Cabecalho';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'nome'                 => 'Text',
      'cabecalho_pai'        => 'ForeignKey',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'preventiva_tipo_list' => 'ManyKey',
      'sf_guard_uf_list'     => 'ManyKey',
    );
  }
}
