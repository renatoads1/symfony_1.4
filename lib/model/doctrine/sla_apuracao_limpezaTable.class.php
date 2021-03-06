<?php

/**
 * sla_apuracao_limpezaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sla_apuracao_limpezaTable extends sla_apuracaoTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sla_apuracao_limpezaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sla_apuracao_limpeza');
    }


	/*
   * Retonar itens de uma determinado apuracao de LIMPEZA
   */
   public function getItensApuracao($id)
   {
    return $this->addItensApuracaoQuery(null, $id)->execute();
   }


   /*
    * Query para selecionar os itens de um determinado fiscalizacao
    */
   public function addItensApuracaoQuery(Doctrine_Query $q = null, $id)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('sla_apuracao_limpeza f');
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
    
    ->from('sla_apuracao_limpeza');

     $q->andWhere('sla_id = ?', $id);
     $q->andWhere('mes_referencia = ?', $mes);
     $q->orderBy('item_id ASC');

     return $q;
   }

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
          ->from('sla_apuracao_limpeza s');
      }

      $alias = $q->getRootAlias();

      return $q;
    }

	
}