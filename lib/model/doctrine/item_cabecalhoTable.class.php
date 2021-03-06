<?php

/**
 * item_cabecalhoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class item_cabecalhoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object item_cabecalhoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('item_cabecalho');
    }

    /**
     * Retorna itens de cabecalhos de um determinado cabecalho
     *
     * @return array item_cabecalho
     */
    public function getItensCabecalho(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('item_cabecalho j');
	  }
 
	  return $q->execute();
	}



}