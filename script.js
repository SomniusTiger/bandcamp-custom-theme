//jQuery below here.

$(function(){

	// WINDOW RESIZE
	
	$(window).on("resize", windowResize);

	function windowResize(){

		$('#latestmask .antiscroll-inner, .personaMask .antiscroll-inner').css({
			'width' : $(window).width()
		});
	}

	// NAVIGATION-RELATED STUFF

	//Antiscroll code snippet
	//$('#latestMask.antiscroll-wrap, .personaMask.antiscroll-wrap').antiscroll();

	//Get height of each li element inside of the sidenav,
	//and then save that cumulative size so it can properly expand later.

	var personasExpandSize = 0;
	var personasInList = 1;		
		
	$('#personaExpand').find("li").each(function(){
		personasInList += 1;
	});

	personasExpandSize += personasInList * 50;

	//When the sidenav button is clicked/touched, move the content over to reveal the side navigation.
	//When clicked/touched again, move the content back.

	//Also when the sidenav button is clicked, overlay a grey div
	//that covers the main content to keep from users scrolling
	//the main content div while that is open.

	var isSideNavOpen = false;

	$('#sideNavBtn').click(function(){

		//Open SideNav
		if (isSideNavOpen == false)
		{
			$('nav, #sideNav').css({
				'margin-left': '80%'
			});

			/*
			$('#overlay').css({
				'opacity' : 0.5,
				'z-index' : 2
			});

			$('body').css({
				'overflow' : 'hidden',
				'position' : 'absolute'
			});*/


			isSideNavOpen = true;
		}

		//Close SideNav
		else
		{
			$('nav, #sideNav').css({
				'margin-left': '0'
			});

			/*

			$('#overlay').css({
				'z-index' : '-2',
				'opacity' : 0
			});

			$('body').css({
				'overflow-y' : 'scroll',
				'position' : 'static'
			});

*/

			isSideNavOpen = false;

			//If the Personas section is expanded, collapse it when closing
			//the side nav.
			if(isPersonasOpen == true)
			{
				$('#personaExpand').css({
				'height' : '50px'
				});

				isPersonasOpen = false;
			}
		}
	});

	//When the persona expand button is clicked, 
	//expand to see all the personas.

	var isPersonasOpen = false;

	
	$('#personaBtn').click(function(){

		var personasHeight = $('#persona')

		if(isPersonasOpen == false)
		{
			$('#personaExpand').css({
				'height' : ''+ personasExpandSize + 'px'
			});

			isPersonasOpen = true;
			//Set a timeout function to activate after the animation has run
		}
		else{
			$('#personaExpand').css({
				'height' : '50px'
			});

			isPersonasOpen = false;
		}

	});

	//When the buttons in the side nav are clicked, get the data-id.
	//Use the data-id to find the corresponding persona on the page, 
	//and jump straight to it by scrolling.

	$("ul#personalist li").click(function(){

		//get the data-id of the clicked element
		var personaClicked = $(this).attr('data-id');

		//get the height of the corresponding artist on the page
		var whereToScroll = $(".personaMask[data-id='"+personaClicked+"']").offset().top;

		//Then close the sidenav and personas list.
		$('nav, #sideNav').css({
			'margin-left': '0'
		});

		isSideNavOpen = false;

		$('#personaExpand').css({
			'height' : '50px'
		});

		isPersonasOpen = false;

		$('html, body').animate({
			'scrollTop' : whereToScroll-85
		}, 500);



	});


});