<?php

/**
 * Afiliado filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAfiliadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'token'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ativado'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'uf_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
      'contract_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardContract')),
      'gram_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram')),
    ));

    $this->setValidators(array(
      'empresa'       => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'token'         => new sfValidatorPass(array('required' => false)),
      'ativado'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'uf_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
      'contract_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardContract', 'required' => false)),
      'gram_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('afiliado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUfListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('sfGuardUfAfiliado.uf_id', $values)
    ;
  }

  public function addContractListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardContractAfiliado sfGuardContractAfiliado')
      ->andWhereIn('sfGuardContractAfiliado.contract_id', $values)
    ;
  }

  public function addGramListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardGramAfiliado sfGuardGramAfiliado')
      ->andWhereIn('sfGuardGramAfiliado.gram_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'empresa'       => 'Text',
      'email'         => 'Text',
      'token'         => 'Text',
      'ativado'       => 'Boolean',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'uf_list'       => 'ManyKey',
      'contract_list' => 'ManyKey',
      'gram_list'     => 'ManyKey',
    );
  }
}
