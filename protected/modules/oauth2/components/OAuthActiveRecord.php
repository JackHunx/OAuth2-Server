<?php
/**
 * OAuthActiveRecord.php
 * 
 * @author Jack Hunx <jack.hunx@gmail.com>
 */

/**
 * OAuthActiveRecord is extends CActiveRecord
 * 
 * �� {CActiveRecord->getDbConnection())} ����������д,�������module�е����ݿ�����
 * �ұ�module��model�̳д���
 */
class OAuthActiveRecord extends CActiveRecord
{
    //db connection id
    public $connectionID = 'oauthdb';
    /**
     * @return CDbConnection the DB connection instance
     * @throws CException if {@link connectionID} does not point to a valid application component.
     */
    public function getDbConnection()
    {
        if (self::$db !== null)
            return self::$db;
        elseif ((self::$db = Yii::app()->getModule('oauth2')->getComponent($this->
            connectionID)) instanceof CDbConnection)
            return self::$db;
        else
            throw new CException(Yii::t('yii',
                'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.',
                array('{id}' => $this->connectionID)));
    }
}
