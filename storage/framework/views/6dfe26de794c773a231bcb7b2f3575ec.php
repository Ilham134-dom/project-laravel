<!DOCTYPE html>
<html>
<head>
    <title>Digital Identities</title>
</head>
<body>
    <h1>Digital Identities</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>National ID</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $identities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($identity->id); ?></td>
                <td><?php echo e($identity->name); ?></td>
                <td><?php echo e($identity->email); ?></td>
                <td><?php echo e($identity->national_id); ?></td>
                <td><?php echo e($identity->dob); ?></td>
                <td><?php echo e($identity->address); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Windows\System32\digiid\resources\views/digital_identities/index.blade.php ENDPATH**/ ?>