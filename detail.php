<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/detail.css">

</head>
<body>
    <section class="contact" id="contact">
    
        <h1 class="heading">
            Consultation Form
        </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="images/C-1.jpg" alt="">
            </div>
    
            <form action="insert.php" method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="Name" name="username" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Number" name="phone" required>
                    <input type="text" placeholder="Subject" name="text" required>
                </div>
                <textarea placeholder="Message" id="" cols="30" rows="10" name="message" required></textarea>
                <input type="submit" class="btn" value="Submit" name="submit">
            </form>
    
        </div>
        
    </section>
    
</body>
</html>