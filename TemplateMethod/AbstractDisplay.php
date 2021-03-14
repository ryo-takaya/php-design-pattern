<?php

/**
 * Abstractクラスに相当
 */

abstract class AbstractDisplay {

    /**
     * 表示するデータ
     */
    protected $data;

    /**
     * 表示させたいデータを保持する
     * param array $data 表示させたいデータ
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * template methodに相当する
     */
    public function display(){
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * ヘッダーを表示させる
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayHeader();
    /**
     * ボディを表示させる
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayBody();
    /**
     * フッターを表示させる
     * サブクラスに実装を任せる抽象メソッド
     */
    protected  abstract function displayFooter();
}