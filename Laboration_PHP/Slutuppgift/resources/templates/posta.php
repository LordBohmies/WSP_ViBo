<form class="posta" id="posta" method="post">
    <select name="author">
        <?php
        foreach ($users as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
        }
        ?>
    </select>
    <input type="text" name="title" value="Headline">
    <input type="submit" name="submit" value="Skicka">
</form>
<textarea form="posta" name="message" rows="8" cols="80">Text</textarea>
<p class="success"><?php echo $message; ?></p>
