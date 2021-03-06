<?php

/**
 * Basefiscalizacao_item_checklist
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $fiscalizacao_id
 * @property integer $fiscalizacao_item_cabecalho_id
 * @property fiscalizacao_item_cabecalho $fiscalizacao_item_cabecalho
 * 
 * @method integer                     getFiscalizacaoId()                 Returns the current record's "fiscalizacao_id" value
 * @method integer                     getFiscalizacaoItemCabecalhoId()    Returns the current record's "fiscalizacao_item_cabecalho_id" value
 * @method fiscalizacao_item_cabecalho getFiscalizacaoItemCabecalho()      Returns the current record's "fiscalizacao_item_cabecalho" value
 * @method fiscalizacao_item_checklist setFiscalizacaoId()                 Sets the current record's "fiscalizacao_id" value
 * @method fiscalizacao_item_checklist setFiscalizacaoItemCabecalhoId()    Sets the current record's "fiscalizacao_item_cabecalho_id" value
 * @method fiscalizacao_item_checklist setFiscalizacaoItemCabecalho()      Sets the current record's "fiscalizacao_item_cabecalho" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basefiscalizacao_item_checklist extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('fiscalizacao_item_checklist');
        $this->hasColumn('fiscalizacao_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fiscalizacao_item_cabecalho_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('fiscalizacao_item_cabecalho', array(
             'local' => 'fiscalizacao_item_cabecalho_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}