<?php

/**
 * Afiliado form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AfiliadoForm extends BaseAfiliadoForm
{
  public function configure()
  {
	  
	unset(
		$this['created_at'], $this['updated_at'], $this['ativado']
	);  


	$this->validatorSchema['email'] = new sfValidatorAnd(array(
    $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));

/*	  
	//CAMPOS QUE SÃO EXIBIDOS NA TELA
	$this->useFields(array(
      'empresa', 
      'email', 
      'token',
	  'uf_list',
	  'contract_list',
	  'gram_list',
    ));  
	  
	
	//NOME QUE SERA EXIBIDO NO LABEL DOS BOTÕES
	$this->widgetSchema->setLabels(array(
		'empresa' => 'Empresa',
		'email'	  => 'E-mail',
		'token'	  => 'TOKEN',
		'uf_list' => 'UF',
		'gram_list' => 'GRAM',
		'contract_list' => 'Contrato',
    )); 	
	  
	  
	$this->validatorSchema['empresa']   = new sfValidatorString();
	
	$this->widgetSchema['empresa'] = new sFWidgetFormChoice(array(
		'choices' => Doctrine_Core::getTable('Afiliado')->getEmpresas(),
		'multiple' => false,
		'expanded' => false,
	));	
	  
	  
	$this->validatorSchema['email'] = new sfValidatorAnd(array(
    $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));  
	  
	  */
  }
}
