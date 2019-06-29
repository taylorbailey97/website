<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php include './header.php'; ?>
    <section class="contact">
        <div class="secHead">
            <h3>Contact Us!</h3>
        </div>
        <div class="secBody">
            <h4>Chandler Bailey</h4>
            Phone: <a href="number">206-427-0982</a><br><br>
            Email: <a href="mailto:chandler.bailey97@gmail.com">chandler.bailey97@gmail.com</a><br><br>
        </div>
    </section>

    <section>
        <div class="form-style-8">
            <h2>Send us a message</h2>
            <form action="addToDB.php" method="post">
                <script>
                    function adjust_textarea(x) {
                        x.style.height = "20px";
                        x.style.height = (x.scrollHeight) + "px";
                    }
                </script>
                <input type="text" name="name" placeholder="Full Name" pattern="[a-zA-Z]{3, 80}" required />
                <input type="email" name="email" placeholder="Email" required />
                <textarea name="message" placeholder="Message" onkeyup="adjust_textarea(this)" required></textarea>
                <input type="submit" value="Send Message" />
            </form>
        </div>
    </section>
    <?php include './footer.php'; ?>
</body>

</html>