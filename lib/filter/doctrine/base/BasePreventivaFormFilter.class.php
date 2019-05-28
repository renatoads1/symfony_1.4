<?php

/**
 * Preventiva filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePreventivaFormFilter extends ManutencaoFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['periodicidade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Periodicidade'), 'add_empty' => true));
    $this->validatorSchema['periodicidade_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Periodicidade'), 'column' => 'id'));

    $this->widgetSchema   ['ciclo_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciclo'), 'add_empty' => true));
    $this->validatorSchema['ciclo_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ciclo'), 'column' => 'id'));

    $this->widgetSchema   ['ultima_preventiva'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['ultima_preventiva'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59'))));

    $this->widgetSchema   ['data_programada_fixa'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false));
    $this->validatorSchema['data_programada_fixa'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['data_programada'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false));
    $this->validatorSchema['data_programada'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['checklist_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Checklist'), 'add_empty' => true));
    $this->validatorSchema['checklist_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Checklist'), 'column' => 'id'));

    $this->widgetSchema   ['preventiva_tipo_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => true));
    $this->validatorSchema['preventiva_tipo_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('preventiva_tipo'), 'column' => 'id'));

    $this->widgetSchema   ['base_predial_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'), 'add_empty' => true));
    $this->validatorSchema['base_predial_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('base_predial'), 'column' => 'id'));

    $this->widgetSchema   ['pendencia_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pendencia'), 'add_empty' => true));
    $this->validatorSchema['pendencia_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pendencia'), 'column' => 'id'));

    $this->widgetSchema->setNameFormat('preventiva_filters[%s]');
  }

  public function getModelName()
  {
    return 'Preventiva';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'periodicidade_id' => 'ForeignKey',
      'ciclo_id' => 'ForeignKey',
      'ultima_preventiva' => 'Date',
      'data_programada_fixa' => 'Date',
      'data_programada' => 'Date',
      'checklist_id' => 'ForeignKey',
      'preventiva_tipo_id' => 'ForeignKey',
      'base_predial_id' => 'ForeignKey',
      'pendencia_id' => 'ForeignKey',
    ));
  }
}
