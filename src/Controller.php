<?php

namespace Ductong\BaseMvc;

class Controller {
    // Render ra giao diện client
    protected function render($view, $data = []) {
        
        extract($data);
        
        include "Views/$view.php";
    }

    // Render ra giao diện Adminn
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;

        extract($data);

        include "Views/admin/master.php";
    }
}