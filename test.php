<?php

namespace App;

class Test
{

    public function somefunction($foo, $bar, $baz)
    {
        $app = new AppContainer();
        $app->get('/hello/{name}', function ($name) use ($app) {
            return 'Hello ' . $app->escape($name);
        });

        return 'Hello World';
    }
}
