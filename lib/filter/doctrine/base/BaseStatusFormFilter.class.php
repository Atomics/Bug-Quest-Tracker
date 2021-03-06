<?php

/**
 * Status filter form base class.
 *
 * @package    Bug Quest Tracker
 * @subpackage filter
 * @author     Matthieu Mystick Derasse
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStatusFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'colors' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'   => new sfValidatorPass(array('required' => false)),
      'colors' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('status_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Status';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'name'   => 'Text',
      'colors' => 'Text',
    );
  }
}
