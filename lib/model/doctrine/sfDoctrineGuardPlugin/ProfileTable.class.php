<?php

/**
 * ProfileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProfileTable extends PluginProfileTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProfileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Profile');
    }
}