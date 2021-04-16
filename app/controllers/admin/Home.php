<?php


namespace app\controllers\admin;

use app\interfaces\ControllerInterface;

class Home implements ControllerInterface
{
    public array $data = [];
    public string $view;
    public string $master;

    public function index(array $args)
    {
        $this->data = [
            'title' => 'Admin'
        ];
        $this->master = 'admin/index.php';
        $this->view = 'admin/home.php';
    }

    public function edit(array $args)
    {
        // TODO: Implement edit() method.
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
