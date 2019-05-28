<?php

/**
 * Chamado form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class ChamadoForm extends BaseChamadoForm
{
  public function configure()
  {
    unset(
      $this['created_at'],$this['updated_at'],$this['os']
    );


    $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));

     $this->widgetSchema['justificativa'] = new sfWidgetFormTextarea(array(
        'label' => 'Descrição do serviço solicitado',
      ));

      $this->validatorSchema['justificativa'] = new sfValidatorString(array(
        'max_length' => 4000
      ), array(
        'max_length' => '<p class="text-danger">Descrição do serviço muito grande (Máximo 4000 caracteres)</p>',
      ));

      $this->widgetSchema['anexos'] = new sfWidgetFormInputFile(array(
      'label' => 'Foto do local <h6><i>Permitido apenas uma imagem ou arquivo zip com tamanho máximo de 25MB</i></h6>',
      )); 

      $this->validatorSchema['anexos'] = new sfValidatorFile(array(
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/chamados',
      'mime_types' => array('image/jpeg', 'image/png', 'image/gif', 'application/zip', 'application/x-gzip', 'application/x-rar'),
      'max_size' => '25000000', 
      ), array(
      'mime_types' => '<p class="text-danger">Tipo de arquivo não permitido</p> ',
      'max_size' => '<p class="text-danger">Arquivo muito grande (Máximo de 25MB).</p>',

       ));


    $this->widgetSchema['estado'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Chamado')->getEstados(),
      'expanded' => true,
    ), array('onchange' => 'getSiglas(this.value, 0)'));

    $this->validatorSchema['estado'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Chamado')->getEstados()),   
      'required' => true,
    ));


    $this->widgetSchema['sigla_da_estacao'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Chamado')->getSiglas()
    ), array('onchange' => 'getInfopredial(this.value, 0)'));

    $this->validatorSchema['sigla_da_estacao'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Chamado')->getSiglas()),
      'required' => true,
    ));


    $this->widgetSchema['tipo_de_servico'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Chamado')->getTypes()
    ), array('onchange' => 'getRecursoRequerido(this.value, 0)'));
    
    $this->validatorSchema['tipo_de_servico'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Chamado')->getTypes()),
      'required' => true,
    ));

   
    $this->widgetSchema['recurso_servico_requerido'] = new sfWidgetFormChoice(array(
      'choices' => Doctrine_Core::getTable('Chamado')->getServices()
    ), array('onchange' => 'getOutros(this.value, 0)'));
   
    $this->validatorSchema['recurso_servico_requerido'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Chamado')->getServices()),
      'required' => true,
    ));


#    $this->validatorSchema['cpf'] = new sfValidatorCpfCnpj(array(
#      'type' => 'cpf',
#    ));

    //$this->validatorSchema['celular'] = new sfValidatorTelefone(array()); 

    $this->widgetSchema->setHelp('complemento', 'Ex.: Sala x, 1° andar');
    //$this->widgetSchema->setHelp('anexos', 'Ex.: Sala x, 1° andar');

    $this->widgetSchema['cidade'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['endereco'] = new sfWidgetFormTextarea(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['nome'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['email'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['celular'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['gram'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['sigla_da_estacao'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['prioridade'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));

    $this->validatorSchema['cidade'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['endereco'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorchema['nome'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['celular'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['gram'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['sigla_da_estacao'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));
    $this->validatorSchema['prioridade'] = new sfValidatorString(array('required' => true), array('required' => '<p class="text-danger">Preencha essa campo</p>'));

    $this->widgetSchema->setLabels(array(
      'email' => 'E-mail',
      'estado' => 'Estado(UF)',
      'sigla_da_estacao' => 'Sigla da estação',
      'endereco' => 'Endereço',
      'tipo_de_servico' => 'Tipo de serviço',
      'recurso_servico_requerido' => 'Recurso/Serviço requerido',
      'gram' => 'GRAM'
     ));

 }
}
