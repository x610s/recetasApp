<?php

namespace App\Repository;

 interface I_RecetaRepository{

    public function storeReceta($request);
    public function categorias();
    public function showReceta($id);
    public function deleteReceta($id);
    public function editarReceta($request,$receta);
 }
?>