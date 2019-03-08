window.onload = function() {
	document.getElementById("login").onsubmit= function(){
		var userid = document.getElementById("userid").value;
		var password = document.getElementById("password").value;

		if (userid.length == 0) {
			document.getElementById("error").innerHTML = '账号不能为空';
			return false;
		}else{
			document.getElementById("error").innerHTML = '';
		}
		if (password.length == 0) {
			document.getElementById("error").innerHTML = '密码不能为空';
			return false;
		}else{
			document.getElementById("error").innerHTML = '!';
		}

		return true;

	}

}