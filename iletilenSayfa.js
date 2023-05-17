<script>

var emailscript = <?php echo $_POST['emaililetisim'] ?>;
var sifrescript = <?php echo $_POST['passwordiletisim'] ?>;
var kontrolstring= <?php echo  substr( $_POST["emaililetisim"], 0, strpos( $_POST["emaililetisim"], "@"))     ?>;
if (kontrolString == sifrescript && trim(sifrescript) !== "")
{
    <?php
$sifrephp = $_POST['passwordiletisim'];
$_SESSION["sifrephp"] = $_POST["passwordiletisim"];
?>
}

else{
    window.alert( "Lütfen şifrenizi doğru giriniz (şifre ile mailinizin @ işaretinden önceki bölümü aynı olmalıdır)");
window.location.href = "iletisimloginsiz.html";
}
</script>