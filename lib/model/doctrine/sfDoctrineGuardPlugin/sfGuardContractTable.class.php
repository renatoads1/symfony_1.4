<?php

/**
 * sfGuardContractTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardContractTable extends PluginsfGuardContractTable
{

    static public $contratos = array();

    /*
     * Retonar opcoes para o campo contratos
     */
    public function getTypes()
    {
      return self::$contratos;
    }


    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardContractTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardContract');
    }

 /*
   * Retonar usuarios de acordo com o grupo que pertence e a regiao
   */
   public function getContract(Doctrine_Query $q = null, $contrato)
   {
    return $this->addContractQuery($q, $contrato)->execute();
   }


   /*
    * Query para recuperar usuarios especificos
    */
   public function addContractQuery(Doctrine_Query $q = null, $contrato)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('sfGuardContract j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.name = ?', $contrato);

     $q->orderBy($alias.'.created_at DESC');

      return $q;
   }

}
