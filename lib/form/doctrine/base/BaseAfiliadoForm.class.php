<?php

/**
 * Afiliado form base class.
 *
 * @method Afiliado getObject() Returns the current form's model object
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAfiliadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'empresa'       => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'token'         => new sfWidgetFormInputText(),
      'ativado'       => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'uf_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf')),
      'contract_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardContract')),
      'gram_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram')),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa'       => new sfValidatorString(array('max_length' => 255)),
      'email'         => new sfValidatorString(array('max_length' => 255)),
      'token'         => new sfValidatorString(array('max_length' => 255)),
      'ativado'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'uf_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUf', 'required' => false)),
      'contract_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardContract', 'required' => false)),
      'gram_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGram', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Afiliado', 'column' => array('email'))),
        new sfValidatorDoctrineUnique(array('model' => 'Afiliado', 'column' => array('token'))),
      ))
    );

    $this->widgetSchema->setNameFormat('afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['uf_list']))
    {
      $this->setDefault('uf_list', $this->object->Uf->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['contract_list']))
    {
      $this->setDefault('contract_list', $this->object->Contract->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['gram_list']))
    {
      $this->setDefault('gram_list', $this->object->Gram->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveUfList($con);
    $this->saveContractList($con);
    $this->saveGramList($con);

    parent::doSave($con);
  }

  public function saveUfList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['uf_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Uf->getPrimaryKeys();
    $values = $this->getValue('uf_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Uf', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Uf', array_values($link));
    }
  }

  public function saveContractList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['contract_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Contract->getPrimaryKeys();
    $values = $this->getValue('contract_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Contract', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Contract', array_values($link));
    }
  }

  public function saveGramList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['gram_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Gram->getPrimaryKeys();
    $values = $this->getValue('gram_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Gram', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Gram', array_values($link));
    }
  }

}
