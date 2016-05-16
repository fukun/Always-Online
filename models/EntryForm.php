<?php
/**
 * Created by PhpStorm.
 * User: kun
 * Date: 16-5-13
 * Time: 下午4:23
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}