jQuery(document).ready(function ($) {
            
            $(".tab_content").hide();
	// Mặc định nội dung thẻ tab đầu tiên sẽ được hiển thị
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		// gỡ bỏ class="active" cho tất cả các thẻ <li>
		$("ul.tabs li").removeClass("active");
		// chèn class="active" vào phần tử <li> vừa được click
		$(this).addClass("active");
		// ẩn tất cả thẻ <div> với class="tab_content"
		$(".tab_content").hide();
		//Hiển thị nội dung thẻ tab được click với hiệu ứng Fade In
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});

            var mainMenu = $('.main_menu');

            $('.navbar-icon').click(function(){
                mainMenu.toggle();
            });
            $(window).on('resize', function(event) {
               if ($(window).width() < 941) {
                        mainMenu.css('display', 'none');
               }; 
            });
            $(window).on('resize', function(event) {
               if ($(window).width() >= 941) {
                    if (mainMenu.css('display') == 'none') {
                        mainMenu.css('display', 'block');
                    };
               }; 
            });

             mainMenu.find('li').on('click', function() {
                mainMenu.find('li').removeClass('active');
                $(this).addClass('active');
            });
            
            $('#edit').click(function(){
                $('.edit').slideToggle();
                
            });
            $('#change_password').click(function(){
                $('.change_password').slideToggle();
                
            });
            $('#change').click(function(){
                $('.change_password').show();
                
            });
            
});