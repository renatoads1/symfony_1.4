<?php

/**
 * Extintor filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExtintorFormFilter extends item_checklistFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['quantidade'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['quantidade'] = new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false)));

    $this->widgetSchema   ['extintor_tipo_id'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['extintor_tipo_id'] = new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false)));

    $this->widgetSchema->setNameFormat('extintor_filters[%s]');
  }

  public function getModelName()
  {
    return 'Extintor';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'quantidade' => 'Number',
      'extintor_tipo_id' => 'Number',
    ));
  }
}
