<?php

/**
 * Cabecalho form base class.
 *
 * @method Cabecalho getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCabecalhoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'nome'                 => new sfWidgetFormInputText(),
      'cabecalho_pai'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'), 'add_empty' => true)),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'preventiva_tipo_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo')),
      'sf_guard_uf_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'                 => new sfValidatorString(array('max_length' => 50)),
      'cabecalho_pai'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cabecalho'), 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'preventiva_tipo_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo', 'required' => false)),
      'sf_guard_uf_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cabecalho[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cabecalho';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['preventiva_tipo_list']))
    {
      $this->setDefault('preventiva_tipo_list', $this->object->preventiva_tipo->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['sf_guard_uf_list']))
    {
      $this->setDefault('sf_guard_uf_list', $this->object->sfGuardUf->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->savepreventiva_tipoList($con);
    $this->savesfGuardUfList($con);

    parent::doSave($con);
  }

  public function savepreventiva_tipoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['preventiva_tipo_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->preventiva_tipo->getPrimaryKeys();
    $values = $this->getValue('preventiva_tipo_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('preventiva_tipo', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('preventiva_tipo', array_values($link));
    }
  }

  public function savesfGuardUfList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sf_guard_uf_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->sfGuardUf->getPrimaryKeys();
    $values = $this->getValue('sf_guard_uf_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('sfGuardUf', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('sfGuardUf', array_values($link));
    }
  }

}
