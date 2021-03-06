<?php

/**
 * Basecabecalho_uf
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cabecalho_id
 * @property integer $uf_id
 * @property sfGuardUf $sfGuardUf
 * @property Cabecalho $Cabecalho
 * 
 * @method integer      getCabecalhoId()  Returns the current record's "cabecalho_id" value
 * @method integer      getUfId()         Returns the current record's "uf_id" value
 * @method sfGuardUf    getSfGuardUf()    Returns the current record's "sfGuardUf" value
 * @method Cabecalho    getCabecalho()    Returns the current record's "Cabecalho" value
 * @method cabecalho_uf setCabecalhoId()  Sets the current record's "cabecalho_id" value
 * @method cabecalho_uf setUfId()         Sets the current record's "uf_id" value
 * @method cabecalho_uf setSfGuardUf()    Sets the current record's "sfGuardUf" value
 * @method cabecalho_uf setCabecalho()    Sets the current record's "Cabecalho" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecabecalho_uf extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cabecalho_uf');
        $this->hasColumn('cabecalho_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('uf_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUf', array(
             'local' => 'uf_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Cabecalho', array(
             'local' => 'cabecalho_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}