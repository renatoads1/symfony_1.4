<?php

/**
 * Orcamento filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrcamentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'controle_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'responsavel'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subtotalGeral'    => new sfWidgetFormFilterInput(),
      'subtotalMaterial' => new sfWidgetFormFilterInput(),
      'subtotalDiversos' => new sfWidgetFormFilterInput(),
      'subtotal20'       => new sfWidgetFormFilterInput(),
      'subtotalPini'     => new sfWidgetFormFilterInput(),
      'subtotalPiniBdi'  => new sfWidgetFormFilterInput(),
      'total'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anexo'            => new sfWidgetFormFilterInput(),
      'informacao'       => new sfWidgetFormFilterInput(),
      'observacao'       => new sfWidgetFormFilterInput(),
      'usuario'          => new sfWidgetFormFilterInput(),
      'data_hora'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'email'            => new sfWidgetFormFilterInput(),
      'edicao'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'controle_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'responsavel'      => new sfValidatorPass(array('required' => false)),
      'subtotalGeral'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subtotalMaterial' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subtotalDiversos' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subtotal20'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subtotalPini'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'subtotalPiniBdi'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'anexo'            => new sfValidatorPass(array('required' => false)),
      'informacao'       => new sfValidatorPass(array('required' => false)),
      'observacao'       => new sfValidatorPass(array('required' => false)),
      'usuario'          => new sfValidatorPass(array('required' => false)),
      'data_hora'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'email'            => new sfValidatorPass(array('required' => false)),
      'edicao'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('orcamento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orcamento';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'controle_id'      => 'Number',
      'responsavel'      => 'Text',
      'subtotalGeral'    => 'Number',
      'subtotalMaterial' => 'Number',
      'subtotalDiversos' => 'Number',
      'subtotal20'       => 'Number',
      'subtotalPini'     => 'Number',
      'subtotalPiniBdi'  => 'Number',
      'total'            => 'Number',
      'anexo'            => 'Text',
      'informacao'       => 'Text',
      'observacao'       => 'Text',
      'usuario'          => 'Text',
      'data_hora'        => 'Date',
      'email'            => 'Text',
      'edicao'           => 'Boolean',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
