// console.log("test");
var chat = document.getElementById("answer-form");
var chat_img;
var images_menu = document.getElementsByClassName("menu_img");
var img_length = images_menu.length;
// [].forEach.call( images_menu, function(el) {
// 	//вешаем событие
// 	el.click = function(e) {
// 		console.log("2", e);
// 		//производим действия
// 	}
// });
// addEventListener("click", function() {
// 	console.log("Щёлк!");
// });
console.log("images_menu", img_length);
var make_active = function (img) {
	for (var i = 0; i < img_length; i++)
	{
		images_menu[i].setAttribute("class", "menu_img");
	}
	img.setAttribute("class", "menu_img active");
	chat.setAttribute("style", "display:none")
};
var start_chat = function (img) {
	chat_img = document.getElementById("img_chat");
//	console.log("chat_img", chat_img);
	make_active(img);
// 	chat_img.setAttribute("class", "active");
	chat.setAttribute("style", "display:block");
//	console.log("chat", chat);
};
var hello = function () {
//	console.log("answer");
	var answer = document.getElementById("question").value;
	var h1 = document.getElementById("hello_name");
	console.log(h1);
	h1.innerHTML = "HELLO, " + answer +"! =)";

	console.log("answer", answer);
}