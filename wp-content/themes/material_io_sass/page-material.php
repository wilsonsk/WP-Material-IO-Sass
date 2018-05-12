<?php
/*
  Template Name: Material Page
 */

// CUSTOM FIELDS

get_header();
?>

   <div class="container">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Header as you want </h3>
        </h3>
      </div>
      <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="active">
        </li>
          <a href="#menu">Animación</a>
        <li>
          <a href="#menu">Ilustración</a>
        </li>
        <li>
          <a href="#menu">Interacción</a>
        </li>
        <li>
          <a href="#">Blog</a>
        </li>
        <li>
          <a href="#">Acerca</a>
        </li>
        <li>
          <a href="#">contacto</a>
        </li>
      </ul>
    </nav>

    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
              <i class="glyphicon glyphicon-align-left"></i>
              <span>Toggle Sidebar</span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Page</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

 <?php
 get_footer();
