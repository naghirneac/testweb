<?php

class Masiv
{
    public function setElement($element)
    {
        $_SESSION['MASIV'][] = $element;
    }

    public function getElement($k)
    {
        return $_SESSION['MASIV'][$k];
    }

    public function getAll()
    {
        return $_SESSION['MASIV'];
    }

    public function deleteElement($k)
    {
        unset($_SESSION['MASIV'][$k]);
    }
}
