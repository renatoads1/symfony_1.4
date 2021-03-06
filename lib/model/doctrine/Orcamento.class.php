<?php

/**
 * Orcamento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Orcamento extends BaseOrcamento
{
 /*
  * Alterar o Status e Justificativa do chamado enviado para analise
  */
  public function atualizar($usuario, $email, $data)
  {
    $this->setUsuario($usuario);
    $this->setEmail($email);
    $this->setDataHora($data);
    $this->save();
  }

  protected function criarNovaLPUcomItem () {

    $novoOrcamento = $this->copy();
    $novoOrcamento->save();

    $material_item = $this->getTodosItensOrcamento('Material_item');
    $servico_item  = $this->getTodosItensOrcamento('Servico_item');
    $diverso_item  = $this->getTodosItensOrcamento('Diverso_item');
    $pini_item     = $this->getTodosItensOrcamento('Pini_item');

    $this->setNovosItens($material_item, $novoOrcamento->getId());
    $this->setNovosItens($servico_item, $novoOrcamento->getId());
    $this->setNovosItens($diverso_item, $novoOrcamento->getId());
    $this->setNovosItens($pini_item, $novoOrcamento->getId());

    return $novoOrcamento;
  }

  protected function setNovosItens ($itens, $id) {
    foreach ($itens as $item) {
      $novoItem = $item->copy();
      $novoItem->setOrcamentoId($id);
      $novoItem->save();
    }
  }  

 /**
  * Deletar todos os itens do orcamento na tabela correspondente
  */
   public function deleteOldItem($table){
	    $q = Doctrine_Query::create()
			->from($table.' p')
			->delete()
			->where('p.orcamento_id = ?', $this->getId());

		Doctrine_Core::getTable($table)->deleteItensOrcamento($q);
   }

/*
 * Recuperar todos os itens do orcamento
 */
   public function getTodosItensOrcamento ($table) {
     $q = Doctrine_Query::create()
      ->from($table . ' p')
      ->where('p.orcamento_id = ?', $this->getId());

      return Doctrine_Core::getTable($table)->getTodosItensOrcamento($q);
   }

 /**
  * deletar orcamento
  */
   public function deletarOrcamento(){
      $q = Doctrine_Query::create()
      ->from('Orcamento j')
      ->delete()
      ->where('j.id = ?', $this->getId());

    Doctrine_Core::getTable('Orcamento')->deletarOrcamento($q);
   }

}
