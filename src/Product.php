<?php

namespace Vgplay\Contracts;

interface Product
{
    public function purchase(Player $player, array $data);
}
