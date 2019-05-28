<?php

/**
 * sfGuardUf form base class.
 *
 * @method sfGuardUf getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUfForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'name'                 => new sfWidgetFormInputText(),
      'state'                => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'cabecalho_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho')),
      'preventiva_tipo_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo')),
      'users_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
      'grams_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram')),
      'afiliados_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'state'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'cabecalho_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Cabecalho', 'required' => false)),
      'preventiva_tipo_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'preventiva_tipo', 'required' => false)),
      'users_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
      'grams_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram', 'required' => false)),
      'afiliados_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Afiliado', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'sfGuardUf', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'sfGuardUf', 'column' => array('state'))),
      ))
    );

    $this->widgetSchema->setNameFormat('sf_guard_uf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUf';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['cabecalho_list']))
    {
      $this->setDefault('cabecalho_list', $this->object->Cabecalho->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['preventiva_tipo_list']))
    {
      $this->setDefault('preventiva_tipo_list', $this->object->preventiva_tipo->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['users_list']))
    {
      $this->setDefault('users_list', $this->object->Users->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['grams_list']))
    {
      $this->setDefault('grams_list', $this->object->Grams->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['afiliados_list']))
    {
      $this->setDefault('afiliados_list', $this->object->Afiliados->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCabecalhoList($con);
    $this->savepreventiva_tipoList($con);
    $this->saveUsersList($con);
    $this->saveGramsList($con);
    $this->saveAfiliadosList($con);

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

  public function saveUsersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['users_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Users->getPrimaryKeys();
    $values = $this->getValue('users_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Users', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Users', array_values($link));
    }
  }

  public function saveGramsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['grams_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Grams->getPrimaryKeys();
    $values = $this->getValue('grams_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Grams', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Grams', array_values($link));
    }
  }

  public function saveAfiliadosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['afiliados_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Afiliados->getPrimaryKeys();
    $values = $this->getValue('afiliados_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Afiliados', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Afiliados', array_values($link));
    }
  }

}
