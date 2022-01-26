jQuery('.quiz-prev-btn').hide();

	var x;
	var count;
	var current;
	var percent;
	var z = [];

	init();
	getCurrentSlide();
	goToNext();
	goToPrev();
	getCount();
	// checkStatus();
	// buttonConfig();
	buildStatus();
	deliverStatus();
	submitData();
	goBack();

	function init() 
	{	
		jQuery('.quiz-container .quiz-page').each(function() 
		{
			var item;
			var page;

			item = jQuery(this);
			page = item.data('page');

			item.addClass('quiz-page-'+page);
			//item.html(page);
		});
	}

	function getCount() 
	{
		count = jQuery('.quiz-page').length;
		return count;
	}

	function gotofirst()
	{
		jQuery("btn-1").on('click', function()
		{
			current = 1;
			count = 1;
			var g = current/count;
			buildProgress(g);
			var y = (count + 1);
			getButtons();
			jQuery('.quiz-page').removeClass('active');
			jQuery('.quiz-page-'+current).addClass('active');
			getCurrentSlide();
			checkStatus();
			if( jQuery('.quiz-page-'+count).hasClass('active') )
			{
				if( jQuery('.quiz-page-'+count).hasClass('pass') ) 
				{
					jQuery('.quiz-finish-btn').addClass('active');
				}
				else 
				{
					jQuery('.quiz-page-'+count+' .quiz-content .quiz-item').on('click', function() 
					{
						jQuery('.quiz-finish-btn').addClass('active');
					});
				}
			}
			else 
			{
				jQuery('.quiz-finish-btn').removeClass('active');
				if( jQuery('.quiz-page-'+current).hasClass('pass') ) 
				{
					jQuery('.quiz-container').addClass('good');
					jQuery('.quiz').addClass('okay');
				}
				else 
				{
					jQuery('.quiz-container').removeClass('good');
					jQuery('.quiz').removeClass('okay');
				}
			}
			buttonConfig();
		});
	}

	function goToNext()
	{
		jQuery('.quiz-next-btn').on('click', function() 
		{
			goToSlide(x);
			getCount();
			current = x + 1;
			var g = current/count;
			buildProgress(g);
			var y = (count + 1);
			getButtons();
			jQuery('.quiz-page').removeClass('active');
			jQuery('.quiz-page-'+current).addClass('active');
			getCurrentSlide();
			checkStatus();
			if( jQuery('.quiz-page-'+count).hasClass('active') )
			{
				if( jQuery('.quiz-page-'+count).hasClass('pass') ) 
				{
					jQuery('.quiz-finish-btn').addClass('active');
				}
				else 
				{
					jQuery('.quiz-page-'+count+' .quiz-content .quiz-item').on('click', function() 
					{
						jQuery('.quiz-finish-btn').addClass('active');
					});
				}
			}
			else 
			{
				jQuery('.quiz-finish-btn').removeClass('active');
				if( jQuery('.quiz-page-'+current).hasClass('pass') ) 
				{
					jQuery('.quiz-container').addClass('good');
					jQuery('.quiz').addClass('okay');
				}
				else 
				{
					jQuery('.quiz-container').removeClass('good');
					jQuery('.quiz').removeClass('okay');
				}
			}
			buttonConfig();
		});
	}




	function goToPrev() 
	{
		jQuery('.quiz-prev-btn').on('click', function() 
		{
			goToSlide(x);
			getCount();			
			current = (x - 1);
			var g = current/count;
			buildProgress(g);
			var y = count;
			getButtons();
			jQuery('.quiz-page').removeClass('active');
			jQuery('.quiz-page-'+current).addClass('active');
			getCurrentSlide();
			checkStatus();
			jQuery('.quiz-finish-btn').removeClass('active');
			if( jQuery('.quiz-page-'+current).hasClass('pass') ) 
			{
				jQuery('.quiz-container').addClass('good');
				jQuery('.quiz').addClass('okay');
			}
			else 
			{
				jQuery('.quiz-container').removeClass('good');
				jQuery('.quiz').removeClass('okay');
			}
			buttonConfig();
		});
	}



	function buildProgress(g) 
	{
		if(g > 1)
		{
			g = g - 1;
		}
		else if (g === 0)
		{
			g = 1;
		}
		g = g * 100;
		jQuery('.quiz-progress-bar').css({ 'width' : g+'%' });
	}

	function goToSlide(x) 
	{
		return x;
	}

	function getCurrentSlide() 
	{
		jQuery('.quiz-page').each(function() 
		{
			var item;
			item = jQuery(this);

			if( jQuery(item).hasClass('active') ) 
			{
				x = item.data('page');
			}
			else 
			{	
			}
			return x;
		});
	}

	

	function getButtons() 
	{
		if(current === 0) 
		{
			current = y;
		}
		if(current === count) 
		{
			jQuery('.quiz-next-btn').hide();
		}
		else if(current === 1) 
		{
			jQuery('.quiz-prev-btn').hide();
		}
		else 
		{
			jQuery('.quiz-next-btn').show();
			jQuery('.quiz-prev-btn').show();
		}
	}

	jQuery('.quiz-q li input').each(function() 
	{
		var item;
		item = jQuery(this);

		jQuery(item).on('click', function() 
		{
			if( jQuery('input:checked').length > 0 ) 
			{
		    	// console.log(item.val());
		    	jQuery('label').parent().removeClass('active');
		    	item.closest( 'li' ).addClass('active');
			}
			else 
			{
				//
			}
		});
	});

	percent = (x/count) * 100;
	jQuery('.quiz-progress-bar').css({ 'width' : percent+'%' });

	function checkStatus() 
	{
		jQuery('.quiz-content .quiz-item').on('click', function() 
		{
			var item;
			item = jQuery(this);
			item.closest('.quiz-page').addClass('pass');
		});
	}

	function buildStatus() 
	{
		jQuery('.quiz-content .quiz-item').on('click', function() 
		{
			var item;
			item = jQuery(this);
			item.addClass('bingo');
			item.closest('.quiz-page').addClass('pass');
			jQuery('.quiz-container').addClass('good');
		});
	}

	function deliverStatus() 
	{
		jQuery('.quiz-item').on('click', function() 
		{
			if( jQuery('.quiz-container').hasClass('good') )
			{
				jQuery('.quiz').addClass('okay');
			}
			else 
			{
				jQuery('.quiz').removeClass('okay');	
			}
			buttonConfig();
		});
	}

	function lastPage() 
	{
		if( jQuery('.quiz-next-btn').hasClass('cool') ) 
		{
			alert('cool');
		}
	}

	function buttonConfig() 
	{
		if( jQuery('.quiz').hasClass('okay') ) 
		{
			jQuery('.quiz-next-btn button').prop('disabled', false);
		}
		else 
		{
			jQuery('.quiz-next-btn button').prop('disabled', true);
		}
	}

	function gotopage()
	{
		jQuery('.btn-group')
	}

	function submitData() 
	{
		jQuery('.quiz-finish-btn').on('click', function() 
		{
			collectData();
			jQuery('.quiz-bottom').slideUp();
			jQuery('.quiz-results').slideDown();
		});
	}

	$('html').removeClass('no-js');

