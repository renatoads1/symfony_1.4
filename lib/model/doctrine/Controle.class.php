<?php

/**
 * Controle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Controle extends BaseControle
{

  static protected $status = array("Em análise pelo fornecedor",
                                   "Em análise pela Oi",
                                   "Em planejamento de execução",
                                   "Em confecção de orçamento",
                                   "Em aprovação de orçamento",
                                   "Agendado para execução",
                                   "Executado (Aguardando Relatório Fotográfico)");

  /**
  * Funcao responsavel por retornar o dia acrescido de dias a partir do status do chamado
  */
  protected function getQtDia ($qtDias = null) {

    if(is_null($qtDias)) {
      return date("Y-m-d", time());
    }

    return date("Y-m-d", strtotime($this->getUpdated_at() . "+" . $qtDias . " days"));
  }

  public function getAlertaAtraso () {
    
    $dataAtual = $this->getQtDia();
    $classeCSS = "";

  /*  switch (Formatacao::texto($this->getStatus())) {
      
      case Formatacao::texto(self::$status[0]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(2) ? 'alerta-atraso' : '';
      break; 

      case Formatacao::texto(self::$status[1]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(2) ? 'alerta-atraso' : '';
      break;            

      case Formatacao::texto(self::$status[2]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(7) ? 'alerta-atraso' : '';
      break;

      case Formatacao::texto(self::$status[3]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(15) ? 'alerta-atraso' : '';
      break;

      case Formatacao::texto(self::$status[4]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(2) ? 'alerta-atraso' : '';
      break;

      case Formatacao::texto(self::$status[5]):
        $classeCSS = $dataAtual >= $this->getDateTimeObject('data_programada')->format('Y-m-d') ? 'alerta-atraso' : '';
      break;      

      case Formatacao::texto(self::$status[6]):
        $classeCSS = $this->getPrioridade() == "Emergencial" && $dataAtual >= $this->getQtDia(7) ? 'alerta-atraso' : '';
      break;         
      
      default:
        $classeCSS = "";
      break;
    }*/

    return $classeCSS;

  }



 /*
  * Alterar o Status e Justificativa do chamado enviado para analise
  */
  public function update($justificativa_status)
  {
    $this->setStatus("Em análise pela Oi");
    $this->setJustificativaStatus($justificativa_status);
    $this->save();
  }

 /*
  * Alterar o  Status, Justificativa e Prioridade do chamado enviado para a execução
  */
  public function updateExe($prioridade, $data_de_execucao, $tipo_de_servico, $data_contato_cliente)
  {
    $this->setStatus("Agendado para execução");
    $this->setJustificativaStatus("Chamado agendado para execução");
    $this->setPrioridade($prioridade);    
    $this->setTipoDeServico($tipo_de_servico);
    $this->setDataProgramada($data_de_execucao);
    $this->setDataContatoCliente($data_contato_cliente);
    $this->save();
  }

 /*
  * Alterar o Status, Justificativa e Relatorio fotografico do chamado que foi dado baixa
  */
  public function darBaixa($data_de_execucao, $justificativa_status)
  {
    $this->setStatus("Executado (Aguardando Relatório Fotográfico)");
    $this->setJustificativaStatus($justificativa_status);
    $this->setDataDeExecucao($data_de_execucao);
    $this->save();
  }

 /*
  * Alterar o Status, Justificativa e Relatorio fotografico do chamado que foi dado baixa
  */
  public function concluir($relatorio_fotografico, $os)
  {
    $this->setStatus("Concluído");
    $this->setJustificativaStatus("Chamado concluído");
    $this->setRelatorioFotografico($relatorio_fotografico);
    if($os != "")$this->setOs($os);
    $this->save();
  }

 /*
  * Alterar o  Status, Justificativa e Prioridade do chamado aprovado para a execução
  */
  public function aprovar($prioridade, $justificativa_status, $tipo_de_servico)
  {
      if(!$this->getDataProgramada()){
         $this->setStatus("Em planejamento de execução");
         $this->setJustificativaStatus($justificativa_status);
         $this->setPrioridade($prioridade);
         $this->setTipoDeServico($tipo_de_servico);
      }
      else if(!$this->getDataDeExecucao()){
         $this->setStatus("Agendado para execução");
         $this->setJustificativaStatus($justificativa_status);
      }
      else if($this->getRelatorioFotografico()){
         $this->setStatus("Concluído");
         $this->setJustificativaStatus($justificativa_status);     
      }
      else{
         $this->setStatus("Executado (Aguardando Relatório Fotográfico)");
         $this->setJustificativaStatus($justificativa_status);
      }
    
      $this->save();
  }

 /*
  * Alterar o Status e Justificativa do chamado reprovado
  */
  public function reprovar($justificativa_status)
  {
    $this->setStatus("Cancelado");
    $this->setJustificativaStatus($justificativa_status);
    $this->save();
  }

   /*
  * Alterar data programada 
  */
  public function reprogramar($prioridade, $data_programada, $justificativa_status, $data_contato)
  {
    $this->setPrioridade($prioridade);
    $this->setDataProgramada($data_programada);
    $this->setJustificativaStatus($justificativa_status);
    
	//Caso não faça esta validação, salva o valor vazio no banco, sobrescrevendo o dado existente, se 
	//for o caso
	if($data_contato){
		$this->setDataContatoCliente($data_contato);
	}	
    $this->save();
  }
  
 
  /*
  * Alterar somente o tipo de prioridade
  */
  public function reprogramarPrioridade($prioridade, $justificativa_status)
  {
    $this->setPrioridade($prioridade);
  	$this->setJustificativaStatus($justificativa_status);
    $this->save();
  }

 /*
  * Alterar o Status e Justificativa do chamado reprovado
  */
  public function verba($justificativa_status)
  {
    $this->setStatus("Aguardando disponibilidade de verba");
    $this->setJustificativaStatus($justificativa_status);
    $this->save();
  }

 /*
  * Alterar o Status, Justificativa e a data de execução do chamado aprovado para a execução na preventiva
  */
  public function preventiva($data_de_execucao, $justificativa_status, $os)
  {
    $this->setStatus("Agendado para execução");
    $this->setDataProgramada($data_de_execucao);
    
    if($justificativa_status != null){
      $this->setJustificativaStatus($justificativa_status);
      $this->setPrioridade("Preventiva");
      $this->setOs($os);
    }
    
    $this->save();
  }


 /*
  * Alterar o Status e Justificativa do chamado em espera de confecção de orçamento
  */
  public function solicitarLPU($justificativa_status)
  {   
    $this->setStatus("Em confecção de orçamento");
    $this->setJustificativaStatus($justificativa_status);
    $this->save();        
  }

 /*
  * Publicar orcamento
  */
  public function publishOrcamento($orcamento)
  {
    $this->setOrcamento($orcamento);
    $this->setOrcamentoId($orcamento->getId());
    $this->setStatus("Em aprovação de orçamento");
    $this->setJustificativaStatus("Orçamento aguardando aprovação para dar andamento na execução do chamado");
    $this->save();
  }

