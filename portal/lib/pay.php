<?php 
$hash = hash('SHA512', 'FUNM02380820BLUE' . '50000' .'1234567'. 'D3D1D05AFE42AD50818167EAC73C109168A0F108F32645C8B59E897FA930DA44F9230910DAC9E20641823799A107A02068F7BC0F4CC41D2952E249552255710F');
	echo '<body onload="document.submit2gtpay_form.submit()">
             <form method= "post" name="submit2gtpay_form" action="https://apps.wemabank.com/WemaGatewayTest"> 
<input id="merchantCode" type="hidden" value="FUNM02380820BLUE" name= "merchantCode">
<input id="amnt" type="hidden" value="500" name="amnt">
<input id="custDetails" type="hidden" value="Purple Mall" name="custDetails">
<input id="uniqueRef" type="hidden" value="1234567" name="uniqueRef">
<input id="hashValue" type="hidden" value="$hash" name="hashValue">
<input id="cancelReturnPage" type="hidden" value="http://bluekolar.com/demo/profile/webpay" name="cancelReturnPage">
<input id="productid" type="hidden" value="sl1234 " name=" productid">

</form>
                                </body>';	
?>	