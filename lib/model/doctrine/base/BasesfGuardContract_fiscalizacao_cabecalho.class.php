<?php

/**
 * BasesfGuardContract_fiscalizacao_cabecalho
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $contract_id
 * @property integer $fiscalizacao_cabecalho_id
 * @property sfGuardContract $sfGuardContract
 * @property fiscalizacao_cabecalho $fiscalizacao_cabecalho
 * 
 * @method integer                                getContractId()                Returns the current record's "contract_id" value
 * @method integer                                getFiscalizacaoCabecalhoId()   Returns the current record's "fiscalizacao_cabecalho_id" value
 * @method sfGuardContract                        getSfGuardContract()           Returns the current record's "sfGuardContract" value
 * @method fiscalizacao_cabecalho                 getFiscalizacaoCabecalho()     Returns the current record's "fiscalizacao_cabecalho" value
 * @method sfGuardContract_fiscalizacao_cabecalho setContractId()                Sets the current record's "contract_id" value
 * @method sfGuardContract_fiscalizacao_cabecalho setFiscalizacaoCabecalhoId()   Sets the current record's "fiscalizacao_cabecalho_id" value
 * @method sfGuardContract_fiscalizacao_cabecalho setSfGuardContract()           Sets the current record's "sfGuardContract" value
 * @method sfGuardContract_fiscalizacao_cabecalho setFiscalizacaoCabecalho()     Sets the current record's "fiscalizacao_cabecalho" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardContract_fiscalizacao_cabecalho extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_contract_fiscalizacao_cabecalho');
        $this->hasColumn('contract_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fiscalizacao_cabecalho_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardContract', array(
             'local' => 'contract_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('fiscalizacao_cabecalho', array(
             'local' => 'fiscalizacao_cabecalho_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}