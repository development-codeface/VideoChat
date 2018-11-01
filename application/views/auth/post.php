<!DOCTYPE html>
<html>
    <head>
        <title>Chrome Link Preview - Demo</title>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/postview/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/postview/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/postview/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/postview/css/bootstrap-linkpreview.css">
    </head>
    <body>
        <div id="wrapper">
            <div class="container-fluid">
                <div class="row-fluid">
                    <h3>Anchors</h3>
                    <a href="http://www.scoop.it/t/next-web-app">http://www.scoop.it/t/next-web-app</a>
                </div>
                <div id="preview-container"></div>
                <div class="row-fluid input-append">
                    <h3>Inputs</h3>
                    <input type="text" value="http://liberation.fr"></input>
                    <button id="refresh-button" class="btn" type="button">Preview</button>
                </div>
                <div id="preview-container2"></div>

                <div class="row-fluid input-append">
                    <h3>Inputs</h3>
                    <p class="post">http://liberation.fr</p>
                    <div class="postdetails"></div>
                </div>
                <div id="preview-container"></div>

                <div class="row-fluid input-append">
                    <h3>Inputs</h3>
                    <p class="post">http://www.youtube.com/watch?v=G0BcK2NEFPE</p>
                    <img src="w3javascript.gif" onload="loadImage()" width="100" height="132">
                    <div class="postdetails" ></div>
                </div>
                <div id="preview-container"></div>

            </div>
        </div>
        <style>
        .post{
            font-size :12px;
        }
        </style>
        <script>
           function loadImage(){
               alert($(this)..prev("post").text())
           }
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/postview/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/postview/js/proxy-ajax.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/postview/js/bootstrap-linkpreview.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/postview/js/main.js"></script> 
    </body>
</html>