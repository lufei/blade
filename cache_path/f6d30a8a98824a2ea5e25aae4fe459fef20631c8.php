<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php if (\luoyy\Blade\Support\Blade::check('env', 'local')): ?>
    // The application is in the local environment...
    <?php elseif (\luoyy\Blade\Support\Blade::check('env', 'testing')): ?>
    // The application is in the testing environment...
    <?php else: ?>
    // The application is not in the local or testing environment...
    <?php endif; ?>
    <?php if($a == 1): ?>:
    123
    <?php endif; ?>
    <?php echo e($a); ?>

</body>

</html><?php /**PATH E:\wamp64\www\blade/hello.blade.php ENDPATH**/ ?>