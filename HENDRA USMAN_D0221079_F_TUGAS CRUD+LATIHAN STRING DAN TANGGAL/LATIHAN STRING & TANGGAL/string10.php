<form action="" method="post">
    input teks disini : <br>
    <textarea name="input" cols="40" rows="4"></textarea>
    <input type="submit" name="Submit" value="Proses">
</form>

<?php
if(isset($_POST['Submit'])) {
    $txt = $_POST['input'];
    echo "Tanpa nl2br() : <br>$txt<br><br>";
    echo "Dengan nl2br() : <br>".nl2br($txt);
}
?>