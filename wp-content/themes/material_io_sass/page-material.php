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
        <div class="mdc-card">
        <div class="mdc-card__media mdc-card__media--square">
        <div class="mdc-card__media-content">Title</div>
        </div>
        <!-- ... content ... -->
        <div class="mdc-card__actions">
        <div class="mdc-card__action-buttons">
        <button class="mdc-button mdc-card__action mdc-card__action--button">Action 1</button>
        <button class="mdc-button mdc-card__action mdc-card__action--button">Action 2</button>
        </div>
        <div class="mdc-card__action-icons">
        <i class="material-icons mdc-card__action mdc-card__action--icon" tabindex="0" role="button" title="Share">share</i>
        <i class="material-icons mdc-card__action mdc-card__action--icon" tabindex="0" role="button" title="More options">more_vert</i>
        </div>
        </div>
        </div>

        <div class="mdc-layout-grid" style="border:solid red 3px;">
          <div class="mdc-layout-grid__inner" style="border:solid green 2px;">
            <div class="mdc-layout-grid__cell" style="border:solid black 1px;">
              <h1>Test1</h1>
            </div>
            <div class="mdc-layout-grid__cell" style="border:solid black 1px;">
              <h1>Test2</h1>
            </div>
            <div class="mdc-layout-grid__cell--span-8-desktop" style="border:solid black 1px;">
              <h1>Test3</h1>
            </div>
          </div>
        </div>
  </div>



 <?php
 get_footer();
