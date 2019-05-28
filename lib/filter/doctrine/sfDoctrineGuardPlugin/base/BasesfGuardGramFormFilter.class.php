<?php

/**
 * sfGuardGram filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardGramFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(),
      'region'         => new sfWidgetFormFilterInput(),
      'telegram_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Telegram'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'uf_list'        => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
      'users_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
      'afiliados_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado')),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'region'         => new sfValidatorPass(array('required' => false)),
      'telegram_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Telegram'), 'column' => 'id')),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'uf_list'        => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
      'users_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
      'afiliados_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_gram_filters[%s]');

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
      ->leftJoin($query->getRootAlias().'.sfGuardUfGram sfGuardUfGram')
      ->andWhereIn('sfGuardUfGram.uf_id', $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardUserGram sfGuardUserGram')
      ->andWhereIn('sfGuardUserGram.user_id', $values)
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
      ->leftJoin($query->getRootAlias().'.sfGuardGramAfiliado sfGuardGramAfiliado')
      ->andWhereIn('sfGuardGramAfiliado.afiliado_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'sfGuardGram';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'region'         => 'Text',
      'telegram_id'    => 'ForeignKey',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'uf_list'        => 'ManyKey',
      'users_list'     => 'ManyKey',
      'afiliados_list' => 'ManyKey',
    );
  }
}
