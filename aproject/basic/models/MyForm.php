<?php

namespace  app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;

    public function rules() {
        return [
            [['name','email'],'required', 'message' => 'Не заполнено поле!'],
            ['email','email', 'message' => 'Неккоректный email адрес']
        ];
    }
}

?>