<?php

/**
 * Chamado filter form base class.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseChamadoFormFilter extends ManutencaoFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['nome'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['nome'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['email'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['email'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['celular'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['celular'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['estado'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['estado'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['sigla_da_estacao'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['sigla_da_estacao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['gram'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['gram'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['gram_atendimento'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['gram_atendimento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['cidade'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['cidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endereco'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['endereco'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['contrato'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['contrato'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['complemento'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['complemento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['tipo_de_servico'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['tipo_de_servico'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['recurso_servico_requerido'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['recurso_servico_requerido'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['stme'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['stme'] = new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false)));

    $this->widgetSchema   ['justificativa'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['justificativa'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['anexos'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['anexos'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['pesquisa_satisfacao_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('pesquisa_satisfacao'), 'add_empty' => true));
    $this->validatorSchema['pesquisa_satisfacao_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('pesquisa_satisfacao'), 'column' => 'id'));

    $this->widgetSchema   ['unique_key'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['unique_key'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['solicitante'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['solicitante'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['contato'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['contato'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['prioridade'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['prioridade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['aberto_como_emergencial'] = new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no')));
    $this->validatorSchema['aberto_como_emergencial'] = new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0)));

    $this->widgetSchema   ['data_de_execucao'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['data_de_execucao'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59'))));

    $this->widgetSchema   ['data_programada'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['data_programada'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59'))));

    $this->widgetSchema   ['data_contato_cliente'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['data_contato_cliente'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59'))));

    $this->widgetSchema   ['relatorio_fotografico'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['relatorio_fotografico'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['os'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['os'] = new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false)));

    $this->widgetSchema->setNameFormat('chamado_filters[%s]');
  }

  public function getModelName()
  {
    return 'Chamado';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'nome' => 'Text',
      'email' => 'Text',
      'celular' => 'Text',
      'estado' => 'Text',
      'sigla_da_estacao' => 'Text',
      'gram' => 'Text',
      'gram_atendimento' => 'Text',
      'cidade' => 'Text',
      'endereco' => 'Text',
      'contrato' => 'Text',
      'complemento' => 'Text',
      'tipo_de_servico' => 'Text',
      'recurso_servico_requerido' => 'Text',
      'stme' => 'Number',
      'justificativa' => 'Text',
      'anexos' => 'Text',
      'pesquisa_satisfacao_id' => 'ForeignKey',
      'unique_key' => 'Text',
      'solicitante' => 'Text',
      'contato' => 'Text',
      'prioridade' => 'Text',
      'aberto_como_emergencial' => 'Boolean',
      'data_de_execucao' => 'Date',
      'data_programada' => 'Date',
      'data_contato_cliente' => 'Date',
      'relatorio_fotografico' => 'Text',
      'os' => 'Number',
    ));
  }
}
