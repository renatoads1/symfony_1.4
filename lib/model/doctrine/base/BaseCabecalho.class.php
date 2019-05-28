<?php

/**
 * BaseCabecalho
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property integer $cabecalho_pai
 * @property Cabecalho $Cabecalho
 * @property Doctrine_Collection $preventiva_tipo
 * @property Doctrine_Collection $sfGuardUf
 * @property Doctrine_Collection $Cabecalhos
 * @property Doctrine_Collection $Cabecalhos_item
 * @property Doctrine_Collection $preventiva_tipo_cabecalho
 * @property Doctrine_Collection $cabecalho_uf
 * 
 * @method string              getNome()                      Returns the current record's "nome" value
 * @method integer             getCabecalhoPai()              Returns the current record's "cabecalho_pai" value
 * @method Cabecalho           getCabecalho()                 Returns the current record's "Cabecalho" value
 * @method Doctrine_Collection getPreventivaTipo()            Returns the current record's "preventiva_tipo" collection
 * @method Doctrine_Collection getSfGuardUf()                 Returns the current record's "sfGuardUf" collection
 * @method Doctrine_Collection getCabecalhos()                Returns the current record's "Cabecalhos" collection
 * @method Doctrine_Collection getCabecalhosItem()            Returns the current record's "Cabecalhos_item" collection
 * @method Doctrine_Collection getPreventivaTipoCabecalho()   Returns the current record's "preventiva_tipo_cabecalho" collection
 * @method Doctrine_Collection getCabecalhoUf()               Returns the current record's "cabecalho_uf" collection
 * @method Cabecalho           setNome()                      Sets the current record's "nome" value
 * @method Cabecalho           setCabecalhoPai()              Sets the current record's "cabecalho_pai" value
 * @method Cabecalho           setCabecalho()                 Sets the current record's "Cabecalho" value
 * @method Cabecalho           setPreventivaTipo()            Sets the current record's "preventiva_tipo" collection
 * @method Cabecalho           setSfGuardUf()                 Sets the current record's "sfGuardUf" collection
 * @method Cabecalho           setCabecalhos()                Sets the current record's "Cabecalhos" collection
 * @method Cabecalho           setCabecalhosItem()            Sets the current record's "Cabecalhos_item" collection
 * @method Cabecalho           setPreventivaTipoCabecalho()   Sets the current record's "preventiva_tipo_cabecalho" collection
 * @method Cabecalho           setCabecalhoUf()               Sets the current record's "cabecalho_uf" collection
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCabecalho extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cabecalho');
        $this->hasColumn('nome', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('cabecalho_pai', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cabecalho', array(
             'local' => 'cabecalho_pai',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasMany('preventiva_tipo', array(
             'refClass' => 'preventiva_tipo_cabecalho',
             'local' => 'cabecalho_id',
             'foreign' => 'preventiva_tipo_id'));

        $this->hasMany('sfGuardUf', array(
             'refClass' => 'cabecalho_uf',
             'local' => 'cabecalho_id',
             'foreign' => 'uf_id'));

        $this->hasMany('Cabecalho as Cabecalhos', array(
             'local' => 'id',
             'foreign' => 'cabecalho_pai'));

        $this->hasMany('item_cabecalho as Cabecalhos_item', array(
             'local' => 'id',
             'foreign' => 'cabecalho_id'));

        $this->hasMany('preventiva_tipo_cabecalho', array(
             'local' => 'id',
             'foreign' => 'cabecalho_id'));

        $this->hasMany('cabecalho_uf', array(
             'local' => 'id',
             'foreign' => 'cabecalho_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}