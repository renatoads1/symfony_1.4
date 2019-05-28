<?php

/**
 * Item filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseItemFormFilter extends item_checklistFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['avaliacao'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['avaliacao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['correcao'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['correcao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['irregularidade'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['irregularidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('item_filters[%s]');
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'avaliacao' => 'Text',
      'correcao' => 'Text',
      'irregularidade' => 'Text',
    ));
  }
}
