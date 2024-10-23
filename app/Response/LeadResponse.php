<?php

namespace App\Response;

class LeadResponse
{

    private $leads;
    private $totalLeads;
    private $permissions;
    private $parameters;

    /**
     *
     * @return array
     */
    public function getLeads()
    {
        return $this->leads;
    }

    /**
     *
     * @param array $leads
     */
    public function setLeads($leads)
    {
        $this->leads = $leads;
    }

    /**
     *
     * @return array
     */
    public function getTotalLeads()
    {
        return $this->totalLeads;
    }

    /**
     *
     * @param array $totalLeads
     */
    public function setTotalLeads($totalLeads)
    {
        $this->totalLeads = $totalLeads;
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
