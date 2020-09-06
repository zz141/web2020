// var id;
// var pa;
var id,pas;

id=prompt("아이디입력");

if(id == "dk3132"){
	alert("송예슬 인증 완료");
	pas = prompt("비밀번호입력");
	if(pas == "1234"){
		location.href = "login.html"
	}else{
		location.href = "error.html"
	}
}else{
	alert("송예슬 인증 실패")
	location.href = "error.html"
}