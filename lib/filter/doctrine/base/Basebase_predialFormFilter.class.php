<?php

/**
 * base_predial filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basebase_predialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_predio'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'endereco'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cidade'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sigla'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imovel'      => new sfWidgetFormFilterInput(),
      'codigo_imovel'    => new sfWidgetFormFilterInput(),
      'categoria'        => new sfWidgetFormFilterInput(),
      'gram'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gram_atendimento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'regiao'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'flag'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ativado'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'contrato'         => new sfWidgetFormFilterInput(),
      'regional'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_predio'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'endereco'         => new sfValidatorPass(array('required' => false)),
      'estado'           => new sfValidatorPass(array('required' => false)),
      'cidade'           => new sfValidatorPass(array('required' => false)),
      'sigla'            => new sfValidatorPass(array('required' => false)),
      'tipo_imovel'      => new sfValidatorPass(array('required' => false)),
      'codigo_imovel'    => new sfValidatorPass(array('required' => false)),
      'categoria'        => new sfValidatorPass(array('required' => false)),
      'gram'             => new sfValidatorPass(array('required' => false)),
      'gram_atendimento' => new sfValidatorPass(array('required' => false)),
      'regiao'           => new sfValidatorPass(array('required' => false)),
      'flag'             => new sfValidatorPass(array('required' => false)),
      'ativado'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'contrato'         => new sfValidatorPass(array('required' => false)),
      'regional'         => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('base_predial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'base_predial';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_predio'        => 'Number',
      'endereco'         => 'Text',
      'estado'           => 'Text',
      'cidade'           => 'Text',
      'sigla'            => 'Text',
      'tipo_imovel'      => 'Text',
      'codigo_imovel'    => 'Text',
      'categoria'        => 'Text',
      'gram'             => 'Text',
      'gram_atendimento' => 'Text',
      'regiao'           => 'Text',
      'flag'             => 'Text',
      'ativado'          => 'Boolean',
      'contrato'         => 'Text',
      'regional'         => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
