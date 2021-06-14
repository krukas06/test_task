<?php
namespace App\Repositories;

use App\Mess;
class MessageRepository extends Repository
{
    public function __construct(Mess $message){
        $this->model=$message;
    }
}
