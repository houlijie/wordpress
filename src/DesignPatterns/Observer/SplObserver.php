<?php

namespace src\DesignPatterns\Observer;

interface SplObserver
{
    public function update(SplSubject $subject);   
}
