<?php

/**
 * Preventiva form base class.
 *
 * @method Preventiva getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePreventivaForm extends ManutencaoForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['periodicidade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Periodicidade'), 'add_empty' => false));
    $this->validatorSchema['periodicidade_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Periodicidade')));

    $this->widgetSchema   ['ciclo_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciclo'), 'add_empty' => false));
    $this->validatorSchema['ciclo_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ciclo')));

    $this->widgetSchema   ['ultima_preventiva'] = new sfWidgetFormInputText();
    $this->validatorSchema['ultima_preventiva'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['data_programada_fixa'] = new sfWidgetFormDate();
    $this->validatorSchema['data_programada_fixa'] = new sfValidatorDate();

    $this->widgetSchema   ['data_programada'] = new sfWidgetFormDate();
    $this->validatorSchema['data_programada'] = new sfValidatorDate();

    $this->widgetSchema   ['checklist_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Checklist'), 'add_empty' => true));
    $this->validatorSchema['checklist_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Checklist'), 'required' => false));

    $this->widgetSchema   ['preventiva_tipo_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'add_empty' => false));
    $this->validatorSchema['preventiva_tipo_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo')));

    $this->widgetSchema   ['base_predial_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'), 'add_empty' => false));
    $this->validatorSchema['base_predial_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial')));

    $this->widgetSchema   ['pendencia_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pendencia'), 'add_empty' => true));
    $this->validatorSchema['pendencia_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pendencia'), 'required' => false));

    $this->widgetSchema->setNameFormat('preventiva[%s]');
  }

  public function getModelName()
  {
    return 'Preventiva';
  }

}
