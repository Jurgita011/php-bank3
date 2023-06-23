<?php

namespace Bank;

use Bank\Controllers\AccountsController;
use Bank\Controllers\HomeController;

class App
{

    static public function start()
    {

        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);

        return self::router($url);
    }

    static private function router($url)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == '') {
            return (new HomeController)->index();
        }

        // Account START
        else if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'account') {
            return (new AccountsController)->index();
        } else if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'account' && $url[1] == 'create') {
            return (new AccountsController)->create();
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 2 && $url[0] == 'account' && $url[1] == 'store') {
            return (new AccountsController)->store($_POST);
        } else if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 3 && $url[0] == 'account' && $url[1] == 'edit') {
            return (new AccountsController)->edit($url[2]);
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 3 && $url[0] == 'account' && $url[1] == 'update') {
            return (new AccountsController)->update($url[2], $_POST);
        } else if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 3 && $url[0] == 'account' && $url[1] == 'delete') {
            return (new AccountsController)->delete($url[2]);
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 3 && $url[0] == 'account' && $url[1] == 'destroy') {
            return (new AccountsController)->destroy($url[2]);
        }
        // Account END

        else {
            return self::view('404', [
                'pageTitle' => 'Page Not Found 404',
            ]);
        }
    }

    static public function view($path, $data = null)
    {
        if ($data) {
            extract($data);
        }

        ob_start();

        require __DIR__ . '/../view/top.php';
        require __DIR__ . '/../view/' . $path . '.php';
        require __DIR__ . '/../view/bottom.php';



        return ob_get_clean();
    }
}
