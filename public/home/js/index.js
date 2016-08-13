$(function(){
	//$('.section1 h1').addClass('animate01')
	$('#dowebok').fullpage({
		sectionsColor: ['#A2CD5A', '#86c9d1', '#ec8187', '#3a97d2'],
		//verticalCentered:false,
		css3:true,
		resize:true,
		easing:'easeInOutBounce',
		anchors: ['page1', 'page2', 'page3', 'page4'],
		menu: '#menu',
		slidesNavigation:true,
		navigation: true,
		navigationTooltips: ['博客简介', '最新文章', '最新图片', '网站相关'],
		//showActiveTooltip:true,
		onLeave: function(index,nextIndex, direction){
			if(index < nextIndex){
				$('.navbar-qshang').addClass('navbar-hidden');
			}else{
				$('.navbar-qshang').removeClass('navbar-hidden');
			}
			switch(index){
				case 1:
					$('.section1 h1').removeClass('animate01');
					$('.section1 .fbt').removeClass('animate01');
					$('.applyBox img').removeClass('animate01');
					$('.applyBox .txt').removeClass('animate01');
					$('.homeBtn2').removeClass('animate01');
					break;
				case 2:
					$('.section2 h1').removeClass('animate01');
					$('.section2 .fbt').removeClass('animate01');
					$('.arBox').removeClass('animate02');
					$('.qshang-list').removeClass('animate01');
					break;
				case 3:
					$('.section3 h1').removeClass('animate01');
					$('.section3 .fbt').removeClass('animate01');
					$('.img-box').removeClass('animate01');
					$('.photoBtn').removeClass('animate02');
					break;
				case 4:
					$('.section4 h1').removeClass('animate01');
					$('.cody').removeClass('animate01');
					$('.section4 .fbt').removeClass('animate02');
					$('.btnBox a').removeClass('animate03');
					break;
				default:
					break;
			}
		},
		afterLoad :function(anchorLink, index){
			switch(index){
				case 1:
					$('.section1 h1').addClass('animate01');
					$('.section1 .fbt').addClass('animate01');
					$('.applyBox img').addClass('animate01');
					$('.applyBox .txt').addClass('animate01');
					$('.homeBtn2').addClass('animate01');
					break;
				case 2:
					$('.section2 h1').addClass('animate01');
					$('.section2 .fbt').addClass('animate01');
					$('.arBox').addClass('animate02');
					$('.qshang-list').addClass('animate01');
					break;
				case 3:
					$('.section3 h1').addClass('animate01');
					$('.section3 .fbt').addClass('animate01');
					$('.img-box').addClass('animate01');
					$('.photoBtn').addClass('animate02');
					break;
				case 4:
					$('.section4 h1').addClass('animate01');
					$('.cody').addClass('animate01');
					$('.section4 .fbt').addClass('animate02');
					$('.btnBox a').addClass('animate03');
					break;
				default:
					break;
			}
		},
		afterRender :function(){
			$('.section1 h1').addClass('animate01');
			$('.section1 .fbt').addClass('animate01');
			$('.applyBox img').addClass('animate01');
			$('.applyBox .txt').addClass('animate01');
			$('.homeBtn2').addClass('animate01');
		}

	});

});