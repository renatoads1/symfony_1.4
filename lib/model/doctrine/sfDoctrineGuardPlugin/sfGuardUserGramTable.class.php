<?php

/**
 * sfGuardUserGramTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserGramTable extends PluginsfGuardUserGramTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserGramTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUserGram');
    }


    public function getGrams (Doctrine_Query $q = null) {
    	return $this->addGramQuery($q)->execute();
    }

    public function addGramQuery (Doctrine_Query $q = null) {
    	
    	if (is_null($q)) {
			$q = Doctrine_Query::create()
				->from('sfGuardUserGram g');    		
    	}

    	$alias = $q->getRootAlias();

    	return $q;
    }
}