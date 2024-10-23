<?php
namespace App\Response;

class RolesResponse
{

    private $roles;
    private $totalRoles;

    /**
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     *
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     *
     * @return array
     */
    public function getTotalRoles()
    {
        return $this->totalRoles;
    }

    /**
     *
     * @param array $totalRoles
     */
    public function setTotalRoles($totalRoles)
    {
        $this->totalRoles = $totalRoles;
    }
}
