<?php
namespace App\Repo;

interface AdminsInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($id);
    // public function show($id);
}
