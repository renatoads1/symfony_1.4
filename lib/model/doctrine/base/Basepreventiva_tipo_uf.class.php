<?php

/**
 * Basepreventiva_tipo_uf
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $uf_id
 * @property integer $preventiva_tipo_id
 * @property sfGuardUf $sfGuardUf
 * @property preventiva_tipo $preventiva_tipo
 * 
 * @method integer            getUfId()               Returns the current record's "uf_id" value
 * @method integer            getPreventivaTipoId()   Returns the current record's "preventiva_tipo_id" value
 * @method sfGuardUf          getSfGuardUf()          Returns the current record's "sfGuardUf" value
 * @method preventiva_tipo    getPreventivaTipo()     Returns the current record's "preventiva_tipo" value
 * @method preventiva_tipo_uf setUfId()               Sets the current record's "uf_id" value
 * @method preventiva_tipo_uf setPreventivaTipoId()   Sets the current record's "preventiva_tipo_id" value
 * @method preventiva_tipo_uf setSfGuardUf()          Sets the current record's "sfGuardUf" value
 * @method preventiva_tipo_uf setPreventivaTipo()     Sets the current record's "preventiva_tipo" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basepreventiva_tipo_uf extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('preventiva_tipo_uf');
        $this->hasColumn('uf_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('preventiva_tipo_id', 'integer', null, array(
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

        $this->hasOne('preventiva_tipo', array(
             'local' => 'preventiva_tipo_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}