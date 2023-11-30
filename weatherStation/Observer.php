<?php
namespace weatherStation\app;

interface Observer
{
    public function update(Observable $obs);
    public function getClassName();
}