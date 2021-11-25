<?php
session_start();


?>



<!DOCTYPE html>


<html>
<head>
	<title></title>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<style>
	*{
		margin: 0px;
		padding:0px;
	}
	nav{
		height:80px;
		width: 100%;
		    background: linear-gradient(
90deg, rgba(239,102,47,1) 0%, orange 100%);
		display: flex;
		justify-content: space-around;
		align-items: center;
	}
	.logo h2{
			color:#fff;
			font-size: 30px;
	}
	ul{
		list-style: none;
	}
	ul li{
		border:1px solid white;
		display: inline-block;
		margin-left:20px;
		padding: 10px;
		text-decoration: none;
	}
	ul li  a{
		color:#fff;
		text-decoration: none;
	}
	main{
		height: auto;
		background: lightblue;
		 background: linear-gradient(
90deg, rgba(239,102,47,1) 0%, orange 100%);
		width:90%;
		margin:30px auto;display: flex;
		justify-content: space-around;
		align-items: center;
        padding: 40px;
	}
	section{
		height:auto;
		    background: linear-gradient(
90deg, rgba(239,102,47,1) 0%, orange 100%);
		width:40%;
		background: #fff;
	   margin-bottom: 30px;
		/*border:1px solid black;*/
		box-shadow: 0 2px 20px 0 rgb(17 121 239 / 20%);
	}

	section h1{
		text-align: center;
		color: #ef662f;
		font-size:40px;
		padding: 40px 0px 20px 0px ;
		
	}
	form{
		margin: auto;
		background: #fff;
		width: 90%;
		height:60%;
		background:#eee;
		/* padding-bottom: 20px; */
	}
	label{
		font-size: 20px;
		color:#ef662f;
	}
	label, input{
		display: block;
		padding:20px 0px 5px 30px;
	}
	input{
		margin-left: 35px;
		margin-top: 10px;
		padding:10px;
		width: 80%;
		border-radius: 10px;
		  border:1px solid #ef662f ;
  outline: none;
		font-size: 20px;
	}
	button{
		margin-left: auto;
margin-right: auto;
margin-top: 30px;
margin-bottom: 30px;
		font-size: 20px;
		padding: 10px 15px;
      display: block;
  background:#fff;
      color: #1179ef;
  box-shadow: 0px 2px 5px rgb(17 121 239 / 15%);
  border:none;
  outline: none;
  border-radius: 10px;
	}
	button:hover{
		box-shadow: 0 2px 20px 0 rgb(17 121 239 / 20%);
	}
	.reg{
		font-size:25px;
		padding:20px 0px 0px 0px ;
	}
	.sec input{
		margin-top: 5px;
	}
	.reg #email{
    padding-top: 10px;
	}

	.err-msg{
		padding-bottom:20px ;
		font-size: 18px;
	     color: red;
		 text-align: center;
	}
	@media (max-width: 900px){
		section{
			width:45%;
		}
	}
	
	@media (max-width: 800px){
		main{
			width:auto;
		}
		section{
			width:49%;
		}
	}
	@media (max-width: 600px){
		main{
			display:block;
		}
		section{
			width: 90%;
				margin-left: auto;
margin-right: auto;
margin-bottom: 30px;
		}
		label, input{
			padding-left:5px;
		}
		input{
			margin-left: 5px;
		}
	}
	@media (max-width: 500px){
     section{
			width: 96%;
		}
	}
</style>
<body>

<nav>
	<div class="logo">
		<h2>HYPESTREW </h2>
	</div>

</nav>
<main>
	<section>
		<h1>LOGIN</h1>
		<form action="validation.php" method="POST">
			<label for="username" class="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" name="user" required>
             <label for="Password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="name" name="pass" required>
             <button type="submit">Login </button>
		</form>
	</section>
	<section  >
		<h1>SIGN UP</h1>
		<form  name="f1" action="registration.php" onsubmit = "return validation()"  method="POST">
			<label for="username" class="form-label">Username :</label>
			        <input type="text" class="form-control" id="username" name="user" >
             <label for="Password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="name" name="pass" >
			 <label for="Password_2" class="form-label">Cofirm Password :</label>
                    <input type="password" class="form-control" id="name" name="pass_2" >
             <button type="submit">Signin</button>
		</form>
	</section>
	
</main>
</body>
<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
				var ps_2=document.f1.pass_2.value; 
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
					if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    } 
					if (ps!= ps_2) {  
                    alert("password doesn't match");  
                    return false;  
                    } 
                }                             
            }  
        </script>  
</html>