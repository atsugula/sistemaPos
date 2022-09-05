<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu" data-widget="tree">
		            
		    <li class="header">MENU PRINCIPAL</li>
		    <?php

		    if ($_SESSION["perfil"] == "Administrador") {

		    	echo '<li class="active">
				    	<a href="inicio">
				    		<i class="fa fa-slideshare"></i>
				     		<span>Inicio</span>
				     	</a>
					  </li>
					  <li>
				    	<a href="usuarios">
				    		<i class="fa fa-users"></i>
				     		<span>Usuarios</span>
					    </a>
					   </li>';

		    }

		    if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial") {

		    	echo '	<li>
					    	<a href="categorias">
					    		<i class="fa fa-puzzle-piece"></i> 
					    		<span>Categorias</span>
					    	</a>
				       	</li>
				       	<li>
				    		<a href="productos">
				    			<i class="fa fa-cube"></i> 
				    			<span>Productos</span>
				    		</a>
				    	</li>';

		    }

		    if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor") {

		    	echo '	<li>
					    	<a href="clientes">
					    		<i class="fa fa-users"></i> 
					    		<span>Clientes</span>
					    	</a>
					    </li>';

		    }
		    
		    if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

		    	echo '<li class="treeview">

				        <a href="#">
				          <i class="fa fa-bar-chart"></i> <span>Ventas</span>
				          <span class="pull-right-container">
				            <i class="fa fa-angle-left pull-right"></i>
				          </span>
				        </a>

				        <ul class="treeview-menu">
				          <li class="active">
				          	<a href="administrarVentas"><i class="fa fa-circle-o"></i> Administrar Ventas
				          	</a>
				          </li>
				          <li>
				          	<a href="crearVentas">
				          		<i class="fa fa-circle-o"></i> Crear Ventas
				          	</a>
				          </li>';

	          	if ($_SESSION["perfil"] == "Administrador"){

	          		echo '<li>
				          	<a href="reporteVentas">
				          		<i class="fa fa-circle-o"></i> Reporte Ventas
				          	</a>
				          </li>';

	          	}   
		    
		    	echo '</ul>

		    </li>';

		}

		?>

		</ul>

	</section>

</aside>