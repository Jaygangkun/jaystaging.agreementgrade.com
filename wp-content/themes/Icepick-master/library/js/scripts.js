jQuery(document).ready(function($) {
	
	// Initialize AOS
	AOS.init();
	
	// Mobile Menu
	$('#menu-nav-menu > .dropdown').append("<div class='nav-toggle'><i class='fas fa-chevron-down'></i></div>");
	
	$('#menu-nav-menu .dropdown .nav-toggle').click(function() {
		$(this).siblings('ul.dropdown-menu').slideToggle(300);
		$(this).toggleClass('active');
	});
	
	$('.navbar-toggler').click(function() {
		$('body').toggleClass('nav-open');
	});
	

	// companies page
	$(document).on('click', '.companies-alpha-link', function() {
		let group = $(this).attr('data-group');
		let target = $('.companies-group[data-group="' + group + '"]');
		if($(target).length > 0) {
			$('html, body').animate({
				scrollTop: $(target).offset().top - 50
			}, 100, 'linear');
		}
	})

	var sort_field = 'rank';
	var sort_direction = 'asc';
	var filter_grade = '';

	function loadReportCard(p_btn_instance, p_post_id, p_pagination_index, p_sort_field, p_sort_direction, p_append) {
		$.ajax({
			url: wp_admin_url,
			type: 'post',
			data: {
				action: 'load_report_card',
				post_id: p_post_id,
				pagination_index: p_pagination_index,
				sort_field: p_sort_field,
				sort_direction: p_sort_direction,
				filter_grade: filter_grade
			},
			success: function(resp) {
				$(p_btn_instance).attr('pagination-index', p_pagination_index);
				if(p_append) {
					$('#report_card_list').append(resp);
				}
				else {
					$('#report_card_list').html(resp);
				}
				
			}
		})
	}

	$(document).on('click', '.load-report-cards-btn', function() {
		var btn_instance = this;
		var next_pagination_index = parseInt($(this).attr('pagination-index')) + 1;
		loadReportCard(btn_instance, $(this).attr('post-id'), next_pagination_index, sort_field, sort_direction, true);
		// $.ajax({
		// 	url: wp_admin_url,
		// 	type: 'post',
		// 	data: {
		// 		action: 'load_report_card',
		// 		post_id: $(this).attr('post-id'),
		// 		pagination_index: next_pagination_index,
		// 		sort_field: sort_field,
		// 		sort_direction: sort_direction
		// 	},
		// 	success: function(resp) {
		// 		$(btn_instance).attr('pagination-index', next_pagination_index);
		// 		$('#report_card_list').append(resp);
		// 	}
		// })
	})

	$(document).on('click', '.report-card-accordian-table-col.col-sortable', function() {
		sort_field = $(this).attr('sort-field');
		sort_direction = $(this).attr('sort-direction');

		$('.report-card-accordian-table-col').attr('sort-direction', '');

		var next_sort_direction = '';
		if(sort_direction == '') {
			next_sort_direction = 'asc';
			sort_direction = 'asc';
		}
		else if(sort_direction == 'asc') {
			next_sort_direction = 'desc';
			sort_direction = 'desc';
		}
		else {
			next_sort_direction = 'asc';
			sort_direction = 'asc';
		}
		
		var btn_instance = $('.load-report-cards-btn');
		var col_instance = $(this);
		$(col_instance).attr('sort-direction', next_sort_direction);

		loadReportCard(btn_instance, $('.load-report-cards-btn').attr('post-id'), 0, sort_field, next_sort_direction, false);
		// $.ajax({
		// 	url: wp_admin_url,
		// 	type: 'post',
		// 	data: {
		// 		action: 'load_report_card',
		// 		post_id: $('.load-report-cards-btn').attr('post-id'),
		// 		pagination_index: 0,
		// 		sort_field: sort_field,
		// 		sort_direction: next_sort_direction
		// 	},
		// 	success: function(resp) {
		// 		$(btn_instance).attr('pagination-index', 0);
		// 		$('#report_card_list').html(resp);
		// 	}
		// })
	})

	$(document).on('click', '.report-card-accordian-filter-link', function() {
		$('.report-card-accordian-filter-link').removeClass('active');
		$(this).addClass('active');

		filter_grade = $(this).attr('data-grade');
		var btn_instance = $('.load-report-cards-btn');
		loadReportCard(btn_instance, $('.load-report-cards-btn').attr('post-id'), 0, sort_field, sort_direction, false);
	})

	// homepage
	$(document).on('change', '#home_hero_fortune_select', function() {
		$('.home-hero-fortune-table-content').hide();
		$('.home-hero-fortune-table-content[fortune-index="' + $(this).val() +'"]').show();
	})

	// search button on nav
	$(document).on('click', '#nav_search_btn', function() {
		$('#nav_search_form').submit();
	})

	$(document).on('click', '#home_search_btn', function() {
		$('#home_search_form').submit();
	})
}); /* end of as page load scripts */