<?php

namespace App\Response;

class UserResponse
{

    private $users;
    private $totalUsers;
    private $permissions;
    private $parameters;

    /**
     *
     * @return array
     */
    public function GetUsers()
    {
        return $this->users;
    }

    /**
     *
     * @param array $users
     */
    public function SetUsers($users)
    {
        $this->users = $users;
    }

    /**
     *
     * @return array
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    /**
     *
     * @param array $totalUsers
     */
    public function setTotalUsers($totalUsers)
    {
        $this->totalUsers = $totalUsers;
    }

    /**
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     *
     * @param array $permission
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     *
     * @param array $permission
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
}
