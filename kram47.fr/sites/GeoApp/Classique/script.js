jQuery(function($){
				$('.map').append('<div class="overlay">').append('<div class="tooltip"> Salut les gens </div>');
				$('.map .tooltip').hide();
				$('.infoBox').hide();
				
				i1 = new Image;
i1.src = "images/monimages1.gif";
i2 = new Image;
i2.src = "images/monimages2.gif";
				
				
				
				$(document).mousemove(function(e){
					$('.map .tooltip').css({
						top:e.pageY - $('.map .tooltip').height() - 20,
						left:e.pageX - $('.map .tooltip').width()/2 - 10	
					});
				});
				
				$('.map area').each(function(){
					var index = $(this).index();
					$(this).attr('href', 'http://fr.wikipedia.org/wiki/' + pays[index].slug);
					img = new Image;
					img.src = pays[index].country_name;
				});
				
				
				$('.map area').mouseover(function(){
					var index = $(this).index();
					var left = -561 * (index + 1);
					if (index > 1 && index <= 30)
						left += index / 2;
					if (index > 30)
						left += 30 / 2 -1;
					$('.map .tooltip').html(pays[index].country_name).stop().fadeTo(500, 0.8);
					$('.infoBox').stop().fadeTo(100, 1);
					
					$('.map .overlay').css ({
						backgroundPosition : left + "px 0px"
					});
					
					$('.infoBox #country_flag img').attr("src", "flags/" + pays[index].country_name + ".png");
					
					$('.infoBox #country_name').html(pays[index].country_name);
					$('.infoBox #country_language').html(pays[index].country_language);
					$('.infoBox #country_capital').html(pays[index].country_capital);
					$('.infoBox #country_politic_system').html(pays[index].country_politic_system);
					$('.infoBox #country_leader').html(pays[index].country_leader);
					$('.infoBox #country_leader_title').html(pays[index].country_leader_title);
					$('.infoBox #country_size').html(pays[index].country_size);
					$('.infoBox #country_population').html(pays[index].country_population);
					$('.infoBox #country_density').html(pays[index].country_density);
					$('.infoBox #country_currency').html(pays[index].country_currency);
					$('.infoBox #country_religion').html(pays[index].country_religion);
					$('.infoBox #country_HID').html(pays[index].country_HID);
					$('.infoBox #country_GDB').html(pays[index].country_GDB);
				});
				
				$('.map').mouseout(function(){
					$('.map .overlay').css ({
						backgroundPosition : "561px 0px"
					});
					
					$('.map .tooltip').stop().fadeTo(200,0);
					
					
					$('.infoBox').stop().fadeTo(500, 0);
				});
			})
			