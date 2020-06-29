$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


//Bootstrap file name in upload button
	$(document).ready(function() {
	  $('input[type="file"]').on("change", function() {
	    let filenames = [];
	    let files = document.getElementById("customFile").files;
	    if (files.length > 1) {
	      filenames.push("Total Files (" + files.length + ")");
	    } else {
	      for (let i in files) {
	        if (files.hasOwnProperty(i)) {
	          filenames.push(files[i].name);
	        }
	      }
	    }
	    $(this)
	      .next(".custom-file-label")
	      .html(filenames.join(","));
	  });
	});


});