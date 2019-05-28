<?php

/**
 * Baseextintor_tipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tipo
 * @property string $tamanho
 * @property string $descricao
 * 
 * @method string        getTipo()      Returns the current record's "tipo" value
 * @method string        getTamanho()   Returns the current record's "tamanho" value
 * @method string        getDescricao() Returns the current record's "descricao" value
 * @method extintor_tipo setTipo()      Sets the current record's "tipo" value
 * @method extintor_tipo setTamanho()   Sets the current record's "tamanho" value
 * @method extintor_tipo setDescricao() Sets the current record's "descricao" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseextintor_tipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('extintor_tipo');
        $this->hasColumn('tipo', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('tamanho', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('descricao', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}