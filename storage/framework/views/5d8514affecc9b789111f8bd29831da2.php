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
<title>Order Product | Pragati Traders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f9f6;
    font-family:'Segoe UI', sans-serif;
    color:#1b5e20;
}

/* NAVBAR */
.top-nav{
    background:white;
    padding:15px 0;
    box-shadow:0 6px 20px rgba(0,0,0,0.06);
}
.brand{font-size:24px;font-weight:900}

/* CART ICON */
.cart-icon{
    position:relative;
    font-size:22px;
    cursor:pointer;
}
.cart-count{
    position:absolute;
    top:-8px;
    right:-10px;
    background:#c62828;
    color:white;
    border-radius:50%;
    font-size:12px;
    padding:2px 6px;
    display:none;
}

/* PRODUCT CARD */
.product-card{
    background:white;
    border-radius:26px;
    padding:25px;
    text-align:center;
    box-shadow:0 22px 45px rgba(0,0,0,0.08);
    transition:0.3s;
}
.product-card:hover{transform:translateY(-10px)}
.product-card img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:18px;
}
.add-btn{
    background:#1b5e20;
    color:white;
    border:none;
    border-radius:14px;
    padding:10px 24px;
    font-weight:600;
}

/* CART PANEL */
.cart-panel{
    position:fixed;
    right:0;
    top:0;
    width:380px;
    height:100%;
    background:white;
    box-shadow:-10px 0 30px rgba(0,0,0,0.2);
    padding:20px;
    transform:translateX(100%);
    transition:0.4s;
    z-index:999;
}
.cart-panel.show{transform:translateX(0)}

.cart-item{
    display:flex;
    align-items:center;
    margin-bottom:15px;
}
.cart-item img{
    width:60px;height:60px;
    border-radius:10px;
    margin-right:10px;
    object-fit:cover;
}
.qty-btn{
    border:none;
    width:28px;
    height:28px;
    border-radius:50%;
    background:#e8f5e9;
    font-weight:bold;
}
.checkout-btn{
    background:#1b5e20;
    color:white;
    border:none;
    width:100%;
    padding:12px;   
    border-radius:14px;
    font-weight:700;
}
</style>
</head>

<body>

<!-- NAV -->
<nav class="top-nav">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LEFT : BRAND -->
        <div class="brand">PRAGATI TRADERS</div>

        <!-- RIGHT : HOME + CART -->
        <div class="d-flex align-items-center gap-4">

            <a href="<?php echo e(route('home')); ?>" 
               class="btn btn-outline-success btn-sm px-3">
                Home
            </a>

            <div class="cart-icon" onclick="toggleCart()">
                🛒 <span id="cartCount" class="cart-count">0</span>
            </div>

        </div>
    </div>
</nav>
    
</div>
</nav>

<!-- PRODUCTS -->
<div class="container mt-5">
<div class="row g-4">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4">
<div class="product-card">
<img src="<?php echo e($productImages[$product->name] ?? 'https://via.placeholder.com/300'); ?>">
<h5 class="fw-bold mt-2"><?php echo e($product->name); ?></h5>
<p>₹ <?php echo e($product->price); ?> / kg</p>
<button class="add-btn"
onclick="addToCart(
'<?php echo e($product->id); ?>',
'<?php echo e($product->name); ?>',
<?php echo e($product->price); ?>,
'<?php echo e($productImages[$product->name] ?? ''); ?>'
)">
Add to Cart
</button>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

<!-- CART PANEL -->
<div class="cart-panel" id="cartPanel">
<h4 class="fw-bold mb-3">My Cart</h4>

<form method="POST" action="<?php echo e(route('order.confirm')); ?>">
<?php echo csrf_field(); ?>

<div id="cartItems"></div>

<h5 class="mt-3">Total: ₹ <span id="grandTotal">0</span></h5>

<button class="checkout-btn mt-3">Checkout</button>
</form>
</div>

<!-- JS -->
<script>
let cart = {};

function toggleCart(){
    document.getElementById('cartPanel').classList.toggle('show');
}

function addToCart(id,name,price,img){
    if(cart[id]){
        cart[id].qty++;
    }else{
        cart[id] = {id,name,price,img,qty:1};
    }
    updateCartUI();
}

function changeQty(id,delta){
    cart[id].qty += delta;
    if(cart[id].qty <= 0) delete cart[id];
    updateCartUI();
}

function updateCartUI(){
    let html='';
    let total=0;
    let count=0;

    for(let id in cart){
        let item = cart[id];
        let itemTotal = item.price * item.qty;
        total += itemTotal;
        count += item.qty;

        html += `
        <div class="cart-item">
            <img src="${item.img}">
            <div>
                <strong>${item.name}</strong><br>
                ₹${item.price} × ${item.qty} = ₹${itemTotal}
                <div>
                    <button type="button" class="qty-btn" onclick="changeQty('${id}',-1)">−</button>
                    <button type="button" class="qty-btn" onclick="changeQty('${id}',1)">+</button>
                </div>
                <input type="hidden" name="products[${id}][id]" value="${id}">
                <input type="hidden" name="products[${id}][qty]" value="${item.qty}">
            </div>
        </div>`;
    }

    document.getElementById('cartItems').innerHTML = html;
    document.getElementById('grandTotal').innerText = total;

    let badge = document.getElementById('cartCount');
    badge.innerText = count;
    badge.style.display = count ? 'inline' : 'none';
}
</script>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\lpro\btsel\resources\views/order_product.blade.php ENDPATH**/ ?>