<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Pragati Trader</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }
        .contact-header {
            background: linear-gradient(to right, #1b5e20, #4caf50);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .contact-box {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

@include('layouts.header')

<!-- PAGE HEADER -->
<section class="contact-header">
    <h1>Contact Pragati Trader</h1>
    <p class="mt-2">We are happy to connect with you</p>
</section>

<!-- CONTACT CONTENT -->
<section class="container my-5">
    <div class="row g-4">

        <!-- CONTACT DETAILS -->
        <div class="col-md-6">
            <div class="contact-box">
                <h4 class="text-success mb-3">Get in Touch</h4>

                <p><i class="bi bi-telephone-fill text-success"></i>
                    <strong> Phone:</strong> +91 7978256670
                </p>

                <p><i class="bi bi-envelope-fill text-success"></i>
                    <strong> Email:</strong> pragatitrader@gmail.com
                </p>

                <p><i class="bi bi-geo-alt-fill text-success"></i>
                    <strong> Address:</strong> Gokul Nagar,Umiya Chowk,150 ring road,Rajkot,India
                </p>

                <p>
                    <i class="bi bi-whatsapp text-success"></i>
                    <strong> WhatsApp:</strong>
                    <a href="#" class="text-decoration-none">Chat with us</a>
                </p>
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="col-md-6">
            <div class="contact-box">
                <h4 class="text-success mb-3">Send Us a Message</h4>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter your number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

@include('layouts.footer')

</body>
</html>
