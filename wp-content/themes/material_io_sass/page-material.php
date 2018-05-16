<?php
/*
  Template Name: Material Page
 */

// CUSTOM FIELDS

get_header();
?>

 <div class="container">
    <!-- Sidebar Holder -->
    <nav class="ui__sidebar">
      <div class="ui__sidebar-header">
        <h3>Header as you want </h3>
        </h3>
      </div>
      <ul class="list-unstyled ui__sidebar-components">
        <p>Dummy Heading</p>
        <li class="active">
        </li>
          <a href="#menu">Shop</a>
        <li>
          <a href="#menu">Blog</a>
        </li>
        <li>
          <a href="#menu">Chat</a>
        </li>
        <li>
          <a href="#">Contact Us</a>
        </li>
        <li>
          <a href="#">Photography </a>
        </li>
        <li>
          <a href="#">Portfolio</a>
        </li>
      </ul>
    </nav>

    <div class="ui__content">
      <ul class="mdc-image-list mdc-image-list--masonry my-masonry-image-list">
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="<?php bloginfo('template_directory') ?>/assets/img/nat-4.jpg"">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
        <li class="mdc-image-list__item">
          <img class="mdc-image-list__image" src="">
          <div class="mdc-image-list__supporting">
            <span class="mdc-image-list__label">Text label</span>
          </div>
        </li>
      </ul>

        <div class="mdc-layout-grid mdc-layout-grid--align-right" style="border:solid red 3px;">
          <div class="mdc-layout-grid__inner" style="border:solid green 2px;">
            <div class="mdc-layout-grid__cell--span-6" style="border:solid black 1px;">
              span 6
            </div>
            <div class="mdc-layout-grid__cell--span-6" style="border:solid black 1px;">
              span 6
            </div>
            <div class="mdc-layout-grid__cell--span-2" style="border:solid black 1px;">
              span 4
            </div>
          </div>
        </div>
  </div>



 <?php
 get_footer();
