<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Products | Pragati Trader</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f6f8f6;
        }

        .product-card {
            border-radius: 20px;
            transition: 0.3s;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .product-card img {
            height: 220px;
            object-fit: cover;
        }

        .badge-green {
            background-color: #2e7d32;
        }
    </style>
</head>

<body>

<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- PAGE HEADER -->
<section class="py-5 text-center bg-success text-white">
    <div class="container">
        <h1 class="fw-bold">Our Products</h1>
        <p class="fs-5">Premium Quality Betel Nuts by Pragati Trader</p>
    </div>
</section>

<!-- PRODUCTS SECTION -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- PRODUCT 1 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.9FHVAuUnR2OpjPxDyfoEiQHaEx?w=297&h=191&c=7&r=0&o=7&pid=1.7&rm=3" 
                    class="card-img-top" alt="Raw Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge badge-green mb-2">Best Seller</span>
                        <h5 class="card-title mt-2">Raw Betel Nut</h5>
                        <p class="card-text">High-quality raw arecanut directly from farms.</p>
                        
                    </div>
                </div>
            </div>

            
            <!-- PRODUCT 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.tImEQsKwpmC9RXqdIBrrJwHaFW?w=283&h=191&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Processed Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge bg-warning text-dark mb-2">Premium</span>
                        <h5 class="card-title mt-2">Processed Betel Nut</h5>
                        <p class="card-text">Cleaned, dried and graded premium betel nuts.</p>
                        
                    </div>
                </div>
            </div>

            <!-- PRODUCT 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.detxW57PrcgpIwHNz74t1QHaF6?w=243&h=194&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Wholesale Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge bg-primary mb-2">Wholesale</span>
                        <h5 class="card-title mt-2">Wholesale Betel Nut</h5>
                        <p class="card-text">Bulk supply available for retailers & exporters.</p>
                        
                    </div>
                </div>
            </div>
            <!-- p4-->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.lAlq1TxbPASe5JNd9O14WQHaHa?w=185&h=185&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Processed Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge bg-warning text-dark mb-2">Premium</span>
                        <h5 class="card-title mt-2">Flavored Bettle Nut</h5>
                        <p class="card-text">Flavored bettle nut with spices and sweet flavoer.</p>
                        
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.C5eJq4uIoRA2Se9blfpjwQHaGu?w=180&h=180&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Processed Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge bg-warning text-dark mb-2">Premium</span>
                        <h5 class="card-title mt-2">Bettle Nut powder</h5>
                        <p class="card-text">Bettle nut powder crushed into thin powder.</p>
                        
                    </div>
                </div>
            </div>
            
             <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://th.bing.com/th/id/OIP.oMuEeRxFWJ50aJC1LUkw5AHaE7?w=276&h=184&c=7&r=0&o=7&pid=1.7&rm=3" class="card-img-top" alt="Processed Betel Nut">
                    <div class="card-body text-center">
                        <span class="badge bg-warning text-dark mb-2">Premium</span>
                        <h5 class="card-title mt-2">Organic Bettle Nut</h5>
                        <p class="card-text">Bettle nut grown organic without any pesticide.</p>
                        
                    </div>
                </div>
            </div>
            

        </div>

    </div>
</section>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/products.blade.php ENDPATH**/ ?>