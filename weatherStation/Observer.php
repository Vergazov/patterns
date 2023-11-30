<?php
namespace weatherStation\app;

interface Observer
{
    public function update($temperature,$humidity,$pressure);
    public function getClassName();
}