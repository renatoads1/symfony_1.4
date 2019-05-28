<?php

/**
 * Orcamento filter form.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrcamentoFormFilter extends BaseOrcamentoFormFilter
{
  public function configure()
  {
  	$this->setWidget('controle_id', new sfWidgetFormFilterInput(array('with_empty' => false)));
    $this->setValidator('controle_id', new sfValidatorSchemaFilter('controle_id', new sfValidatorNumber(array('required' => false))));
  }
}
