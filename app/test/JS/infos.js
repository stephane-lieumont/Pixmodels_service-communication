function CircleCanvas(){
	$(".round").each(function(){
			var $input = $(this).find("p");
			var $container = $input.parent();
			var min = $container.data("min");
			var max = $container.data("max");
			var valeur = $input.text().replace('%', '');
			var ratio = (valeur - min)/(max - min);

				
			
										
			$circle = $('<canvas width="200px" height="200px" />')
			$circleInner = $('<canvas class="CircleIn" width="200px" height="200px" />')
						
			$container.append($circle);
			$container.append($circleInner);
			
			var ctx = $circle[0].getContext('2d');							
			ctx.beginPath();							
			ctx.arc(100,100,80, 0, 2*Math.PI);							
			ctx.lineWidth = 3;
			ctx.strokeStyle = "#dedede";
			ctx.stroke();
		
			var ctx = $circleInner[0].getContext('2d');							
			
		
			$({percentage: min}).stop(true).animate({percentage: valeur},{duration : 3000, step: function(){
					var percentageVal = Math.round(this.percentage);
					$input.text(percentageVal + '%');															

					ctx.clearRect(0,0,200,200);
					ctx.beginPath();
					ctx.arc(100,100,80, -1/2 * Math.PI, (percentageVal/100)*2*Math.PI - 1/2*Math.PI );						
					ctx.lineWidth = 3;
					ctx.strokeStyle = "#f6464a ";
					ctx.stroke();	
				}								
			});						
		}					
	)				
}

function BarrCanvas(delay){						
	$(".progressBarre").each(function(){
		var $container = $(this).parent();
		var min = $(this).data("min");
		var max = $(this).data("max");
		var valeur = $(this).text();
		var ratio = (valeur - min)/(max - min);
		var percentWidth = $(this).parent().width()*0.80;//75% width de l'ecran
																					
		$barre = $('<canvas width="'+percentWidth+'" height="50px" />');
												
		$container.append($barre);
		var ctx = $barre[0].getContext('2d');
		ctx.beginPath();
		ctx.lineWidth="5";
		ctx.strokeStyle="#9b938b";
		ctx.moveTo(0,25);
		ctx.lineTo(percentWidth,25);
		ctx.stroke();
		
	})
	
	BarrCanvasAnim(delay);
}

function BarrCanvasAnim(delay){
	$(".progressBarre").each(function(){
		var $container = $(this).parent();
		var min = $(this).data("min");
		var max = $(this).data("max");
		var valeur = $(this).text();
		var ratio = (valeur - min)/(max - min);
		var percentWidth = $(this).parent().width()*0.80;//75% width de l'ecran
		var tableColor = ["#2f73ff", "#ecb200", "#e404ec", "#31cf00", "#bbd9d0", "#039a7f", "#ec6f13", "#022b45"]
		
		
		
		
		setTimeout(function(){		
			$barreInner = $('<canvas class="barIn" width="'+ percentWidth+'" height="50px" />');
			$container.append($barreInner);
			var ctx2 = $barreInner[0].getContext('2d');
			
			$({percentage: min}).stop(true).animate({percentage: valeur},{duration : 1000, step: function(){
					var percentageVal = Math.round(this.percentage);									
					ctx2.beginPath();
					ctx2.clearRect(0,0,percentWidth,50);
					
					ctx2.lineWidth="5";
					ctx2.strokeStyle="#eae3d5";
					ctx2.moveTo(0,25);
					ctx2.lineTo((percentWidth*(percentageVal/100)),25);
					ctx2.stroke();
																			
					ctx2.arc((percentWidth*(percentageVal/100)), 25, 7, 0, 2 * Math.PI);
					ctx2.fillStyle=tableColor[$container.index()];
					ctx2.fill();
					
				}								
			});							
		}, delay*$container.index());							
	})
}

function apparBarr(){
	var scrolled = $(window).scrollTop();
	var hauteur_fenetre = $(window).height();
	var decallage = 0.59 * hauteur_fenetre;	
	
	if(scrolled > decallage && !$(".barIn").length){
		BarrCanvas(300);
	}
}

function apparCircle(){
	var scrolled = $(window).scrollTop();
	var hauteur_fenetre = $(window).height();
	var decallage = 0.30 * hauteur_fenetre;
	
	if(scrolled > decallage && !$(".CircleIn").length){
		CircleCanvas();
	}
}

function parallax(){
	var scrolled = $(window).scrollTop();
	var isSafari = navigator.vendor.indexOf("Apple")==0 && /\sSafari\//.test(navigator.userAgent); // true or false
	
	if(!isSafari){
		$('.BGminimize').css('top', (scrolled * 0.5) +'px');						
	}	
}
				