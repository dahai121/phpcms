    $(function()  {  
		$("#sethomepage").click(function () {  
						if (document.all) {
							document.body.style.behavior = 'url(#default#homepage)';  
							document.body.setHomePage(document.URL);  
						} else {
							alert("您的浏览器不支持自动设置首页，请手动设置！");  
						}
		return false;
		})  
    });  
    $(function()  {  
            $("#favorites").click(function () {　
                var ctrl = (navigator.userAgent.toLowerCase()).indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL';  
                if (document.all) {  
                    window.external.addFavorite('http://www.pc512.com', '相文电脑')  
                } else if (window.sidebar) {  
                    window.sidebar.addPanel('相文电脑', 'http://www.pc512.com', "")  
                } else {　　
                    alert('添加失败\n您可以尝试通过快捷键' + ctrl + ' + D 加入到收藏夹~')  
                }  
			return false;
            })  
    });  
	$(function() {
		var sWidth = $("#focus").width()-1;
		var len = $("#focus ul li").length;
		var index = 0;
		var picTimer;
		var btn = "<div class='btnBg'></div><div class='btn'>";
		for(var i=0; i < len; i++) {
			btn += "<span></span>";
		}
		btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
		$("#focus").append(btn);
		$("#focus .btnBg").css("opacity",0.5);
		$("#focus .btn span").css("opacity",0.4).mouseenter(function() {
			index = $("#focus .btn span").index(this);
			showPics(index);
		}).eq(0).trigger("mouseenter");
		$("#focus .preNext").css("opacity",0.2).hover(function() {
			$(this).stop(true,false).animate({"opacity":"0.5"},300);
		},function() {
			$(this).stop(true,false).animate({"opacity":"0.2"},300);
		});
		$("#focus .pre").click(function() {
			index -= 1;
			if(index == -1) {index = len - 1;}
			showPics(index);
		});
		$("#focus .next").click(function() {
			index += 1;
			if(index == len) {index = 0;}
			showPics(index);
		});
		$("#focus ul").css("width",sWidth * (len));
		$("#focus").hover(function() {
			clearInterval(picTimer);
		},function() {
			picTimer = setInterval(function() {
				showPics(index);
				index++;
				if(index == len) {index = 0;}
			},4000);
		}).trigger("mouseleave");
		
		function showPics(index) { 
			var nowLeft = -index*sWidth; 
			$("#focus ul").stop(true,false).animate({"left":nowLeft},300); 
			//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); 
			$("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); 
		}
	});
	$(function(){
		$(".img-wrap").each(function(i){
			var span = $(this).find("span.text");
			$(this).hover(
				function () {
				  span.slideToggle(200);
				},
				function () {
				  span.slideUp(200);
				}
			);
		});
	});
	$(function(){
		$(".case ul li:even").addClass("even")
	});
