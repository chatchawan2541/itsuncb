

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
    margin-left: 45%;
  margin-top: 20%;
  padding: 0
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@mixin centerCSS3(){
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.box{
  width: 50%;
  height: 50%;
  @include centerCSS3;
}

</style>

<div class="loader"></div>

<?php
?>

<form action = "http://itsun.homeip.net:8080/birt/frameset?__report=ReportHRM/HRPYRP306.rptdesign" method = "post">
<input type = "hidden" name = "__format" value = "pdf"/>
<input type = "hidden" name = "__svg" value = "true"/>
<input type = "hidden" name = "__locale" value = "en_US"/>
<input type = "hidden" name = "__timezone" value = "VST"/>
<input type = "hidden" name = "__masterpage" value = "true"/>
<input type = "hidden" name = "__rtl" value = "false"/>
<input type = "hidden" name = "__cubememsize" value = "10"/>
<input type = "hidden" name = "P_OU_CODE" value = "10"/>
<input type = "hidden" name = "P_USER_ID" value = "340"/>
<input type = "hidden" name = "P_BRANCH_COM_CODE" value = "11"/>
<input type = "hidden" name = "P_EMP_TYPE_CODE" value = "1"/>
<input type = "hidden" name = "P_YEAR" value = "<?php echo $_GET["year"]; ?>"/>
</form>
<script>
document.getElementsByTagName("form")[0].submit();
</script>



