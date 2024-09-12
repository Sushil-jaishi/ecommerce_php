<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
   crossorigin="anonymous">

   <!-- Font Awesome CDN -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <style>
  .footer {
    background-color: #e897f9;
    color: rgb(0, 0, 0);
}

.footer a {
    color: rgb(67, 8, 54);
    margin-left: 10px; /* Adjust as needed */
    margin-right: 10px; /* Adjust as needed */
}

.footer a:hover {
    color: #75206f;
}

.social{
  margin-left: 200px;
} 

.copyright{
  margin-right: 200px;
} 

.footer .social-media-links {
    display: flex;
    align-items: center;
}

.footer .social-media-links a {
    margin-left: 10px; /* Margin between each icon */
    margin-right: 10px; /* Margin between each icon */
}

  </style>
</head>
<body>
  <!-- Footer -->
  <footer class=" footer fixed-bottom  py-2 d-flex justify-content-between align-items-center">
    <div class=" social  d-flex align-items-center">
      <span class="me-3">Follow Us:</span>
      <a href="https://www.facebook.com" target="_blank" class="text-white">
        <i class="fab fa-facebook-f text-primary"></i>
      </a>
      <a href="https://www.twitter.com" target="_blank" class="text-white">
        <i class="fab fa-twitter text-primary" ></i>
      </a>
      <a href="https://www.instagram.com" target="_blank" class="text-white">
        <i class="fab fa-instagram text-secondary " ></i>
      </a>
      <a href="https://www.linkedin.com" target="_blank" class="text-white">
        <i class="fab fa-linkedin-in text-meutral"></i>
      </a>
      <a href="https://www.tiktok.com" target="_blank" class="text-white">
        <i class="fab fa-tiktok text-neutral"></i>
      </a>
    </div>
    <div>
      <p class=" copyright  mb-0">Copyright &#169; 2024 KBista....... </p>
    </div>
  </footer>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-oBqDVmMz4fnFOpCFY4FxT1vGRmkBUfW5ysH1KNJ0i+YL3Ek5+7ZZZ6EZT+9zL1R1" 
    crossorigin="anonymous"></script>
</body>
</html>
