<?php

/**
 * ItemTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ItemTable extends item_checklistTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ItemTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Item');
    }

  /*
   * Retonar itens de um determinado checklist
   */
   public function getItensChecklist($checklist_id)
   {
    return $this->addItensChecklistQuery(null, $checklist_id)->execute();
   }


   /*
    * Query para selecionar os itens de um determinado checklist
    */
   public function addItensChecklistQuery(Doctrine_Query $q = null, $checklist_id)
   {
     if (is_null($q))
     {
      $q = Doctrine_Query::create()
         ->from('Item j');
     }

     $alias = $q->getRootAlias();
     $q->andWhere($alias.'.checklist_id = ?', $checklist_id);

     return $q;
   }

    /*
    * Deletar todos os itens do checklist na tabela correspondente
    */
    public function deleteItens(Doctrine_Query $q = null, $checklist_id) {
        $this->addItensChecklistQuery($q, $checklist_id)->execute();
    }
}