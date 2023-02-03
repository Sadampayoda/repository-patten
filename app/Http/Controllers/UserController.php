<?php

namespace App\Http\Controllers;

use app\Repository\userRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepositoryImplement;
    public function __construct(userRepository $userRepository)
    {
        $this->userRepositoryImplement = $userRepository;
    }

    public function index()
    {
        $result = $this->userRepositoryImplement->index();
        return view($result);
    }
}