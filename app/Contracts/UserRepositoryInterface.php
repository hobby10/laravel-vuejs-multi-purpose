<?php


namespace App\Contracts;


interface UserRepositoryInterface
{
    public function store($data);
    public function all();
}
