<?php
require_once 'AbstractDisplay.php';

/**
 * concreteClassに相当する
 */
class ListDisplay extends AbstractDisplay {
    protected function displayHeader(){
        echo '<ul>';
    }

    protected function displayBody()
    {
        foreach ($this->data as $key => $value) {
            echo '<li>'.$value. '</li>>';
        }
    }

    protected function displayFooter()
    {
        echo '</ul>';
    }
}