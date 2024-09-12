<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <link rel="stylesheet" href="blog.css">
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #d688fa;
}

#blog-section {
  margin-top: 20px;
  padding: 20px;
  background-color: #cc6df8;
 
}

#blog-section h2 {
  text-align: center;
  color: #333;
}

.blog-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.blog-post {
  background-color: #de5fe5;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 10px;
  width: calc(33.333% - 20px);
  box-sizing: border-box;
  transition: transform 0.3s ease;
  text-align: center; /* Center the text in the blog post */
}

.blog-post img {
  width: 200px; /* Set a fixed width for the images */
  height: 200px; /* Set a fixed height for the images */
  border-radius: 50%; /* Make the images circular */
  object-fit: cover; /* Ensure the image covers the area */
  margin: 15px auto; /* Center the image horizontally */
  display: block;
}

.blog-content {
  padding: 15px;
}

.blog-content h3 {
  margin-top: 0;
  color: #333;
}

.blog-content p {
  color: #666;
}

.blog-post:hover {
  transform: scale(1.05);
}

    </style>
</head>
<body>

<?php

include 'navbar.php';
?>
    <section id="blog-section">
        <h2>Latest Blog Posts</h2>
        <div class="blog-container">
            <!-- Blog Post 1 -->
            <div class="blog-post">
                <img src="image/images.jpeg" alt="Blog Post 1">
                <div class="blog-content">
                    <h3>Blog Post Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut urna a odio pretium iaculis.</p>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="blog-post">
                <img src="image/images (1).jpeg" alt="Blog Post 2">
                <div class="blog-content">
                    <h3>Blog Post Title 2</h3>
                    <p>Curabitur tincidunt ipsum nec justo convallis, non feugiat nisi viverra. Sed auctor augue sed nibh fermentum.</p>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="blog-post">
                <img src="image/download (1).jpeg" alt="Blog Post 3">
                <div class="blog-content">
                    <h3>Blog Post Title 3</h3>
                    <p>Nullam dapibus risus nec risus ultricies, sed fermentum libero sollicitudin. Mauris a libero sit amet magna.</p>
                </div>
            </div>

            <div class="blog-post">
              <img src="image/download.jpeg" alt="Blog Post 3">
              <div class="blog-content">
                  <h3>Blog Post Title 3</h3>
                  <p>Nullam dapibus risus nec risus ultricies, sed fermentum libero sollicitudin. Mauris a libero sit amet magna.</p>
              </div>
          </div>
        </div>
    </section>

    </body>

    <?php

    include 'footer.php';
    ?>
    
    <script src="scripts.js"></script>
</body>
</html>
