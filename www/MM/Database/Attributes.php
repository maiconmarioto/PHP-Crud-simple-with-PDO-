<?php

namespace MM\Database;

class Attributes
{
    public function createFields($attributes)
    {
        return implode(',', array_keys($attributes));
    }

    public function createParams($attributes)
    {
        return ':' . implode(', :', array_keys($attributes));
    }

    public function bindCreateParameters($attributes)
    {
        $fields = $this->createFields($attributes);
        $bindParameters = array_combine(explode(',', $fields), array_values($attributes));
        return $bindParameters;
    }

    public function updateCombineFields($attributes)
    {
        $keys = array_keys($attributes);
        $implode = ':' . implode('=:', $keys);
        $combine = array_combine($keys, explode('=', $implode));
        return $combine;
    }

    public function updateFields($attributes)
    {
        $combine = $this->updateCombineFields($attributes);
        $query = null;
        // name=:name,email=:email,
        foreach($combine as $key => $value){
            $query.=$key.' = '.$value.', ';
        }
        // name=:name,email=:email
        $newQuery = rtrim($query,', ');
        return $newQuery;
    }

    public function updateBindParameters($attributes)
    {
        $keys = array_keys($attributes);
        $implode = ':'.implode(',:', $keys);

        $combineAll = array_combine(explode(',', $implode), array_values($attributes));
        return $combineAll;
    }
}