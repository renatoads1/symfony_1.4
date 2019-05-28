<?php

/**
 * Extintor form base class.
 *
 * @method Extintor getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExtintorForm extends item_checklistForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['quantidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['quantidade'] = new sfValidatorInteger();

    $this->widgetSchema   ['extintor_tipo_id'] = new sfWidgetFormInputText();
    $this->validatorSchema['extintor_tipo_id'] = new sfValidatorInteger();

    $this->widgetSchema->setNameFormat('extintor[%s]');
  }

  public function getModelName()
  {
    return 'Extintor';
  }

}
