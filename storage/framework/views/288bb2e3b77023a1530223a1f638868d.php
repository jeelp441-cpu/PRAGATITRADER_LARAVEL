<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Us | Pragati Trader</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family:'Segoe UI',sans-serif;
}

/* HERO */
.about-hero{
    background:linear-gradient(rgba(5, 49, 7, 0.9),rgba(13, 83, 17, 0.9)),
               url('https://images.unsplash.com/photo-1604908554164-fd7b1b84eaca?auto=format&fit=crop&w=1600&q=80');
    background-size:cover;
    background-position:center;
    color:white;
    padding:90px 0;
}

/* FOUNDER CARD */
.founder-card{
    background:white;
    border-radius:28px;
    padding:35px 25px;
    box-shadow:0 25px 60px rgba(0,0,0,.12);
    transition:.45s ease;
    animation:fadeUp 1s ease;
}
.founder-card:hover{
    transform:translateY(-12px) scale(1.03);
    box-shadow:0 45px 90px rgba(0,0,0,.25);
}

/* IMAGE */
.founder-img{
    width:240px;
    height:240px;
    border-radius:50%;
    object-fit:cover;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    transition:.5s ease;
}
.founder-card:hover .founder-img{
    transform:scale(1.1) rotate(1deg);
}

/* ANIMATION */
@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px)}
    to{opacity:1; transform:translateY(0)}
}

/* STATS */
.stat h2{
    color:#2e7d32;
    font-weight:800;
}
</style>
</head>

<body>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- HERO -->
<section class="about-hero text-center">
<div class="container">
    <h1 class="fw-bold display-5">About Pragati Trader</h1>
    <p class="fs-5 mt-3">Serving Premium Betel Nut Since 2000</p>
</div>
</section>

<!-- ABOUT -->
<section class="py-5">
<div class="container">
<div class="row align-items-center g-5">

<div class="col-md-6">
<img src="<?php echo e(asset('image/logo.png')); ?>"
     class="img-fluid rounded-4 shadow">
</div>

<div class="col-md-6">
<h2 class="fw-bold">Who We Are</h2>
<p class="fs-5 mt-3">
<strong>Pragati Trader</strong> was founded in
<span class="text-success fw-semibold">2000</span> at
<strong>Gokul Nagar, Umiya Chowk, 150 Ring Road, Rajkot, India</strong>.
</p>
<p class="fs-5">
With more than two decades of experience, we supply
premium-quality betel nuts sourced directly from trusted farms.
</p>
</div>

</div>
</div>
</section>
<!-- COMPANY STORY -->
<section class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h2 class="fw-bold text-success mb-4">Our Journey</h2>

            <p class="fs-5">
                Pragati Trader began its journey in the year <strong>2000</strong>
                with a small trading setup in Rajkot. What started as a
                local initiative gradually evolved into a trusted name
                in the betel nut trading industry.
            </p>

            <p class="fs-5">
                Through consistency, ethical sourcing, and transparent
                business practices, we built long-term relationships
                with farmers, suppliers, and customers across India.
            </p>

            <p class="fs-5">
                Today, Pragati Trader stands as a symbol of reliability,
                quality assurance, and customer-first values.
            </p>
        </div>
    </div>
</div>
</section>


<!-- FOUNDERS -->
<section class="py-5 bg-light">
<div class="container">

<h2 class="fw-bold text-center text-success mb-5">Our Founders</h2>

<div class="row justify-content-center g-5">

<!-- FOUNDER 1 -->
<div class="col-md-5">
<div class="founder-card text-center">
<img src="<?php echo e(asset('image/j1.jpg')); ?>"
     class="founder-img">
<h4 class="fw-bold mt-3">Mr. Jeel Patel</h4>
<p class="text-muted">Founder</p>
<p class="mt-3">
Mr. Jeel Patel established Pragati Trader with a vision of ethical sourcing,
consistent quality, and long-term business trust.
</p>
</div>
</div>

<!-- FOUNDER 2 -->
<div class="col-md-5">
<div class="founder-card text-center">
<img src="<?php echo e(asset('image/a1.jpg')); ?>"
     class="founder-img">
<h4 class="fw-bold mt-3">Mr. Aagnik Goswami</h4>
<p class="text-muted">Co-Founder</p>
<p class="mt-3">
Mr. Aagnik Goswami oversees operations and client relationships,
ensuring smooth trade and sustainable growth.
</p>
</div>
</div>

</div>
</div>
</section>

<!-- STATS -->
<section class="py-5">
<div class="container">
<div class="row text-center">

<div class="col-md-3 stat">
<h2>20+</h2>
<p>Years Experience</p>
</div>

<div class="col-md-3 stat">
<h2>500+</h2>
<p>Happy Clients</p>
</div>

<div class="col-md-3 stat">
<h2>100%</h2>
<p>Quality Assurance</p>
</div>

<div class="col-md-3 stat">
<h2>India</h2>
<p>Wide Supply Network</p>
</div>

</div>
</div>
</section>

<!-- MAP -->
<section class="py-5 bg-light">
<div class="container">
<h2 class="fw-bold text-center mb-4">Our Location</h2>

<div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
<iframe
src="https://www.google.com/maps?q=Gokul+Nagar,+Umiya+Chowk,+150+Ring+Road,+Rajkot,+India&output=embed"
style="border:0;" allowfullscreen loading="lazy">
</iframe>
</div>
</div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/about.blade.php ENDPATH**/ ?>