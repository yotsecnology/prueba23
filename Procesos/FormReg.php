<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
extract($_REQUEST);
if (isset($Escogido)){
    if($Escogido=="basic"){
        ?>
       <div id="contact" class="container-fluid-contact bg-greycontact">
                    <p class="text-center">Completa este formulario con la información solicitada</p><br>
  <div class="row">
    <div class="col-sm-6">
        <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Nombre Empresa</label><input class="form-control"  id="name" name="name" placeholder="Nombre" type="text" required>
              </div>
          </div>
        <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Ubicación de la empresa</label><input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
              </div>
          </div>
        <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Teléfono</label><input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
              </div>
          </div>
        
        
        
    </div>
      
      <div class="col-sm-6 slideanim">
          <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Horario de atención</label><input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Busetas disponibles</label><input class="form-control" id="name" name="name" placeholder="Nombre" type="number" min="0" max="2" required>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-11 form-group">
                  <label>Cantidad de choferes disponibles</label><input class="form-control"  id="name" name="name" placeholder="Nombre" type="text" required>
              </div>
          </div>
          <div class="row">
              
          </div>
          
        
          
      </div>
      <div class="col-xs-12">
      <div class="row">
              <div class="col-sm-10 form-group">
          <label>Descripción</label></div></div>
        <div class="row">
            <div class="col-sm-10 form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
          </div>
          </div>

  </div>
</div>
    
        <?php
                
    }
}
