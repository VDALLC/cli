<?php
namespace Vda\Cli;

interface ICommand
{
    public function execute(array $argv);
}
