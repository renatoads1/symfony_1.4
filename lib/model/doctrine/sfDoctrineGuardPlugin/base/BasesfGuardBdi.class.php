<?php

/**
 * BasesfGuardBdi
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $uf_id
 * @property integer $valor
 * @property sfGuardUf $Uf
 * 
 * @method integer    getUfId()  Returns the current record's "uf_id" value
 * @method integer    getValor() Returns the current record's "valor" value
 * @method sfGuardUf  getUf()    Returns the current record's "Uf" value
 * @method sfGuardBdi setUfId()  Sets the current record's "uf_id" value
 * @method sfGuardBdi setValor() Sets the current record's "valor" value
 * @method sfGuardBdi setUf()    Sets the current record's "Uf" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardBdi extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_bdi');
        $this->hasColumn('uf_id', 'integer', null, array(
             'type' => 'integer',
             'unique' => true,
             ));
        $this->hasColumn('valor', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUf as Uf', array(
             'local' => 'uf_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}