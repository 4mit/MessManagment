function messegeBill(){window.alert('Please Login to Check Your Bill ');}
function messege(){window.alert('Please Login to see Your Profile ');}

function select_forgot_type(){
	
	var s  = document.getElementById("fu_type").value;
	console.log(s);
	if(s== "student"){
		document.getElementById("fusername").placeholder = "Student Id ";
	}
	if(s== "contractor"){
		document.getElementById("fusername").placeholder = "Contractor Id  ";
		}
	
}

function select_type(){
	var s  = document.getElementById("u_type").value;

	if(s=="student"){
		document.getElementById("username").placeholder ="student User ID";
		document.getElementById("password").placeholder ="student Password ";
		
	}
	if(s=="contractor"){
		document.getElementById("username").placeholder ="Contractor ID";
		document.getElementById("password").placeholder ="Contractor Password ";
	
	}
	//password
	
	
}


function check(){
'use strict';
	var un = document.getElementById('username').value;
	var pw = document.getElementById('password').value;
	document.getElementById('username').removeAttribute('style');
	
	if(!un=="" && !pw =="" )
	{
		
			if(/[a-zA-Z0-9]{3,20}/.test(un))
			{
	
				if(/[a-zA-Z0-9#@$!%^*]{5,20}/.test(pw)){
		
					return true;
		
				}else{
		
					alert("Invalid password character combination does'nt match ");
					document.getElementById('username').style.border ="2px solid red";
					
					return false;
				}
			}else{
					alert("invald characters are interess or length mismatched  ");
					document.getElementById('password').style.border ="2px red";
					return false;
			}
				
	}else{
		
		alert("User name Password Cant be Empty .. !");
		document.getElementById('username').style.border ="2px solid red";
		
		document.getElementById('password').style.border ="2px red";
		return false;	
	}
	
}

var s ="Welcome to mess Managment System ......! !" ;
var t=0;
function type()
{     
	'use strict';
	document.getElementById('text').innerHTML += s[t];
	t++;
	if(t>s.length-1) 
	{
		//t=0; if required later i can change it 
		//document.getElementById('text').innerHTML=" ";
		clearInterval(typing);
	}	
}
var typing=setInterval(type,100);





