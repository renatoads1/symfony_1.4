<?php

/**
 * preventiva_tipo form base class.
 *
 * @method preventiva_tipo getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basepreventiva_tipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'nome'             => new sfWidgetFormInputText(),
      'descricao'        => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'cabecalho_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho')),
      'sf_guard_uf_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'             => new sfValidatorString(array('max_length' => 255)),
      'descricao'        => new sfValidatorString(array('max_length' => 255)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'cabecalho_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho', 'required' => false)),
      'sf_guard_uf_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('preventiva_tipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'preventiva_tipo';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['cabecalho_list']))
    {
      $this->setDefault('cabecalho_list', $this->object->Cabecalho->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['sf_guard_uf_list']))
    {
      $this->setDefault('sf_guard_uf_list', $this->object->sfGuardUf->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCabecalhoList($con);
    $this->savesfGuardUfList($con);

    parent::doSave($con);
  }

  public function saveCabecalhoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['cabecalho_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Cabecalho->getPrimaryKeys();
    $values = $this->getValue('cabecalho_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Cabecalho', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Cabecalho', array_values($link));
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
