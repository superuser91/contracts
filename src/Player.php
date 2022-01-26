<?php

namespace Vgplay\Contracts;

interface Player
{
    public function getId();
    public function payForReward(Product $reward);
}
