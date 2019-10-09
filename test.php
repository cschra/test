<?php

class Test
{

    public function somefunction($foo, $bar,$baz)
    {
	$app->get('/hello/{name}', function ($name) use ($app) {
    	    return 'Hello ' . $app->escape($name);
	});
	
	return 'Hello World';
    }
}

