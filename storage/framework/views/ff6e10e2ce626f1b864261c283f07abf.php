<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Orders | Pragati Traders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .back-home-btn{
    position:fixed;
    top:20px;
    right:25px;
    background:#1b5e20;
    color:white;
    padding:10px 22px;
    border-radius:25px;
    font-weight:700;
    text-decoration:none;
    box-shadow:0 12px 30px rgba(27,94,32,.4);
    transition:.3s;
    z-index:999;
}

.back-home-btn:hover{
    background:#144a18;
    transform:translateY(-3px);
    box-shadow:0 18px 40px rgba(27,94,32,.6);
    color:white;
}

:root{
    --green:#1b5e20;
    --light:#e8f5e9;
}

/* PAGE LOAD */
body{
    background:linear-gradient(135deg,#e8f5e9,#f1f8f4);
    font-family:'Segoe UI',sans-serif;
    animation:pageFade 1s ease;
}
@keyframes pageFade{
    from{opacity:0}
    to{opacity:1}
}

/* TITLE */
.page-title{
    font-weight:900;
    color:var(--green);
    letter-spacing:1px;
    animation:titleDrop .9s ease;
}
@keyframes titleDrop{
    from{transform:translateY(-40px);opacity:0}
    to{transform:translateY(0);opacity:1}
}

/* ORDER CARD */
.order-card{
    background:white;
    border-radius:28px;
    padding:28px;
    box-shadow:0 25px 60px rgba(0,0,0,0.12);
    position:relative;
    overflow:hidden;
    animation:cardRise .8s ease forwards;
    opacity:0;
}

/* STAGGER EFFECT */
.order-card:nth-child(1){animation-delay:.2s}
.order-card:nth-child(2){animation-delay:.4s}
.order-card:nth-child(3){animation-delay:.6s}
.order-card:nth-child(4){animation-delay:.8s}

@keyframes cardRise{
    from{transform:translateY(60px) scale(.95);opacity:0}
    to{transform:translateY(0) scale(1);opacity:1}
}

/* GLOW ON HOVER */
.order-card::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(120deg,transparent,rgba(27,94,32,.15),transparent);
    opacity:0;
    transition:.4s;
}
.order-card:hover::before{
    opacity:1;
}

.order-card:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 40px 80px rgba(0,0,0,.2);
}

/* STATUS BADGE */
.status{
    background:var(--green);
    color:white;
    padding:6px 16px;
    border-radius:20px;
    font-size:13px;
    font-weight:700;
    animation:pulse 1.5s infinite;
}
@keyframes pulse{
    0%{box-shadow:0 0 0 0 rgba(27,94,32,.6)}
    70%{box-shadow:0 0 0 12px rgba(27,94,32,0)}
    100%{box-shadow:0 0 0 0 rgba(27,94,32,0)}
}

/* PRICE */
.price{
    font-size:22px;
    font-weight:900;
    color:#2e7d32;
}

/* BUTTON */
.invoice-btn{
    border-radius:18px;
    padding:8px 20px;
    font-weight:700;
    transition:.3s;
}
.invoice-btn:hover{
    transform:translateY(-2px);
}

/* EMPTY STATE */
.empty-box{
    background:white;
    border-radius:30px;
    padding:60px;
    text-align:center;
    box-shadow:0 30px 70px rgba(0,0,0,0.15);
    animation:zoomIn .8s ease;
}
@keyframes zoomIn{
    from{transform:scale(.8);opacity:0}
    to{transform:scale(1);opacity:1}
}
</style>
</head>

<body>
<a href="<?php echo e(route('home')); ?>" class="back-home-btn">
    ⬅ Home
</a>
<div class="container mt-5 mb-5">

    <h2 class="page-title text-center mb-5">🧾 My Orders</h2>

    <?php if($orders->isEmpty()): ?>
        <div class="empty-box mx-auto" style="max-width:520px">
            <h4 class="fw-bold mb-3">No Orders Yet</h4>
            <p class="text-muted">Start ordering premium betel nut products.</p>
            <a href="<?php echo e(route('order.product')); ?>" class="btn btn-success btn-lg">
                Order Now
            </a>
        </div>
    <?php else: ?>

    <div class="row g-4">
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6">
            <div class="order-card">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <strong>Order #<?php echo e($order->id); ?></strong>
                    <span class="status"><?php echo e($order->status); ?></span>
                </div>

                <p class="mb-1"><strong>Product ID:</strong> <?php echo e($order->product_id); ?></p>
                <p class="mb-1"><strong>Quantity:</strong> <?php echo e($order->quantity); ?> kg</p>

                <p class="price mt-3">₹ <?php echo e($order->total_price); ?></p>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <small class="text-muted">
                        <?php echo e($order->created_at->format('d M Y')); ?>

                    </small>

                    
                </div>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php endif; ?>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/my_order.blade.php ENDPATH**/ ?>