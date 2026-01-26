<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pragati Trader | Betel Nut Supplier</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    font-family:'Segoe UI',sans-serif;
    background:#f5f7f6;
    overflow-x:hidden;
}

/* GLOBAL ANIMATION */
.fade-up{
    animation:fadeUp 1s ease forwards;
    opacity:0;
}
.fade-left{
    animation:fadeLeft 1s ease forwards;
    opacity:0;
}
.fade-right{
    animation:fadeRight 1s ease forwards;
    opacity:0;
}

@keyframes fadeUp{
    from{transform:translateY(40px);opacity:0}
    to{transform:translateY(0);opacity:1}
}
@keyframes fadeLeft{
    from{transform:translateX(-40px);opacity:0}
    to{transform:translateX(0);opacity:1}
}
@keyframes fadeRight{
    from{transform:translateX(40px);opacity:0}
    to{transform:translateX(0);opacity:1}
}

/* HERO */
.hero{
    background:linear-gradient(to right,#1b5e20,#43a047);
    color:white;
    padding:100px 0;
}
.hero-img{
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,.35);
    animation:zoomIn 1.2s ease forwards;
    opacity:0;
}
@keyframes zoomIn{
    from{transform:scale(.8);opacity:0}
    to{transform:scale(1);opacity:1}
}

/* SECTION TITLE */
.section-title{
    color:#1b5e20;
    font-weight:800;
}

/* INFO CARD */
.info-card{
    background:white;
    border-radius:18px;
    padding:30px;
    text-align:center;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
    transition:.4s;
    position:relative;
    overflow:hidden;
}
.info-card::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(120deg,transparent,rgba(67,160,71,.15),transparent);
    opacity:0;
    transition:.4s;
}
.info-card:hover::before{opacity:1}
.info-card:hover{
    transform:translateY(-12px) scale(1.03);
    box-shadow:0 35px 70px rgba(0,0,0,.25);
}

/* HIGHLIGHT */
.highlight{
    background:#e8f5e9;
    padding:80px 0;
}

/* PRODUCT CARD */
.product-card .card{
    border-radius:18px;
    overflow:hidden;
    transition:.4s;
}
.product-card .card:hover{
    transform:translateY(-10px) scale(1.03);
    box-shadow:0 35px 70px rgba(0,0,0,.25);
}
.product-card img{
    height:220px;
    object-fit:cover;
}
</style>
</head>

<body>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- HERO -->
<section class="hero">
<div class="container">
<div class="row align-items-center">

<div class="col-md-6 text-md-start text-center fade-left" style="animation-delay:.3s">
<h1 class="fw-bold">
Premium <span class="text-warning">Betel Nut</span><br>Supplier
</h1>
<p class="mt-3 fs-5">
Pragati Trader – Trusted Arecanut Business with Quality & Integrity
</p>
</div>

<div class="col-md-6 text-center mt-4 mt-md-0">
<img src="https://th.bing.com/th/id/OIP.KnMhTaXN76oWA72KQTJhAAHaFj?w=264&h=197&c=7&r=0&o=7&pid=1.7&rm=3"
     class="img-fluid hero-img">
</div>

</div>
</div>
</section>

<!-- WHY US -->
<section class="container my-5">
<h2 class="section-title text-center mb-5 fade-up">Why Choose Pragati Trader?</h2>

<div class="row g-4">

<div class="col-md-4 fade-up" style="animation-delay:.2s">
<div class="info-card">
<i class="bi bi-award-fill fs-1 text-success"></i>
<h5 class="mt-3">Premium Quality</h5>
<p>Hand-picked, graded, and hygienically processed betel nuts.</p>
</div>
</div>

<div class="col-md-4 fade-up" style="animation-delay:.4s">
<div class="info-card">
<i class="bi bi-truck fs-1 text-success"></i>
<h5 class="mt-3">Reliable Supply</h5>
<p>On-time delivery for retailers and bulk buyers.</p>
</div>
</div>

<div class="col-md-4 fade-up" style="animation-delay:.6s">
<div class="info-card">
<i class="bi bi-currency-rupee fs-1 text-success"></i>
<h5 class="mt-3">Best Market Price</h5>
<p>Transparent pricing with long-term business trust.</p>
</div>
</div>

</div>
</section>

<!-- HIGHLIGHT -->
<section class="highlight">
<div class="container">
<div class="row align-items-center">

<div class="col-md-6 fade-left">
<img src="https://th.bing.com/th/id/OIP.JN4aiMwUGm1DztlvZ6w-sgAAAA?w=245&h=180&c=7&r=0&o=7&pid=1.7&rm=3"
     class="img-fluid rounded-4 shadow">
</div>

<div class="col-md-6 mt-4 mt-md-0 fade-right">
<h2 class="section-title">About Our Betel Nut Business</h2>
<p class="mt-3">
Pragati Trader sources high-grade arecanut directly from trusted farms,
ensuring purity, taste, and long shelf life.
</p>
</div>

</div>
</div>
</section>

<!-- PRODUCTS -->
<section class="container my-5">
<h2 class="section-title text-center mb-5 fade-up">Our Betel Nut Products</h2>

<div class="row g-4">

<div class="col-md-4 product-card fade-up" style="animation-delay:.2s">
<div class="card shadow border-0">
<img src="https://th.bing.com/th/id/OIP.9FHVAuUnR2OpjPxDyfoEiQHaEx?w=297&h=191&c=7&r=0&o=7&pid=1.7&rm=3">
<div class="card-body text-center">
<h5>Raw Betel Nut</h5>
<p>Fresh, natural and farm-sourced arecanut.</p>
</div>
</div>
</div>

<div class="col-md-4 product-card fade-up" style="animation-delay:.4s">
<div class="card shadow border-0">
<img src="https://th.bing.com/th/id/OIP.tImEQsKwpmC9RXqdIBrrJwHaFW?w=283&h=191&c=7&r=0&o=7&pid=1.7&rm=3">
<div class="card-body text-center">
<h5>Dry Betel Nut</h5>
<p>Properly dried for durability and quality.</p>
</div>
</div>
</div>

<div class="col-md-4 product-card fade-up" style="animation-delay:.6s">
<div class="card shadow border-0">
<img src="https://th.bing.com/th/id/OIP.detxW57PrcgpIwHNz74t1QHaF6?w=243&h=194&c=7&r=0&o=7&pid=1.7&rm=3">
<div class="card-body text-center">
<h5>Processed Betel Nut</h5>
<p>Cleaned, cut, and graded premium betel nuts.</p>
</div>
</div>
</div>

</div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/index.blade.php ENDPATH**/ ?>