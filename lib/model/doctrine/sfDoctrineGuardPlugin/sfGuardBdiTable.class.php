<?php

/**
 * sfGuardBdiTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardBdiTable extends PluginsfGuardBdiTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardBdiTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardBdi');
    }

   /*
    * Retonar chamados ativos
    */
   public function getBDI(Doctrine_Query $q = null, $uf)
   {
    return $this->addBDIQuery($q, $uf)->execute();
   }

   /*
    * Query chamados ativos
    */
   public function addBDIQuery(Doctrine_Query $q = null, $uf)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('sfGuardBdi j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.uf_id = ?', $uf);

     $q->orderBy($alias.'.created_at DESC');

      return $q;
   }

}
