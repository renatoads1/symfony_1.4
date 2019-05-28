<?php

/**
 * fiscalizacao_item filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basefiscalizacao_itemFormFilter extends fiscalizacao_item_checklistFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['avaliacao'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['avaliacao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['motivo'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['motivo'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('fiscalizacao_item_filters[%s]');
  }

  public function getModelName()
  {
    return 'fiscalizacao_item';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'avaliacao' => 'Text',
      'motivo' => 'Text',
    ));
  }
}