$('.menu-click a').on('click', function () {
  
  var el = $(this);
  
  // Show submenu
  el.parent().toggleClass('menu-active');
  
  // Hide other submenus
  el.parent().siblings('.menu-click.menu-active').removeClass('menu-active');
});

	function collectData() 
	{		
		var map = {};
		var ax = ['0','i), ii) and iii) would compile successfully and size of each would be same i.e. 4','4 4 4','No issue with any of the malloc() and free() i.e. no compile/run time error','All would compile successfully','No compile error and it’ll print IGNITRA 10 times','5','Choice A Choice B No choice','10','10','Stack','Compile error','64','Both will occupy same memory','package','0 8','A character string containing the name of the file & the second argument is the mode','Append','all of the above','SortedList','Error','all of the above','Compilation Error','Compiler','AAACCC'];
		
		var answer = '';
		var total = 0;
		var ttl = 0;
		var g;
		var c = 0;

		jQuery('.quiz-item input:checked').each(function(index, val) 
		{
			var item;
			var data;
			var name;
			var n;

			item = jQuery(this);
			data = item.val();
			name = item.data('item');
			n = parseInt(data);
			total += n;

			map[name] = data;
		});

		//jQuery('.quiz-results-container .quiz-results-list').html('');

		for (i = 1; i <= count; i++) 
		{
			var t = {};
			var m = {};
			answer += map[i] + '<br>';
			
			if( map[i] === ax[i]) 
			{
				g = map[i];
				p = 'correct';
				c = 1;
			}
			else 
			{
				g = map[i];
				p = 'incorrect';
				c = 0;
			}
			//jQuery('.quiz-results-list').append('<li class="quiz-results-item '+p+'"><span class="quiz-item-number">'+i+'</span><span class="quiz-item-info">'+g+' - '+p+'</span></li>');

			m[i] = c;
			ttl += m[i];
		}
		var results;
		  results = ( ( ttl / count ) * 100 ).toFixed(0);

		  jQuery('.quiz-results-score').html( results + '%' );
		 // jQuery('.quiz-results-score').html("Your quiz has been successfully Submitted!!!");
	}
	