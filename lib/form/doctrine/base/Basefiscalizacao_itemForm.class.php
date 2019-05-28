<?php

/**
 * fiscalizacao_item form base class.
 *
 * @method fiscalizacao_item getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_itemForm extends fiscalizacao_item_checklistForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['avaliacao'] = new sfWidgetFormInputText();
    $this->validatorSchema['avaliacao'] = new sfValidatorString(array('max_length' => 200));

    $this->widgetSchema   ['motivo'] = new sfWidgetFormTextarea();
    $this->validatorSchema['motivo'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema->setNameFormat('fiscalizacao_item[%s]');
  }

  public function getModelName()
  {
    return 'fiscalizacao_item';
  }

}
