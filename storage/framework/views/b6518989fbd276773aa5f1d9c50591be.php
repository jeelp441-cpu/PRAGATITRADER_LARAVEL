<?php
/* FRONTEND IMAGE MAP (NO DB CHANGE) */
$productImages = [
    'Raw Betel Nut'     => 'https://th.bing.com/th/id/OIP.9FHVAuUnR2OpjPxDyfoEiQHaEx?w=297&h=191&c=7&r=0&o=7&pid=1.7&rm=3',
    'Organic Bettle Nut' => 'https://th.bing.com/th/id/OIP.oMuEeRxFWJ50aJC1LUkw5AHaE7?w=276&h=184&c=7&r=0&o=7&pid=1.7&rm=3',
    'Premium Betel Nut' => 'https://images.unsplash.com/photo-1627487777813-b34f88dbefb2',
    'Bettle Nut Powder' => 'https://th.bing.com/th/id/OIP.C5eJq4uIoRA2Se9blfpjwQHaGu?w=180&h=180&c=7&r=0&o=7&pid=1.7&rm=3',
    'Flavored Bettle Nut' => 'https://th.bing.com/th/id/OIP.lAlq1TxbPASe5JNd9O14WQHaHa?w=185&h=185&c=7&r=0&o=7&pid=1.7&rm=3',
    'Processed Bettle Nut' => 'https://th.bing.com/th/id/OIP.tImEQsKwpmC9RXqdIBrrJwHaFW?w=283&h=191&c=7&r=0&o=7&pid=1.7&rm=3',
     'Wholesale Bettle Nut' => 'https://th.bing.com/th/id/OIP.detxW57PrcgpIwHNz74t1QHaF6?w=243&h=194&c=7&r=0&o=7&pid=1.7&rm=3'
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Confirm Order | Pragati Traders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    min-height:100vh;
    background:linear-gradient(135deg,#e8f5e9,#f1f8f4);
    font-family:'Segoe UI',sans-serif;
}
.confirm-card{
    background:white;
    border-radius:28px;
    padding:35px;
    box-shadow:0 30px 70px rgba(0,0,0,0.12);
}
.product-row{
    display:flex;
    align-items:center;
    margin-bottom:15px;
}
.product-row img{
    width:85px;
    height:85px;
    border-radius:16px;
    object-fit:cover;
    margin-right:18px;
}
.total-box{
    font-size:22px;
    font-weight:800;
    color:#1b5e20;
}
.btn-confirm{
    background:#1b5e20;
    color:white;
    padding:12px 30px;
    border-radius:16px;
    border:none;
    font-weight:700;
}
</style>
</head>

<body>

<div class="container mt-5 mb-5">
    <h2 class="fw-bold text-center mb-4">Review & Confirm Your Order</h2>

    <div class="confirm-card">

        <!-- 🔴 FORM START -->
        <form method="POST" action="<?php echo e(route('payment.page')); ?>">
        <?php echo csrf_field(); ?>

        <?php $grandTotal = 0; ?>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $product = \App\Models\Product::find($item['id']);
                $total = $product->price * $item['qty'];
                $grandTotal += $total;
            ?>

            <div class="product-row">
                <img src="<?php echo e($productImages[$product->name] ?? 'https://via.placeholder.com/100'); ?>">
                <div>
                    <h6 class="fw-bold mb-1"><?php echo e($product->name); ?></h6>
                    <p class="mb-0 text-muted">
                        ₹ <?php echo e($product->price); ?> × <?php echo e($item['qty']); ?> kg =
                        <strong>₹ <?php echo e($total); ?></strong>
                    </p>
                </div>
            </div>

            <!-- ✅ CORRECT HIDDEN INPUTS -->
            <input type="hidden" name="products[<?php echo e($index); ?>][id]" value="<?php echo e($product->id); ?>">
            <input type="hidden" name="products[<?php echo e($index); ?>][qty]" value="<?php echo e($item['qty']); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <hr>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <span class="fs-5 fw-semibold">Grand Total</span>
            <span class="total-box">₹ <?php echo e($grandTotal); ?></span>
        </div>

        <!-- ✅ TERMS & CONDITIONS INSIDE FORM -->
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
            <label class="form-check-label" for="terms">
                I agree to the <strong>Terms & Conditions</strong> of Pragati Traders.
            </label>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?php echo e(route('order.product')); ?>" class="btn btn-outline-secondary">
                ← Back
            </a>
            <button type="submit" class="btn-confirm">
                Confirm Order
            </button>
        </div>
        <br><br>
        <!-- 📍 DELIVERY ADDRESS -->
<div class="mb-4">
    <label class="form-label fw-semibold">Delivery Address</label>
    <textarea
        name="address"
        class="form-control"
        rows="3"
        placeholder="House No, Street, Area, City, Pincode"
        required><?php echo e(old('address')); ?></textarea>
</div>
        </form>
        <!-- 🔴 FORM END -->

    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/confirm_order.blade.php ENDPATH**/ ?>