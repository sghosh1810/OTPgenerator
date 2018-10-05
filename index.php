<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.buttonbbc {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.buttonbbc:hover {
    background-color: #555555;
    color: white;
}
</style>
</head>
<body>
<script type="application/javascript">
    function create (retVal) {
		  pass_temp = retVal;	
          $.ajax({
            url:"api.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
           data: {registration: "success", password: pass_temp},
            success:function(result){

             console.log(result.abc);
           }
         });
     }
	function generatePassword() {
    var length = 16,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById("demo").innerHTML = retVal;
	create(retVal);
}
</script>

<div align="center"><button type="button" class="button buttonbbc" onclick="this.disabled=true;generatePassword()">Click Me</button></div>
 <div align="center"><p id="demo">OTP will appear here</p></div>
</body>
</html>
