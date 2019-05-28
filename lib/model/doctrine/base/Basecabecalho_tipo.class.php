<?php

/**
 * Basecabecalho_tipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cabecalho_id
 * @property integer $tipo_preventiva_id
 * @property tipo_preventiva $tipo_preventiva
 * @property Cabecalho $Cabecalho
 * 
 * @method integer         getCabecalhoId()        Returns the current record's "cabecalho_id" value
 * @method integer         getTipoPreventivaId()   Returns the current record's "tipo_preventiva_id" value
 * @method tipo_preventiva getTipoPreventiva()     Returns the current record's "tipo_preventiva" value
 * @method Cabecalho       getCabecalho()          Returns the current record's "Cabecalho" value
 * @method cabecalho_tipo  setCabecalhoId()        Sets the current record's "cabecalho_id" value
 * @method cabecalho_tipo  setTipoPreventivaId()   Sets the current record's "tipo_preventiva_id" value
 * @method cabecalho_tipo  setTipoPreventiva()     Sets the current record's "tipo_preventiva" value
 * @method cabecalho_tipo  setCabecalho()          Sets the current record's "Cabecalho" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecabecalho_tipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cabecalho_tipo');
        $this->hasColumn('cabecalho_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_preventiva_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('tipo_preventiva', array(
             'local' => 'tipo_preventiva_id',
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