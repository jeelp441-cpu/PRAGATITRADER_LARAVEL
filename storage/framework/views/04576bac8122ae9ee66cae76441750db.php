<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | Pragati Traders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg, #e8f5e9, #f1f8f4);
            font-family: 'Segoe UI', sans-serif;
        }

        .pay-card{
            background: white;
            border-radius: 28px;
            padding: 35px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.12);
            animation: slideUp .8s ease;
        }

        @keyframes slideUp{
            from{ opacity:0; transform:translateY(40px); }
            to{ opacity:1; transform:translateY(0); }
        }

        .pay-method{
            border: 2px solid #e0f2e9;
            border-radius: 18px;
            padding: 14px;
            margin-bottom: 14px;
            cursor: pointer;
        }

        .pay-btn{
            background: #1b5e20;
            color: white;
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 18px;
            font-weight: 800;
        }
    </style>
</head>

<body>

<div class="container mt-5 mb-5">
    <h2 class="fw-bold text-center mb-4">Secure Payment</h2>

    <div class="pay-card mx-auto" style="max-width:480px">

        <form method="POST" action="<?php echo e(route('payment.success')); ?>">
            <?php echo csrf_field(); ?>

            <!-- PAYMENT OPTIONS -->
            

            <div class="pay-method">
                <input type="radio" name="method" value="cod">
                💵 Cash on Delivery
            </div>

            <!-- PASS CART PRODUCTS SAFELY -->
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="products[<?php echo e($index); ?>][id]" value="<?php echo e($item['id']); ?>">
    <input type="hidden" name="products[<?php echo e($index); ?>][qty]" value="<?php echo e($item['qty']); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <button type="submit" class="pay-btn mt-4">
                Pay Now (Demo)
            </button>
        </form>

        <p class="text-muted text-center mt-3">
           
        </p>

    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/payment.blade.php ENDPATH**/ ?>