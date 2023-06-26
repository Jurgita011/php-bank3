<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;


class AccountsController
{
    public function index()
    {
        $data = new FileWriter('accounts');
        
        return App::view('accounts/index', [
            'pageTitle' => 'Sąskaitų sąrašas',
            'accounts' => $data->showAll(),
        ]);
    }

    public function create()
    {
        return App::view('accounts/create', [
            'pageTitle' => 'Pridėti sąskaitą',
        ]);
    }

    public function store(array $request)
    {
        $data = new FileWriter('accounts');
        $data->create($request);

        header('Location: /accounts');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('accounts');
        $account = $data->show($id);

        return App::view('accounts/edit', [
            'pageTitle' => 'Redaguoti sąskaitą',
            'accounts' => $account,
        ]);
    }

    public function update(int $id, array $request)
    {
        $data = new FileWriter('accounts');
        $data->update($id, $request);

        header('Location: /accounts');
    }

    public function delete(int $id)
    {
        $account = (new FileWriter('accounts'))->show($id);
        return App::view('accounts/delete', [
            'pageTitle' => 'Ištrinti sąskaitą',
            'accounts' => $account,
        ]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('accounts');
        $data->delete($id);

        header('Location: /accounts');
    }

}