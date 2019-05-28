<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends item_checklistForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['avaliacao'] = new sfWidgetFormInputText();
    $this->validatorSchema['avaliacao'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['correcao'] = new sfWidgetFormInputText();
    $this->validatorSchema['correcao'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['irregularidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['irregularidade'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema->setNameFormat('item[%s]');
  }

  public function getModelName()
  {
    return 'Item';
  }

}
