<?php

/**
 * fiscalizacao_cabecalho
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class fiscalizacao_cabecalho extends Basefiscalizacao_cabecalho
{
	
		/**
     * Retorna itens de cabecalhos de um determinado cabecalho
     *
     * @return array item_cabecalho
     */
	public function getItensCabecalho()
	{
	  $q = Doctrine_Query::create()
	    ->from('fiscalizacao_item_cabecalho j')
	    ->where('j.fiscalizacao_cabecalho_id = ?', $this->getId());
	 
	  return Doctrine_Core::getTable('fiscalizacao_item_cabecalho')->getItensCabecalho($q);
	}

}