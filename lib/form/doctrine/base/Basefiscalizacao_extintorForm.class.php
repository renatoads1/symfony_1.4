<?php

/**
 * fiscalizacao_extintor form base class.
 *
 * @method fiscalizacao_extintor getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_extintorForm extends fiscalizacao_item_checklistForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['quantidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['quantidade'] = new sfValidatorInteger();

    $this->widgetSchema   ['extintor_tipo_id'] = new sfWidgetFormInputText();
    $this->validatorSchema['extintor_tipo_id'] = new sfValidatorInteger();

    $this->widgetSchema->setNameFormat('fiscalizacao_extintor[%s]');
  }

  public function getModelName()
  {
    return 'fiscalizacao_extintor';
  }

}
