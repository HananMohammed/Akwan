<?php


namespace App\repository;
use ErrorException;
use Illuminate\Database\Eloquent\Relations\Relation;
use ReflectionClass;
use ReflectionMethod;

class relationRepository
{
    public static function relationships($model) {
         $relationships = [];
        $allmethod=[];

        foreach((new ReflectionClass($model))->getMethods(ReflectionMethod::IS_PUBLIC) as $method)
        {
            //get_class — Returns the name of the class of an object
            if ($method->class != get_class($model)) {
             //$allmethod[$method->getName()]=[$method->getName()];
                // dd($method->class);
               continue;
            }
            $returnMethod = $method->invoke($model);

            if((new ReflectionClass($returnMethod))->getShortName()=='HasMany'){

                $relationships[]=[$method->getName()][0] ;
            }

        }

        return $relationships;
    }
}
