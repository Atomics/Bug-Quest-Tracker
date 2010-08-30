<?php

/**
 * BaseComments
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $quest_id
 * @property string $content
 * @property integer $author_id
 * @property Quest $Quest
 * @property sfGuardUser $User
 * 
 * @method integer     getQuestId()   Returns the current record's "quest_id" value
 * @method string      getContent()   Returns the current record's "content" value
 * @method integer     getAuthorId()  Returns the current record's "author_id" value
 * @method Quest       getQuest()     Returns the current record's "Quest" value
 * @method sfGuardUser getUser()      Returns the current record's "User" value
 * @method Comments    setQuestId()   Sets the current record's "quest_id" value
 * @method Comments    setContent()   Sets the current record's "content" value
 * @method Comments    setAuthorId()  Sets the current record's "author_id" value
 * @method Comments    setQuest()     Sets the current record's "Quest" value
 * @method Comments    setUser()      Sets the current record's "User" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComments extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comments');
        $this->hasColumn('quest_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('content', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1000,
             ));
        $this->hasColumn('author_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Quest', array(
             'local' => 'quest_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'author_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}