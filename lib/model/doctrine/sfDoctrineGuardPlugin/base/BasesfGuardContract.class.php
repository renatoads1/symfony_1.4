<?php

/**
 * BasesfGuardContract
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property Doctrine_Collection $Users
 * @property Doctrine_Collection $sfGuardUserContract
 * @property Doctrine_Collection $Contratos
 * @property Doctrine_Collection $Afiliados
 * @property Doctrine_Collection $sfGuardContractAfiliado
 * 
 * @method string              getName()                    Returns the current record's "name" value
 * @method string              getDescription()             Returns the current record's "description" value
 * @method Doctrine_Collection getUsers()                   Returns the current record's "Users" collection
 * @method Doctrine_Collection getSfGuardUserContract()     Returns the current record's "sfGuardUserContract" collection
 * @method Doctrine_Collection getContratos()               Returns the current record's "Contratos" collection
 * @method Doctrine_Collection getAfiliados()               Returns the current record's "Afiliados" collection
 * @method Doctrine_Collection getSfGuardContractAfiliado() Returns the current record's "sfGuardContractAfiliado" collection
 * @method sfGuardContract     setName()                    Sets the current record's "name" value
 * @method sfGuardContract     setDescription()             Sets the current record's "description" value
 * @method sfGuardContract     setUsers()                   Sets the current record's "Users" collection
 * @method sfGuardContract     setSfGuardUserContract()     Sets the current record's "sfGuardUserContract" collection
 * @method sfGuardContract     setContratos()               Sets the current record's "Contratos" collection
 * @method sfGuardContract     setAfiliados()               Sets the current record's "Afiliados" collection
 * @method sfGuardContract     setSfGuardContractAfiliado() Sets the current record's "sfGuardContractAfiliado" collection
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardContract extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_contract');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfGuardUser as Users', array(
             'refClass' => 'sfGuardUserContract',
             'local' => 'contract_id',
             'foreign' => 'user_id'));

        $this->hasMany('sfGuardUserContract', array(
             'local' => 'id',
             'foreign' => 'contract_id'));

        $this->hasMany('fiscalizacao as Contratos', array(
             'local' => 'id',
             'foreign' => 'contract_id'));

        $this->hasMany('Afiliado as Afiliados', array(
             'refClass' => 'sfGuardContractAfiliado',
             'local' => 'contract_id',
             'foreign' => 'afiliado_id'));

        $this->hasMany('sfGuardContractAfiliado', array(
             'local' => 'id',
             'foreign' => 'contract_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}