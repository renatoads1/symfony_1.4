<?php

/**
 * Controle filter form.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ControleFormFilter extends BaseControleFormFilter
{
  public function configure()
  {
    unset(
      $this['updated_at'],
      $this['celular'],
      $this['estado'],$this['cidade'],
      $this['endereco'],$this['complemento'],
      $this['recurso_servico_requerido'],$this['justificativa'],
      $this['anexos'],$this['justificativa_status'],
      $this['data_de_execucao'],$this['relatorio_fotografico'],$this['pesquisa_de_satisfacao'],
      $this['lpu']
    );

    $this->setWidget('id', new sfWidgetFormFilterInput(array('with_empty' => false)));
    $this->setValidator('id', new sfValidatorSchemaFilter('id', new sfValidatorNumber(array('required' => false))));

/*
    $this->widgetSchema['gram'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Controle')->getGrams()
    ));

    $this->validatorSchema['gram'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Controle')->getGrams()),
      'required' => false
    ));


    $this->widgetSchema['status'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Controle')->getStatus()
    ));

   $this->validatorSchema['status'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Controle')->getStatus()),
       'required' => false
    ));
*/

    $this->widgetSchema->setLabels(array(
      'sigla_da_estacao' => 'Sigla da estação',
      'tipo_de_servico' => 'Tipo de serviço',
      'gram' => 'GRAM',
      'created_at' => 'Data de abertura',
      'id' => 'N° do chamado'
     ));
  }
}
