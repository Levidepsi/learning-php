let $ = jQuery;

$(function() {
	let data = [];
	$(".icons").click(function(e) {
		// when clicked check when theres active current element if there is remove from array if not put it on array
		let id = $(this).attr("data-id");
		if ($(this).hasClass("active")) {
			//  do somethiung
			data.splice(data.indexOf(id), 1);
		} else {
			data.push(id);
		}

		$(this).toggleClass("active");
		console.log(data);
	});
	$("#btn2").click(function(e) {
		window.localStorage.setItem("data", data);
	});
});

// $("#btn1").click(function(e) {
// 	let newhtmlElem = '<li class="icons" data-id="">';
// 	newhtmlElem += '<a href="javascript:void(0);">';
// 	newhtmlElem += '<i class="fa-solid fa-mobile-screen-button phone"></i>';
// 	newhtmlElem += "<span>IPhone</span>";
// 	newhtmlElem += "</a>";
// 	newhtmlElem += "</li>";

// 	$(".new-item").append(newhtmlElem);
// 	$(document).on("click", "newhtmlElem", function(e) {
// 		let id = $(this).attr("data-id");
// 		if ($(this).hasClass("active")) {
// 			//  do somethiung
// 			data.splice(data.indexOf(id), 1);
// 		} else {
// 			data.push(id);
// 		}

// 		$(this).toggleClass("active");
// 		console.log(data);
// 	});
// 	// alert(newhtmlElem);
// });

