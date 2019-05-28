<?php

/**
 * Preventiva form.
 *
 * @package    usuario
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreventivaForm extends BasePreventivaForm
{
  /**
   * @see ManutencaoForm
   */
  public function configure()
  {
    parent::configure();

    $this->widgetSchema['captcha'] = new sfWidgetCaptchaGD();
    $this->validatorSchema['captcha'] = new sfCaptchaGDValidator(array('length' => 4));
  }
}
