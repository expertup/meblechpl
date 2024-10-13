function change(typ){

var plik ='';
if(typ==0){plik='glowna/a';}
if(typ==1){plik='kontakt/a';}
if(typ==2){plik='galeria/a';}
if(typ==3){plik='fronty/a';}

$('#loader').animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
$('#dane').animate({ height: 'toggle', opacity: 'toggle' }, 'slow', function() {
	$(this).load(plik, function() {
		$(this).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');
			$('#loader').animate({ height: 'toggle' }, 'slow');
		if((typ==2)||(typ==3)){
			$("a.gall").fancybox();
		}
	});
	});
	
	

}

$("a.gall").fancybox();