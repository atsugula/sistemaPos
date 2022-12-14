<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Crear venta

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>

      <li class="active">Crear venta</li>
      
    </ol>
    
  </section>

  <section class="content">
    
    <div class="row">

      <!--=====================================
                  EL FORMULARIO
      ======================================-->      
      
      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form action="form" method="post">

            <div class="box-body">              
                              
              <div class="box">

                <!--=====================================
                            ENTRADA DEL VENDEDOR
                ======================================-->                                   
                
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>

                      <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>

                    </div>

                  </div>

                <!--=====================================
                    ENTRADA EL CODIGO DE LA VENTA
                ======================================-->                                   
                
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>

                      <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10002343" readonly>

                    </div>

                  </div>

                <!--=====================================
                    ENTRADA DEL CLIENTE
                ======================================-->

                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>

                      <select class="form-control" name="seleccionarCliente" id="seleccionarCliente" required>
                        
                        <option value="">Seleccionar cliente</option>

                      </select>

                      <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>

                    </div>

                  </div>

                <!--=====================================
                      ENTRADA PARA AGREGAR PRODUCTO
                ======================================-->

                  <div class="form-group row nuevoProducto">

                    <!-- Descripcion del producto -->
                    
                    <div class="col-xs-6" style="padding-right: 0px">
                      
                      <div class="input-group">
                        
                        <span class="input-group-addon"><button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>

                        <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripcion del producto" required>

                      </div>

                    </div>

                    <!-- Cantidad del producto -->

                    <div class="col-xs-3">
                      
                      <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder="0" required>

                    </div>




                    <!-- Precio del producto -->

                    <div class="col-xs-3" style="padding-left: 0px">
                      
                      <div class="input-group">

                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                        
                        <input type="text" min="1" class="form-control" id="nuevoPrecioCompra" name="nuevoPrecioCompra" placeholder="000000" readonly required>                    

                      </div>

                    </div>

                  </div>   <!-- form group/row/nuevoProducto -->

                <!--=====================================
                      BOTON PARA AGREGAR PRODUCTO
                ======================================-->                  
                  <button class="btn btn-default hidden-lg">Agregar producto</button>

                  <hr>

                  <div class="row">

        <!--        =====================================
                            ENTRADA IMPUESTOS Y TOTAL
                    ====================================== -->
                      
                      <div class="col-xs-8 pull-right">
                        
                        <table class="table">
                          
                          <thead>
                            
                            <tr>
                              
                              <th>Impuestos</th>
                              <th>Total</th>

                            </tr>

                          </thead>

                          <tbody>
                            
                            <tr>
                              
                              <td style="width: 50%">
                                
                                <div class="input-group">
                                  
                                  <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>

                                  <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                                </div>

                              </td>

                              <td style="width: 50%">
                                
                                <div class="input-group">

                                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                  
                                  <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="00000" readonly required>
                                  
                                </div>

                              </td>

                            </tr>

                          </tbody>

                        </table>

                      </div>

                  </div>

                  <hr>

                <!--=====================================
                          ENTRADA METODO DE PAGO
                ======================================-->
                
                  <div class="form-group row">

                    <div class="col-xs-6" style="padding-right: 0px">

                      <div class="input-group">
                    
                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                          
                          <option value="">Seleccione metodo de pago</option>
                          <option value="efectivo">Efectivo</option>
                          <option value="tarjeta Credito">tarjeta Credito</option>
                          <option value="tarjeta Debito">tarjeta Debito</option>

                        </select>

                      </div>

                    </div>

                    <div class="col-xs-6" style="padding-left: 0px">
                      
                      <div class="input-group">
                        
                        <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Codigo transaccion" required>

                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                      </div>

                    </div>

                  </div>

                      
                
              </div>
              
            </div>  <!-- body -->

            <div class="box-footer">
              
              <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

            </div>

          </form>

        </div>

      </div>

      <!--=====================================
                LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive tablas">

              <thead>
                
                <tr>
                  
                  <th style="width: 10px">#</th>
                  <th>Imagen</th>
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>Categorias</th>
                  <th>Stock</th>
                  <th>Acciones</th>

                </tr>

              </thead>

              <tbody>
                
                <tr>
                  
                  <td>1.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>00123</td>
                  <td>hello my friend</td>
                  <td>hello moto</td>
                  <td>20</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-primary">Agregar</button>
                    </div>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar telefono" data-inputmask="'mask':'(999)-999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar direccion" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?php 

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>