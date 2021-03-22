<?php

namespace App\Repository;

 interface I_RecetaRepository{

    public function storeReceta($request);
    public function createReceta();
    public function showReceta($id);

 }
?>