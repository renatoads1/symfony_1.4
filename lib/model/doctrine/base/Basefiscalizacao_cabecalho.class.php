<?php

/**
 * Basefiscalizacao_cabecalho
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property integer $cabecalho_pai
 * @property fiscalizacao_cabecalho $fiscalizacao_cabecalho
 * @property Doctrine_Collection $Fiscalizacao_cabecalhos
 * 
 * @method string                 getNome()                    Returns the current record's "nome" value
 * @method integer                getCabecalhoPai()            Returns the current record's "cabecalho_pai" value
 * @method fiscalizacao_cabecalho getFiscalizacaoCabecalho()   Returns the current record's "fiscalizacao_cabecalho" value
 * @method Doctrine_Collection    getFiscalizacaoCabecalhos()  Returns the current record's "Fiscalizacao_cabecalhos" collection
 * @method fiscalizacao_cabecalho setNome()                    Sets the current record's "nome" value
 * @method fiscalizacao_cabecalho setCabecalhoPai()            Sets the current record's "cabecalho_pai" value
 * @method fiscalizacao_cabecalho setFiscalizacaoCabecalho()   Sets the current record's "fiscalizacao_cabecalho" value
 * @method fiscalizacao_cabecalho setFiscalizacaoCabecalhos()  Sets the current record's "Fiscalizacao_cabecalhos" collection
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basefiscalizacao_cabecalho extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('fiscalizacao_cabecalho');
        $this->hasColumn('nome', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('cabecalho_pai', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('fiscalizacao_cabecalho', array(
             'local' => 'cabecalho_pai',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasMany('sfGuardContract_fiscalizacao_cabecalho as Fiscalizacao_cabecalhos', array(
             'local' => 'id',
             'foreign' => 'fiscalizacao_cabecalho_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}