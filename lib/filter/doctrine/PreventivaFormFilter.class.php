<?php

/**
 * Preventiva filter form.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreventivaFormFilter extends BasePreventivaFormFilter
{
  /**
   * @see ManutencaoFormFilter
   */
  public function configure()
  {
  	unset(
  	  $this['created_at'], $this['updated_at'],
  	  $this['justificativa_status'], $this['orcamento_id'],
  	  $this['ultima_preventiva'], $this['data_programada_fixa'],
  	  $this['checklist_id'], $this['pendencia_id'], $this['base_predial_id']

  	);

    parent::configure();

    $this->setWidget('id', new sfWidgetFormFilterInput(array('with_empty' => false)));
    $this->setValidator('id', new sfValidatorSchemaFilter('id', new sfValidatorNumber(array('required' => false))));

    $this->setWidget('preventiva_tipo_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('preventiva_tipo'), 'method' => 'getNome')));
    $this->setValidator('preventiva_tipo_id', new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('preventiva_tipo'), 'column' => 'id')));

    $this->setWidget('ciclo_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciclo'), 'method' => 'getNumero')));
    $this->setValidator('ciclo_id', new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ciclo'), 'column' => 'id')));

    $this->setWidget('periodicidade_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Periodicidade'), 'method' => 'getNome')));
    $this->setValidator('periodicidade_id', new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Periodicidade'), 'column' => 'id')));

    //Sigla
   $this->setWidget('base_predial_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('base_predial'), 'method' => 'getEstado', 'order_by' => array('estado', 'asc'))));
    $this->setValidator('base_predial_id', new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('base_predial'), 'column' => 'id'))); 
    
  }
}
