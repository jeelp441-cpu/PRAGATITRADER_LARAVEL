<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home | Pragati Traders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root{ --green:#1b5e20; }

body{
    min-height:100vh;
    background:linear-gradient(180deg,#f1f8f4,#e8f5e9);
    font-family:'Segoe UI',sans-serif;
    color:var(--green);
    animation:fadePage 1s ease;
}
@keyframes fadePage{from{opacity:0}to{opacity:1}}

/* NAV */
.top-nav{
    background:rgba(255,255,255,.9);
    backdrop-filter:blur(12px);
    border-bottom:1px solid #e0e0e0;
}
.brand{font-size:24px;font-weight:900;letter-spacing:2px}

/* HERO */
.hero-card{
    background:white;
    border-radius:30px;
    padding:65px;
    box-shadow:0 30px 70px rgba(0,0,0,.12);
    animation:heroUp 1s ease;
}
@keyframes heroUp{
    from{opacity:0;transform:translateY(40px) scale(.95)}
    to{opacity:1;transform:translateY(0) scale(1)}
}

/* BUTTONS */
.btn-soft{
    background:var(--green);
    color:white;
    padding:12px 22px;
    border-radius:14px;
    border:none;
    font-weight:600;
    transition:.35s;
}
.btn-soft:hover{
    background:#144a18;
    transform:translateY(-3px);
    box-shadow:0 15px 35px rgba(27,94,32,.4);
}
.btn-soft-outline{
    border:2px solid var(--green);
    color:var(--green);
    padding:12px 22px;
    border-radius:14px;
    background:transparent;
    font-weight:600;
    transition:.35s;
}
.btn-soft-outline:hover{
    background:var(--green);
    color:white;
}

/* ACTION CARDS */
.action-card{
    background:#f9fdfb;
    border-radius:26px;
    padding:35px;
    border:1px solid #e0f2e9;
    transition:.45s;
    position:relative;
    overflow:hidden;
}
.action-card::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(120deg,transparent,rgba(67,160,71,.18),transparent);
    opacity:0;
    transition:.4s;
}
.action-card:hover::before{opacity:1}
.action-card:hover{
    transform:translateY(-10px) scale(1.03);
    box-shadow:0 35px 70px rgba(0,0,0,.18);
}
.action-card h5{font-weight:800}

/* FEATURE CARDS */
.feature-card{
    background:white;
    border-radius:22px;
    padding:30px;
    text-align:center;
    box-shadow:0 18px 40px rgba(0,0,0,.12);
    transition:.4s;
}
.feature-card:hover{
    transform:translateY(-10px) scale(1.03);
    box-shadow:0 35px 70px rgba(0,0,0,.22);
}
.feature-icon{
    font-size:40px;
    color:var(--green);
    margin-bottom:12px;
}

/* STATS */
.stat-card{
    background:linear-gradient(135deg,#1b5e20,#43a047);
    color:white;
    border-radius:24px;
    padding:35px;
    text-align:center;
    box-shadow:0 25px 55px rgba(0,0,0,.25);
    transition:.4s;
}
.stat-card:hover{
    transform:translateY(-8px) scale(1.03);
}
.stat-number{
    font-size:38px;
    font-weight:900;
}

/* LOGOUT */
.logout-btn{
    background:none;
    border:none;
    color:#c62828;
    font-weight:600;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="top-nav py-3">
<div class="container d-flex justify-content-between align-items-center">
    <div class="brand">PRAGATI TRADERS</div>
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button class="logout-btn">Logout</button>
    </form>
</div>
</nav>

<!-- CONTENT -->
<div class="container d-flex align-items-center justify-content-center" style="min-height:85vh;">
<div class="col-md-10">

<div class="hero-card text-center">

<h1 class="fw-bold">Welcome back, <?php echo e(auth()->user()->name); ?></h1>
<p class="fs-5 mt-3 text-muted">
Manage your trading activity, track orders, and explore premium betel nut products.
</p>

<div class="d-flex justify-content-center gap-3 mt-4">
    <a href="<?php echo e(route('order.product')); ?>" class="btn btn-soft">View Products</a>
    <a href="<?php echo e(route('my.orders')); ?>" class="btn btn-soft-outline">My Orders</a>
</div>

<!-- ACTION GRID -->
<div class="row mt-5 g-4 text-start">
<div class="col-md-4">
<div class="action-card">
<h5>Premium Products</h5>
<p class="text-muted">Consistent quality & grading.</p>
</div>
</div>

<div class="col-md-4">
<div class="action-card">
<h5>Order Tracking</h5>
<p class="text-muted">Live order status updates.</p>
</div>
</div>

<div class="col-md-4">
<div class="action-card">
<h5>Lightning Fast Delivery</h5>
<p class="text-muted">On-time assured delivery.</p>
</div>
</div>
</div>

<!-- FEATURES -->
<div class="row mt-5 g-4">
<div class="col-md-3">
<div class="feature-card">
<i class="bi bi-box-seam feature-icon"></i>
<h6 class="fw-bold">Bulk Orders</h6>
<p class="text-muted">Wholesale-friendly ordering.</p>
</div>
</div>

<div class="col-md-3">
<div class="feature-card">
<i class="bi bi-shield-check feature-icon"></i>
<h6 class="fw-bold">Secure Payments</h6>
<p class="text-muted">Safe transaction handling.</p>
</div>
</div>

<div class="col-md-3">
<div class="feature-card">
<i class="bi bi-people feature-icon"></i>
<h6 class="fw-bold">Trusted Network</h6>
<p class="text-muted">Verified farm partnerships.</p>
</div>
</div>

<div class="col-md-3">
<div class="feature-card">
<i class="bi bi-headset feature-icon"></i>
<h6 class="fw-bold">24×7 Support</h6>
<p class="text-muted">Dedicated customer care.</p>
</div>
</div>
</div>

<!-- STATS -->
<div class="row mt-5 g-4">
<div class="col-md-3"><div class="stat-card"><div class="stat-number">20+</div><p>Years Experience</p></div></div>
<div class="col-md-3"><div class="stat-card"><div class="stat-number">500+</div><p>Happy Clients</p></div></div>
<div class="col-md-3"><div class="stat-card"><div class="stat-number">100%</div><p>Quality Assured</p></div></div>
<div class="col-md-3"><div class="stat-card"><div class="stat-number">24×7</div><p>Support</p></div></div>
</div>

</div>
</div>
</div>


<?php if(session('order_success')): ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="modal fade" id="orderSuccessModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content text-center p-4" style="border-radius:22px">
<div class="modal-body">
<h2 class="text-success fw-bold">🎉 Order Placed!</h2>
<p class="mt-3"><?php echo e(session('order_success')); ?></p>
<button class="btn btn-success mt-3" data-bs-dismiss="modal">OK</button>
</div>
</div>
</div>
</div>

<script>
setTimeout(()=> {
    new bootstrap.Modal(
        document.getElementById('orderSuccessModal')
    ).show();
},300);
</script>
<?php endif; ?>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/home.blade.php ENDPATH**/ ?>