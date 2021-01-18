<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data = [
            'title' => 'User Setting',
            'subtitle' => 'Administrator : User Setting',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'data' => $query->getResult()
            // 'users' => $this->UserModel->findAll()

        ];


        return view('admin/users/v_users', $data);
    }

    //--------------------------------------------------------------------

}
