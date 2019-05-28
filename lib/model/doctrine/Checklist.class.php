<?php

/**
 * Checklist
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Checklist extends BaseChecklist
{
/**
  * Deletar todos os itens de checklist na tabela correspondente
  */
   public function deleteOldItem($table){
	    $q = Doctrine_Query::create()
			->from($table.' p')
			->delete();

		Doctrine_Core::getTable($table)->deleteItens($q, $this->getId());
   }

}