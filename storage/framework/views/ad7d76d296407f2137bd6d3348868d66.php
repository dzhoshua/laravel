<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php $__env->startSection('title'); ?> Default title <?php echo $__env->yieldSection(); ?></title>
  <style>
    table{
      border: 2px solid black;
      border-collapse: collapse;
    }
    td, th{
      padding: 5px;
      border: 1px solid black;
    }
    th{
      background-color: #fcd4db;
    }
    li{
      display:inline;
      padding-right:20px;
    }
    a{
      text-decoration: none; 
    }
  </style> 
</head>
<body>
    
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
    <hr>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /mnt/c/Users/kozic/laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>