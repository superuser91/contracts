<?php

namespace Vgplay\Contracts;

interface Deliverable
{
    public function deliver(Player $player, array $data);
}
