<?php


namespace app\controllers\admin;

use app\interfaces\ControllerInterface;

class Product implements ControllerInterface
{
    public function index(array $args)
    {
        var_dump('index');
        die();
    }

    public function edit(array $args)
    {
        var_dump($args);
        die();
    }

    public function show(array $args)
    {
        // TODO: Implement show() method.
    }

    public function update(array $args)
    {
        // TODO: Implement update() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function destroy(array $args)
    {
        // TODO: Implement destroy() method.
    }

}
