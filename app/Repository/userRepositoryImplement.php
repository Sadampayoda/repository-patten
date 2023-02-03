<?php

namespace app\Repository;
use app\Repository\userRepository;

class userRepositoryImplement implements userRepository{
    public function index()
    {
        $tes = 'welcome';
        return $tes;
    }
}