<?php

namespace App\Filters;

class UsersFilter extends Filter
{
    /**
     * @var array
     */
    protected $filterKeys = [
        'first_name' => 'filterByFirstName',
        'last_name' => 'filterByLastName',
        'email' => 'filterByEmail',
    ];

    /**
     * @return mixed
     */
    protected function filterByFirstName()
    {
        if ($this->request->has('first_name')) {
            $this->builder = $this->builder->where('first_name', $this->request->input('first_name'));
        }
    }

    /**
     * @return mixed
     */
    protected function filterByLastName()
    {
        if ($this->request->has('last_name')) {
            $this->builder = $this->builder->where('last_name', $this->request->input('last_name'));
        }
    }

    /**
     * @return mixed
     */
    protected function filterByEmail()
    {
        if ($this->request->has('email')) {
            $this->builder = $this->builder->where('email', $this->request->input('email'));
        }
    }
}