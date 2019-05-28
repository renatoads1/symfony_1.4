<?php

/**
 * Basefiscalizacao_extintor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $quantidade
 * @property integer $extintor_tipo_id
 * 
 * @method integer               getQuantidade()       Returns the current record's "quantidade" value
 * @method integer               getExtintorTipoId()   Returns the current record's "extintor_tipo_id" value
 * @method fiscalizacao_extintor setQuantidade()       Sets the current record's "quantidade" value
 * @method fiscalizacao_extintor setExtintorTipoId()   Sets the current record's "extintor_tipo_id" value
 * 
 * @package    usuario
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basefiscalizacao_extintor extends fiscalizacao_item_checklist
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('fiscalizacao_extintor');
        $this->hasColumn('quantidade', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('extintor_tipo_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}