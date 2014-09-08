
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>CobrancaSis - Login</title>   
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <?php
    echo $this->Html->css('font-awesome/css/font-awesome.min.css');
    echo $this->Html->css('plugins/morris.css');
    echo $this->Html->css('sb-admin-2.css');
    echo $this->Html->css('plugins/timeline.css');
    echo $this->Html->css('plugins/metisMenu/metisMenu.min.css');
   echo $this->Html->css('bootstrap.min.css');
  ?>

</head>

<body>

    <body>
        <div class="container">
             <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>CobrancaSis - Login</title>   
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
        echo $this->Html->script('jquery-1.11.0.js');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('plugins/metisMenu/metisMenu.min.js');
        echo $this->Html->script('sb-admin-2.js');
    ?>

</head>

<body> 
        <div class="container">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

</body>
    
</html>
