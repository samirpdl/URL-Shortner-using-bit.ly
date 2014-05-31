<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>URL Shortener</title>

<link href="css/bootstrap.css"  rel="stylesheet" />
<style type="text/css">
body{background: #e2e2e2;
}
</style>
</head>

<body>
<div class="container">
	<div class="page-header">
    	<h3>URL Shortner using Bit.Ly + AJAX + PHP</h3>
    </div>
    <div class="well">
    <form action="?" method="post" onsubmit="submitForm(); return false;">
    	<input type="text" name="url" id="url" placeholder="Enter Your Long Url Here !" class="input-lg form-control" />
    	<input type="submit" style="margin:10px; float:right" class="btn btn-success" value="Convert !" />
     </form>    
     </div>
    <div id="converting" style="margin-top:30px; display:none">
			Converting... Please wait !
     		<div class="progress progress-striped active">
     			<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    				<span class="sr-only">Converting...</span>
  				</div>
			</div>
    </div>
    
    <div class="well" id="result" style="margin-top:30px; display:none">
    	Your Short Link  : <input type="text" class="form-control" id="resulturl" readonly="readonly" value=""/>
    </div>
   
<footer style=" float:left; margin:auto; margin-top:50px; ">
&copy; 2013. Samir Poudel | www.programminglessons.info
</footer> 
</div>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function submitForm()
{
	$("#converting").slideDown(1000);
	var url=$("#url").val();
	$.post( "geturl.php", { url: url }, function( data ) {
  	$("#resulturl").val(data.link);
	$("#converting").hide();
	$("#result").show(1000);
	}, "json");
	
}
</script>
</html>