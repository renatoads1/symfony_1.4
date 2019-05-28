<?php

/**
 * fiscalizacao_item_cabecalho filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_item_cabecalhoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fiscalizacao_cabecalho_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fiscalizacao_cabecalho'), 'add_empty' => true)),
      'nome'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_avaliacao_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tipo_avaliacao'), 'add_empty' => true)),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fiscalizacao_cabecalho_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('fiscalizacao_cabecalho'), 'column' => 'id')),
      'nome'                      => new sfValidatorPass(array('required' => false)),
      'tipo_avaliacao_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('tipo_avaliacao'), 'column' => 'id')),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('fiscalizacao_item_cabecalho_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fiscalizacao_item_cabecalho';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'fiscalizacao_cabecalho_id' => 'ForeignKey',
      'nome'                      => 'Text',
      'tipo_avaliacao_id'         => 'ForeignKey',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}
