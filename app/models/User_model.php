<?php

class User_model extends Controller
{
    private $nama = "A. Musafir Khoirul F.";

    public function getUser()
    {
        return $this->nama;
    }
}
