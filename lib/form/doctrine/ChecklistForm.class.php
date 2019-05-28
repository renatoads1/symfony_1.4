<?php

/**
 * Checklist form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ChecklistForm extends BaseChecklistForm
{
  public function configure()
  {
      unset(
      		$this['created_at'],
      		$this['updated_at']
    	);


      $this->widgetSchema['data_de_execucao_inicio'] = new sfWidgetFormDateTime();
      $this->validatorSchema['data_de_execucao_inicio'] = new sfValidatorDateTime();

      $this->widgetSchema['data_de_execucao'] = new sfWidgetFormDateTime();
      $this->validatorSchema['data_de_execucao'] = new sfValidatorDateTime();

      $this->widgetSchema['relatorio_fotografico_pdf'] = new sfWidgetFormInputFile(array(
        'label' => 'Informações complementares <h6><i>Permitido arquivos .docx, .xlsx, .pdf, .rar e .zip com tamanho máximo de 25MB</i></h6>',
      ));
      $this->validatorSchema['relatorio_fotografico_pdf'] = new sfValidatorFile(array(
        'required' => false,
        'path' => sfConfig::get('sf_upload_dir').'/checklist',
        'mime_types' => array('application/pdf', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/x-gzip', 'application/x-rar'),
      ), array(
        'mime_types' => 'Tipo de arquivo não permitido ',
        'max_size' => 'Arquivo muito grande (Máximo de 25MB).',
      ));


      $this->mergePostValidator(new sfValidatorCallback(array('callback' => 'checkData'), array('invalid' => 'Incorrect current data.')));


      function checkData($validator, $values, $arguments){

        $data_hora_inicio = explode(" ", $values['data_de_execucao_inicio']);
        $data_inicio = explode("-", $data_hora_inicio[0]);
        $d_inicio = intval($data_inicio[2]);
        $m_inicio = intval($data_inicio[1]);
        $y_inicio = intval($data_inicio[0]);
        $res_inicio = checkdate($m_inicio, $d_inicio, $y_inicio);

        $data_hora = explode(" ", $values['data_de_execucao']);
        $data = explode("-", $data_hora[0]);
        $d = intval($data[2]);
        $m = intval($data[1]);
        $y = intval($data[0]);
        $res = checkdate($m, $d, $y);

        if($res_inicio != 1){
          throw new sfValidatorErrorSchema($validator, array('data_de_execucao_inicio' => new sfValidatorError($validator, 'Data inválida')));
        }
        
        if($res != 1){
          throw new sfValidatorErrorSchema($validator, array('data_de_execucao' => new sfValidatorError($validator, 'Data inválida')));
        }

        return $values; 
      }

  }
}
