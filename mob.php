<?php
require_once './vendor/autoload.php';

Cydh\DP2RA\Monsters::parse([
    "input" => "mob.json",
    "output_mobdb" => "mob_db.txt",
    "output_mobskilldb" => "mob_skill.txt",
    "output_spawn" => "spawn.txt",
]);
