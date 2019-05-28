<?php

/**
 * Controle form base class.
 *
 * @method Controle getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseControleForm extends ChamadoForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('controle[%s]');
  }

  public function getModelName()
  {
    return 'Controle';
  }

}
