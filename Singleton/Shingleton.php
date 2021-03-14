<?php

class SingletonSample {
    /**
     * メンバ変数
     */
    private $id;

    /**
     * 唯一のインスタンスを保持するクラス変数
     */
    private static $instance;

    private function __construct()
    {
        $this->id = md5(date('r').mt_rand());
    }

    /**
     * 唯一のインスタンスを返すメソッド
     * @return SingletonSample
     */
    public static function getSingletonInstance() {
        if(!isset(self::$instance)){
            self::$instance = new SingletonSample();
            echo 'インスタンスの初期化';
        }
        return self::$instance;
    }

    /**
     * IDを返す
     * @return int シングルトンインスタンスのid
     */
    public function getId() {
      return  $this->id;
    }

    /**
     * このインスタンスの複製を許可しないようにする
     * @throw RuntimeException
     */

    public final function __clone(){
        throw new RuntimeException('cloneは禁止です');
    }
}