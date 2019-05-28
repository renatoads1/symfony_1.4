<?php

/**
 * Log filter form.
 *
 * @package    usuario
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LogFormFilter extends BaseLogFormFilter
{
  public function configure()
  {
   unset(
      $this['updated_at'], $this['created_at'],
      $this['justificativa_status']
    );

    $this->setWidget('chamado_id', new sfWidgetFormFilterInput(array('with_empty' => false)));
    $this->setWidget('usuario', new sfWidgetFormFilterInput(array('with_empty' => false)));

    $this->widgetSchema->setLabels(array(
      'chamado_id' => 'ID do chamado',
      'data_hora' => 'Período',
      'acao' => 'Ação executada',
      'usuario' => 'Usuário',
      'grupo' => 'Perfil',
      'gram' => 'GRAM'
     ));

  }
}
