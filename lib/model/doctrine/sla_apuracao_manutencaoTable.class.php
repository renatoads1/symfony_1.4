<?php

/**
 * sla_apuracao_manutencaoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sla_apuracao_manutencaoTable extends sla_apuracaoTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sla_apuracao_manutencaoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sla_apuracao_manutencao');
    }
	
	
  /*
   * Retonar itens de uma determinado apuracao de Manutencao
   */
   public function getItensApuracao($id)
   {
    return $this->addItensApuracaoQuery(null, $id)->execute();
   }


   /*
    * Query para selecionar os itens de um determinado apuracao
    */
   public function addItensApuracaoQuery(Doctrine_Query $q = null, $id)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('sla_apuracao_manutencao f');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.sla_id = ?', $id);

     return $q;
   }
	


	public function addItensApuracaoPorMesQuery($id, $mes)
   {
    return $this->addApuracaoMesQuery($id, $mes)->execute();
   }


   /*
    * Query para selecionar os itens de um determinado apuracao
    */
   public function addApuracaoMesQuery($id, $mes)
   {
    $q = Doctrine_Query::create()
    
    ->from('sla_apuracao_manutencao');

     $q->andWhere('sla_id = ?', $id);
     $q->andWhere('mes_referencia = ?', $mes);
     $q->orderBy('item_id ASC');

     return $q;
   }




/*
	public function addItensApuracaoPorMesQuery($slaId, $mes)
   {
		return $this->addApuracaoMesQuery($slaId, $mes)->execute();
   }
	

	  public function addApuracaoMesQuery($slaId, $mes)
   {
      $q = Doctrine_Query::create()
      ->from('sla_apuracao_manutencao');
     
      $q->andWhere('sla_id = ?', $slaId);
      $q->andWhere('mes_referencia = ?', $mes);

      return $q;
   }

*/

  /*
    * Deletar todos os itens do sla na tabela correspondente
    */
    public function deleteItensSLA(Doctrine_Query $q = null) {
        $this->addItensSLAApuracaoQuery($q)->execute();
    }

   /*
    * Buscar sla evidencia limpeza
    */
    protected function addItensSLAApuracaoQuery(Doctrine_Query $q = null){

      if (is_null($q)) {
        $q = Doctrine_Query::create()
          ->from('sla_apuracao_manutencao s');
      }

      $alias = $q->getRootAlias();

      return $q;
    }

}