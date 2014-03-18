<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/index.css">
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.roundabout.js"></script>
<style>
      ul {
        list-style: none;
        padding: 0;
        margin: 0 auto;
        width: 400px;
        height: 445px;
      }
      li {
        height: 325px;
        width: 750px;
        background-color: #ccc;
        text-align: center;
        cursor: pointer;
      }
        li.roundabout-in-focus {
          cursor: default;
        }
      li span {
        display: block;
        padding-top: 6em;
      }

      #carbonads-container .carbonad {
        margin: 0 auto;
      }
    </style>
  <script>
   $(document).ready(function() {
      $('ul').roundabout();
   });
  </script>
  </head>

  <title> reasong </title>

  <body class="body">
    <div id="article_box">
