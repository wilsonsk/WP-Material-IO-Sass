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
      <div class="mdc-card__actions">
        <i class="mdc-icon-toggle material-icons mdc-card__action mdc-card__action--icon"
           tabindex="0"
           role="button"
           aria-pressed="false"
           aria-label="Add to favorites"
           title="Add to favorites"
           data-toggle-on='{"content": "favorite", "label": "Remove from favorites"}'
           data-toggle-off='{"content": "favorite_border", "label": "Add to favorites"}'>
          favorite_border
        </i>
        <i class="material-icons mdc-card__action mdc-card__action--icon" tabindex="0" role="button" title="Share">share</i>
        <i class="material-icons mdc-card__action mdc-card__action--icon" tabindex="0" role="button" title="More options">more_vert</i>
      </div>
    </div>
  </div>

 <?php
 get_footer();
