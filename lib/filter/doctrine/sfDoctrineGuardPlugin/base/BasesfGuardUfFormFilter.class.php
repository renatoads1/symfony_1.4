<?php

/**
 * sfGuardUf filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUfFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                 => new sfWidgetFormFilterInput(),
      'state'                => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cabecalho_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho')),
      'preventiva_tipo_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo')),
      'users_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
      'grams_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram')),
      'afiliados_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado')),
    ));

    $this->setValidators(array(
      'name'                 => new sfValidatorPass(array('required' => false)),
      'state'                => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cabecalho_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho', 'required' => false)),
      'preventiva_tipo_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo', 'required' => false)),
      'users_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
      'grams_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram', 'required' => false)),
      'afiliados_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_uf_filters[%s]');

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
      ->leftJoin($query->getRootAlias().'.cabecalho_uf cabecalho_uf')
      ->andWhereIn('cabecalho_uf.cabecalho_id', $values)
    ;
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
      ->leftJoin($query->getRootAlias().'.preventiva_tipo_uf preventiva_tipo_uf')
      ->andWhereIn('preventiva_tipo_uf.preventiva_tipo_id', $values)
    ;
  }

  public function addUsersListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardUserUf sfGuardUserUf')
      ->andWhereIn('sfGuardUserUf.user_id', $values)
    ;
  }

  public function addGramsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardUfGram sfGuardUfGram')
      ->andWhereIn('sfGuardUfGram.gram_id', $values)
    ;
  }

  public function addAfiliadosListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardUfAfiliado sfGuardUfAfiliado')
      ->andWhereIn('sfGuardUfAfiliado.afiliado_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'sfGuardUf';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'name'                 => 'Text',
      'state'                => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'cabecalho_list'       => 'ManyKey',
      'preventiva_tipo_list' => 'ManyKey',
      'users_list'           => 'ManyKey',
      'grams_list'           => 'ManyKey',
      'afiliados_list'       => 'ManyKey',
    );
  }
}