/*
 * Salvar parcialmente um orcamento
 */
  public function setLPUParcial ($orcamento) {
    $this->setOrcamento($orcamento);
    $this->setOrcamentoId($orcamento->getId());
    $this->save();    
  }

 /*
  * Reabrir chamado
  */
  public function reabrir($justificativa_status)
  {
    $this->setStatus("Em análise pelo fornecedor");
    $this->setJustificativaStatus($justificativa_status);

    $this->setPesquisaSatisfacaoId(null);
    $this->setDataDeExecucao(null);
    $this->setDataProgramada(null);
    $this->setRelatorioFotografico(null);
    $this->setOrcamentoId(null);
    $this->setJustificativa("Solicitação anterior: ".$this->getJustificativa()." / Motivo da reabertura: ".$justificativa_status);
    $this->save();
  }

 /*
  * Retornar chamado para status anterior
  */
  public function cancelarOrcamento($prioridade, $justificativa_status)
  {
      if(!$this->getDataProgramada()){
         $this->setStatus("Em planejamento de execução");
         $this->setJustificativaStatus($justificativa_status);
         $this->setPrioridade($prioridade);
      }
      else if(!$this->getDataDeExecucao()){
         $this->setStatus("Agendado para execução");
         $this->setJustificativaStatus($justificativa_status);
      }
      else if($this->getRelatorioFotografico()){
         $this->setStatus("Concluído");
         $this->setJustificativaStatus($justificativa_status);     
      }
      else{
         $this->setStatus("Executado (Aguardando Relatório Fotográfico)");
         $this->setJustificativaStatus($justificativa_status);
      }
    
      if($this->getOrcamentoId())$this->getOrcamento()->deletarOrcamento();
      $this->save();
  }  

  
/*
 * Passar um array de strings para o template
 */
  public function asArray($host)
  {
    return array(
      'id'                   => $this->getId(),
      'status'               => $this->getStatus(),
      'justificativa_status' => $this->getJustificativaStatus(),
      'nome'                 => $this->getNome(),
      'email'                => $this->getEmail(),
      'celular'              => $this->getCelular(),
      'estado'               => $this->getEstado(),
      'sigla_da_estacao'     => $this->getSiglaDaEstacao(),
      'gram'                 => $this->getGram(),
      'gram_atendimento'     => $this->getGramAtendimento(),
      'cidade'               => $this->getCidade(),
      'endereco'             => $this->getEndereco(),
      'contrato'             => $this->getContrato(),
      'complemento'          => $this->getComplemento(),
      'tipo_de_servico'      => $this->getTipoDeServico(),
      'servico_requerido'    => $this->getRecursoServicoRequerido(),
      'descricao_do_servico' => $this->getJustificativa(),
      'solicitante'          => $this->getSolicitante(),
      'contato'              => $this->getContato(),
      'anexo'                => $this->getAnexos() ? 'http://'.$host.'/uploads/chamados/'.$this->getAnexos() : null,
      'prioridade'           => $this->getPrioridade(),
      'data_programada'      => $this->getDataProgramada(),
      'data_de_execucao'     => $this->getDataDeExecucao(),
      'data_contato_cliente' => $this->getDataContatoCliente(),
      'relatorio_fotografico'=> $this->getRelatorioFotografico() ? 'http://'.$host.'/uploads/chamados/'.$this->getRelatorioFotografico() : null,
      'orcamento'            => $this->getOrcamento()->getTotal(),
      'pesquisa_satisfacao'  => $this->getPesquisaSatisfacao()->getAvaliacaoServico(),
    );
  }


}
