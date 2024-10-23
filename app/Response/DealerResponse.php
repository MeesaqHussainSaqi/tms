<?php

namespace App\Response;

class DealerResponse
{

    private $dealers;
    private $totalDealers;
    private $permissions;
    private $parameters;

    /**
     *
     * @return array
     */
    public function getDealers()
    {
        return $this->dealers;
    }

    /**
     *
     * @param array $dealers
     */
    public function setDealers($dealers)
    {
        $this->dealers = $dealers;
    }

    /**
     *
     * @return array
     */
    public function getTotalDealers()
    {
        return $this->totalDealers;
    }

    /**
     *
     * @param array $totalDealers
     */
    public function setTotalDealers($totalDealers)
    {
        $this->totalDealers = $totalDealers;
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
