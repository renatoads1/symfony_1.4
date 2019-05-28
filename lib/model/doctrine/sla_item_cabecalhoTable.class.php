<?php

/**
 * sla_item_cabecalhoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sla_item_cabecalhoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object sla_item_cabecalhoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sla_item_cabecalho');
    }
	
	//recebe o subtitulo daquele título
	public function getSubtitulos($titulo_id){
		return $this->hasSubtitulos($titulo_id)->execute();
	}	
  
	public function hasSubtitulos($titulo_id){
       $q = Doctrine_Query::create()
         ->from('sla_item_cabecalho v')
         ->where('v.cabecalho_pai = ?', $titulo_id);		
      return $q; 
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
	      ->from('sla_item_cabecalho j');
	  }
 
	  return $q->execute();
	}
	
}












