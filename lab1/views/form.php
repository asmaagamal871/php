<!DOCTYPE html>
<html>
    <head>
        <title> contact form </title>


    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
        <?php echo $error ?? NULL ?>
        </div>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="" size="30" value="<?php echo validate_form("name")?>" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="" size="30" value="<?php echo validate_form("email")?>" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30" <?php echo validate_form("message")?>></textarea><br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>