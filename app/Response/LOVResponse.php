<?php

namespace App\Response;

class LOVResponse
{
    private $lovs;
    private $totalLOVs;
    private $permissions;
    private $parameters;

    /**
     *
     * @return array
     */
    public function getLOVs()
    {
        return $this->lovs;
    }

    /**
     *
     * @param array $lovs
     */
    public function setLOVs($lovs)
    {
        $this->lovs = $lovs;
    }

    /**
     *
     * @return array
     */
    public function getTotalLOVs()
    {
        return $this->totalLOVs;
    }

    /**
     *
     * @param array $totalLOVs
     */
    public function setTotalLOVs($totalLOVs)
    {
        $this->totalLOVs = $totalLOVs;
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
