// 移动端适配 1rem=16px
(function () {
	window.onresize = getRem;

	function getRem() {
		let offsetWidth = document.documentElement.offsetWidth
		document.documentElement.style.fontSize = offsetWidth / (750 / 32) + 'px';
		// var styleNode = document.createElement("style");
		// var w = document.documentElement.clientWidth / 16; //获取视口大小
		// /* 设置此时根元素的fontsize，向html的style样式中添加font-size属性*/
		// console.log(document.documentElement.clientWidth)
		// styleNode.innerHTML = "html{font-size:" + w + "px!important}";
		// //向head标签中添加style标签，其中包含html{font-size:w;}
		// document.head.appendChild(styleNode);
		// 滚动条距离顶部的距离 大于 200px时
	}
	getRem();
})();


// 监听滚路滚动
(function () {
	$(window).scroll(function () {
		var scroH = $(window).scrollTop(); //滚动高度
		$('.header-center').css({
			"backgroundColor": `rgba(0, 0, 0, ${scroH / 100})`
		})
	})
})();


// 手机端点击显示菜单
(function () {
	$("#menu-button").click(function () {
		if ($("#menu-line").hasClass('menu-show')) {
			$("#menu-line").hide().removeClass('menu-show');
			$("#menu-button>.open").show();
			$("#menu-button>.off").hide().addClass('off-animation');
		} else {
			$("#menu-line").show().addClass('menu-show').addClass('animation_fadeInRight');
			$("#menu-button>.open").hide();
			$("#menu-button>.off").show();
		}
	});
})();

// 打开弹窗
(function () {
	$("#popupOpen").click(function () {
		if (!($("#popup").hasClass('flex'))) {
			$("#popup").show().addClass('flex').css({ 'display': 'flex' })
		}
	});
})();
// 关闭弹窗
(function () {
	$("#popupOff").click(function () {
		if (($("#popup").hasClass('flex'))) {
			$("#popup").hide().removeClass('flex')
		}
	});
})();
// 提交

// (function () {
// 	$("#submit").click(function () {
// 		if (!($("#submitMsg").hasClass('show'))) {
// 			$("#submitMsg").show().addClass('show')
// 			setTimeout(() => {
// 				$("#submitMsg").hide().addClass('show')
// 			}, 3000);
// 		}
// 	});
// })();

$("#form").submit(function () {
	$(this).ajaxSubmit({
		'url': api_url('post', 'save'),
		'type': 'post',
		'dataType': 'json',
		'success': function (rs) {
			if (rs.status == 'ok') {
				// $.dialog.alert('您的留言信息已发布，请耐心等候管理员审核，感谢您的提交',function(){
				// 	$.phpok.reload();
				// },'succeed');
				$("#submitMsg").show().addClass('show')
				setTimeout(() => {
					$("#submitMsg").hide().addClass('show')
					$.phpok.reload();
				}, 3000);
			} else {
				$.dialog.alert(rs.content, function () {
					$("#update_vcode").phpok_vcode();
					$("#_chkcode").val('');
				});
				return false;
			}
		}
	});
	return false;
});

// 循环插入
// (function () {
// 	let gemasList = [{
// 		src: './img/game_1.png',
// 		title: 'Captain Run'
// 	}, {
// 		src: './img/game_2.png',
// 		title: 'Mirage Path'
// 	}, {
// 		src: './img/game_3.png',
// 		title: 'Juice Factory'
// 	}, {
// 		src: './img/game_4.png',
// 		title: 'Rope Rescue'
// 	}, {
// 		src: './img/game_1.png',
// 		title: 'Captain Run'
// 	}, {
// 		src: './img/game_2.png',
// 		title: 'Mirage Path'
// 	}, {
// 		src: './img/game_3.png',
// 		title: 'Juice Factory'
// 	}, {
// 		src: './img/game_4.png',
// 		title: 'Rope Rescue'
// 	}, {
// 		src: './img/game_1.png',
// 		title: 'Captain Run'
// 	}, {
// 		src: './img/game_2.png',
// 		title: 'Mirage Path'
// 	}, {
// 		src: './img/game_3.png',
// 		title: 'Juice Factory'
// 	}, {
// 		src: './img/game_4.png',
// 		title: 'Rope Rescue'
// 	}, ]
// 	let gemasListHtml = ''
// 	$.each(gemasList, function (i, item) {
// 		gemasListHtml += `
// 		<a class="games-item" href="info.html" >
// 			<img src="${item.src}" alt="">
// 			<span>${item.title}</span>
// 		</a>`;
// 		$("#gemasList").html(gemasListHtml)
// 	});
// })();