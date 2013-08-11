<?php
/**
 * This is the model class for table what config in the config file {oauth2->table}
 * 
 * @property string $username
 * @property string $password
 */
class OAuthUser extends OAuthActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __class__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return Yii::app()->getModule('oauth2')->oauth->userTable;
    }
    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }
   // public function search()
//    {
//        $criteria = new CDbCriteria;
//
//        $criteria->compare('username', $this->username, true);
//        $criteria->compare('password', $this->password);
//    }
    //get password
    public function getPassword()
    {
        $relation = Yii::app()->getModule('oauth2')->password;
        return $this->$relation;
    }
    public function getUserId()
    {
        $relation = Yii::app()->getModule('oauth2')->userid;
        return $this->$relation;
    }
}
