<?php

/**
 * sla_apuracaoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sla_apuracaoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object sla_apuracaoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sla_apuracao');
    }
	
	
	public function getItens($id)
   {
		return $this->addItens($id)->execute();
   }
	

	  public function addItens($id)
   {
      $q = Doctrine_Query::create()
      ->from('sla_apuracao');
     // $q->where('sla_id = ?', $id);

     return $q;
   }
	
	
}