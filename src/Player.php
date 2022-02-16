<?php

namespace Vgplay\Contracts;

interface Player
{
    public function getId();
    public function pay($amount, $type);
}
