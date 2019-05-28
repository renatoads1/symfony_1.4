<?php

/**
 * Orcamento form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OrcamentoForm extends BaseOrcamentoForm
{
  public function configure()
  {
     unset(
      $this['created_at'],$this['updated_at'],
      $this['usuario'],$this['data_hora'],
      $this['email']
     );

    $this->widgetSchema['anexo'] = new sfWidgetFormInputFile(array(
      'label' => 'Fotos <h6><i>Permitido apenas uma imagem ou arquivo zip com tamanho máximo de 25MB</i></h6>',
    ));

    $this->validatorSchema['anexo'] = new sfValidatorFile(array(
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/chamados',
      'mime_types' => array('image/jpeg', 'image/png', 'image/gif', 'application/zip','application/x-gzip', 'application/x-rar'),
    ), array(
      'mime_types' => 'Tipo de arquivo não permitido ',
      'max_size' => 'Arquivo muito grande (Máximo de 25MB).',
    ));

    $this->widgetSchema['informacao'] = new sfWidgetFormInputFile(array(
      'label' => 'Informações complementares <h6><i>Permitido arquivos .docx, .xlsx, .pdf, .rar e .zip com tamanho máximo de 25MB</i></h6>',
    ));

    $this->validatorSchema['informacao'] = new sfValidatorFile(array(
      'required' => false,
      'path' => sfConfig::get('sf_upload_dir').'/chamados',
      'mime_types' => array('application/pdf', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/x-gzip', 'application/x-rar'),
    ), array(
      'mime_types' => 'Tipo de arquivo não permitido ',
      'max_size' => 'Arquivo muito grande (Máximo de 25MB).',
    ));


    $this->validatorSchema['observacao'] = new sfValidatorString(array(
      'required' => false,
      'max_length' => 4000
    ), array(
      'max_length' => '<p class="text-danger">Observação muito grande (Máximo 4000 caracteres)</p>',
    ));
  

    $this->mergePostValidator(new sfValidatorCallback(array('callback' => 'checkTotal'), array('invalid' => 'Incorrect current total')));
    
    function checkTotal($validator, $values, $arguments)
    {
      $valor = 0.00;

      if($values['total'] <= $valor){
        throw new sfValidatorErrorSchema($validator, array('total' => new sfValidatorError($validator, 'Valor inválido - preencha o orçamento')));
      }

      return $values;
    }


    $this->widgetSchema['controle_id'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['responsavel'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));

    $this->widgetSchema['observacao'] = new sfWidgetFormTextarea();

    $this->widgetSchema['subtotalGeral'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['subtotalMaterial'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['subtotalDiversos'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['subtotal20'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['subtotalPini'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['subtotalPiniBdi'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));
    $this->widgetSchema['total'] = new sfWidgetFormInputText(array(), array('readonly' => 'readonly'));

    $this->widgetSchema->setLabels(array(
      'controle_id' => 'N° do chamado',
      'responsavel' => 'Realizado por',
      'observacao' => 'Observação',
      'subtotalGeral' => 'Subtotal',
      'subtotalMaterial' => 'Subtotal',
      'subtotalDiversos' => 'Subtotal',
      'subtotalPini' => 'Subtotal',
      'subtotal20' => '20%',
      'total' => 'Total',
    ));

  }
}
