<?php

/**
 * sla_evidencia_manutencao filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesla_evidencia_manutencaoFormFilter extends sla_evidenciaFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sla_evidencia_manutencao_filters[%s]');
  }

  public function getModelName()
  {
    return 'sla_evidencia_manutencao';
  }
}
