<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm  extends  Model
{
    public $username;
    public $email;
    public $password;
    public $nombre;
    public $apaterno;
    public $amaterno;
    public $matricula;
    public $id_carrera;
    public $id_plan;
    public $celular;
    public $semestre;
    public $sexo;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required','message' => 'Campo obligatorio'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Ya existe Usuario.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required','message' => 'Campo obligatorio'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Ya existe Correo'],

            ['password', 'required','message' => 'Campo obligatorio'],
            ['password', 'string', 'min' => 6],
            [['nombre','apaterno','amaterno','matricula','id_carrera','id_plan','sexo'],'required','message' =>'Campo obligatorio'],
            [['nombre','apaterno','amaterno','matricula','id_carrera','id_plan','celular','sexo'],'safe'],

          
            
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->nombre=$this->nombre;
            $user->apaterno = $this->apaterno;
            $user->amaterno = $this->amaterno;
            $user->matricula = $this->matricula;
            $user->id_plan = $this->id_plan;
            $user->id_carrera = $this->id_carrera;
            $user->semestre = $this->semestre;
            $user->celular = $this->celular;
            $user->sexo = $this->sexo;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}

