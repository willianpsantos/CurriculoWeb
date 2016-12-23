<?php 
    include('init.php');
 ?>

<!DOCTYPE html>

<html>
<head>
    <?php 
        include_once 'bundles.php';
    ?>

    <script type="text/javascript">
        window.app = {
            rootUrl : '<?= $_GLOBAL_ROOT_URL ?>'
        };

        requirejs.config({
            baseUrl: 'js',
            paths: {
                jquery: 'jquery-3.1.1.min'
            }
        });

        requirejs(['jquery'], function(jquery){            
            $('body').CurriculoWeb();
        });  
    </script>
</head>
<body>    
</body>
</html>