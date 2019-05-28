<?php

/**
 * sla_apuracao_manutencao form base class.
 *
 * @method sla_apuracao_manutencao getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesla_apuracao_manutencaoForm extends sla_apuracaoForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sla_apuracao_manutencao[%s]');
  }

  public function getModelName()
  {
    return 'sla_apuracao_manutencao';
  }

}
