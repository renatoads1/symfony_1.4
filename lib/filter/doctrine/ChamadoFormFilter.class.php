<?php

/**
 * Chamado filter form.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ChamadoFormFilter extends BaseChamadoFormFilter
{
  public function configure()
  {
  	unset(
      $this['updated_at'],
      $this['email'],$this['celular'],
      $this['estado'],$this['cidade'],
      $this['endereco'],$this['complemento'],
      $this['recurso_servico_requerido'],$this['justificativa'],
      $this['anexos'],$this['justificativa_status'],
      $this['data_de_execucao'],$this['relatorio_fotografico'],$this['pesquisa_de_satisfacao'],
      $this['lpu']
    );

    $this->setWidget('id', new sfWidgetFormFilterInput(array('with_empty' => false)));
    $this->setValidator('id', new sfValidatorSchemaFilter('id', new sfValidatorNumber(array('required' => false))));

  }
}
