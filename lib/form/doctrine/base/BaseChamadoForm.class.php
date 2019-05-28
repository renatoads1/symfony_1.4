<?php

/**
 * Chamado form base class.
 *
 * @method Chamado getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChamadoForm extends ManutencaoForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['nome'] = new sfWidgetFormInputText();
    $this->validatorSchema['nome'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['email'] = new sfWidgetFormInputText();
    $this->validatorSchema['email'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['celular'] = new sfWidgetFormInputText();
    $this->validatorSchema['celular'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['estado'] = new sfWidgetFormInputText();
    $this->validatorSchema['estado'] = new sfValidatorString(array('max_length' => 2));

    $this->widgetSchema   ['sigla_da_estacao'] = new sfWidgetFormInputText();
    $this->validatorSchema['sigla_da_estacao'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['gram'] = new sfWidgetFormInputText();
    $this->validatorSchema['gram'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['gram_atendimento'] = new sfWidgetFormInputText();
    $this->validatorSchema['gram_atendimento'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['cidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['cidade'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['endereco'] = new sfWidgetFormTextarea();
    $this->validatorSchema['endereco'] = new sfValidatorString(array('max_length' => 4000));

    $this->widgetSchema   ['contrato'] = new sfWidgetFormInputText();
    $this->validatorSchema['contrato'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['complemento'] = new sfWidgetFormInputText();
    $this->validatorSchema['complemento'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['tipo_de_servico'] = new sfWidgetFormInputText();
    $this->validatorSchema['tipo_de_servico'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['recurso_servico_requerido'] = new sfWidgetFormTextarea();
    $this->validatorSchema['recurso_servico_requerido'] = new sfValidatorString(array('max_length' => 4000));

    $this->widgetSchema   ['stme'] = new sfWidgetFormInputText();
    $this->validatorSchema['stme'] = new sfValidatorInteger(array('required' => false));

    $this->widgetSchema   ['justificativa'] = new sfWidgetFormTextarea();
    $this->validatorSchema['justificativa'] = new sfValidatorString(array('max_length' => 4000));

    $this->widgetSchema   ['anexos'] = new sfWidgetFormInputText();
    $this->validatorSchema['anexos'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['pesquisa_satisfacao_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('pesquisa_satisfacao'), 'add_empty' => true));
    $this->validatorSchema['pesquisa_satisfacao_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('pesquisa_satisfacao'), 'required' => false));

    $this->widgetSchema   ['unique_key'] = new sfWidgetFormInputText();
    $this->validatorSchema['unique_key'] = new sfValidatorString(array('max_length' => 50));

    $this->widgetSchema   ['solicitante'] = new sfWidgetFormInputText();
    $this->validatorSchema['solicitante'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['contato'] = new sfWidgetFormInputText();
    $this->validatorSchema['contato'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['prioridade'] = new sfWidgetFormInputText();
    $this->validatorSchema['prioridade'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['aberto_como_emergencial'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['aberto_como_emergencial'] = new sfValidatorBoolean(array('required' => false));

    $this->widgetSchema   ['data_de_execucao'] = new sfWidgetFormInputText();
    $this->validatorSchema['data_de_execucao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['data_programada'] = new sfWidgetFormInputText();
    $this->validatorSchema['data_programada'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['data_contato_cliente'] = new sfWidgetFormInputText();
    $this->validatorSchema['data_contato_cliente'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['relatorio_fotografico'] = new sfWidgetFormInputText();
    $this->validatorSchema['relatorio_fotografico'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['os'] = new sfWidgetFormInputText();
    $this->validatorSchema['os'] = new sfValidatorInteger(array('required' => false));

    $this->widgetSchema->setNameFormat('chamado[%s]');
  }

  public function getModelName()
  {
    return 'Chamado';
  }

}
