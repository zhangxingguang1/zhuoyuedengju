// $(function(){
// 	$('.classify1 a').hover(
// 		function(){
// 			$(this).addClass('hover');
// 		},
// 		function () {  
//             $(this).removeClass('hover');  
//         }
// 	)

// 	$('.seled').hover(function (){  
// 		$(this).removeClass('hover');  
//     })

// 	$('.classify1 a').filter('.sel-all').addClass('seled');

// 	$('.classify1 a').click(function(){
// 		if(! $(this).hasClass('seled')){
// 			$(this).addClass('seled');
// 			$(this).parent().siblings().children().removeClass('seled');
// 		}
// 		// $(this).toggleClass('seled');
// 		// $(this).parent().siblings().children().removeClass('seled');
// 		// $('.select ul').append($('.seled').not('.sel-all').parent().clone());
// 		$('.select ul').append($(this).not('.sel-all').parent().clone());
// 		// var i = $(this).parent().index();
// 		// 	if(i !== 0){
// 		// 		$('.select ul li:eq(0)').siblings().remove();
// 		// 		$('.select ul li:eq(0)').replaceWith($(this).not('.sel-all').parent().clone())
// 		// 	}	

// 	})

// 	// $('.classify1 ul').each(function(index){
// 	// 	$(this).attr('id', 's' + index);
// 	// 	$(this).children().attr('class', 'p' + index);
// 	// })
// })




$(function(){
	// news tabs
	$("#news_tab_content>div").not("#news_tab1").hide();
    $("#news_tabs li").each(function(index){
        $(this).click(function(){
        	$(this).parent().addClass('bre_action');
        	$(this).parent().siblings().removeClass('bre_action');
            $("#news_tab_content>div").eq(index).show().siblings().hide();
        })		          
    })
    // $(.bar li).each(function(){
    // 	$(this).on('click','#cate_tabs',function(){

    // 	})
    // })
    // 
    var pro_url = window.location.href;
    var henglan = pro_url.charAt(pro_url.length - 1);

    if(!isNaN(henglan)){
    	$('#cate_tabs li').eq(henglan-1).addClass('pro_henglan');
    }else{
    	$('#cate_tabs li').eq(0).addClass('pro_henglan');
    }
    // window.onhashchange=function(){
    // 	var pro_url = window.location.href;
    // 	var henglan = pro_url.charAt(pro_url.length - 1);
    // 	document.cookie='anchor='+henglan;
    // }
    // 
	// category tabs
	$("#cate_tab_content>div").not("#cate_tab1").hide();
	//$('#cate_tabs li').eq(0).css('background','#f0f8ff');
	//
	//$('#cate_tabs li').eq(0).addClass('pro_henglan');
	//

    $("#cate_tabs li").each(function(index){
        $(this).click(function(){
        	//$(this).css('background','#f0f8ff');
        	$(this).attr("class", "pro_henglan");
        	//
        	//$(this).siblings().css('background','#fff');
        	//
        	$(this).siblings().removeClass('pro_henglan');
        	//
            $("#cate_tab_content>div").eq(index).show().siblings().hide();
        })

        // append list

		// for (i = 0; i < $("#cate_tab_content>div").eq(index).find('.classify1 ul').length; i++) {
		// 	$("#cate_tab_content>div").eq(index).find('.select ul').append('<li class=\"sel-show\" style=\"display:none\"><a href=\"javascript:void(0);\" title=\"点击清除\"></a></li>');
		// }
		// show list
		$("#cate_tab_content>div").eq(index).find('.classify1 a').click(function(){
			if(! $(this).hasClass('seled')){
				$(this).addClass('seled');
				$(this).parent().siblings().children().removeClass('seled');
			}
			var index1 = $(this).parents('.classify1').index()-1;
			$("#cate_tab_content>div").eq(index).find('.select ul').show();
			$("#cate_tab_content>div").eq(index).find('.sel-show').eq(index1).show();
			$("#cate_tab_content>div").eq(index).find('.sel-show').eq(index1).find('a').text($(this).text());
			if($('.sel-show').eq(index1).find('a').text() === '全部'){
				$('.sel-show').eq(index1).hide();
			}
		})
		// clear list
		$("#cate_tab_content>div").eq(index).find('.sel-show a').click(function(){
			$(this).parents('.sel-show').hide();
			var index2 = $(this).parents('.sel-show').index();
			$("#cate_tab_content>div").eq(index).find('.classify1 ul').eq(index2).find('a').removeClass('seled');
			$("#cate_tab_content>div").eq(index).find('.sel-all').eq(index2).addClass('seled');
		});

    })

    // hover
	$('.classify1 a').hover(
		function(){
			$(this).addClass('hover');
		},
		function () {  
            $(this).removeClass('hover');  
        }
	)

	$('.seled').hover(function (){  
		$(this).removeClass('hover');  
    })

	$('.classify1 a').filter('.sel-all').addClass('seled');
})

