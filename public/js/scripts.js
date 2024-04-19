/*!
* Start Bootstrap - Resume v7.0.6 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/

$(document).ready(function(){
    // Function to update URL based on scroll position
    function updateURL() {
        var sections = $('.resume-section');
        var scrollPosition = $(window).scrollTop();

        // Find the current section
        var currentSection = null;
        sections.each(function(index, section) {
            var sectionTop = $(section).offset().top;
            var sectionBottom = sectionTop + $(section).outerHeight();
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                currentSection = section;
            }
        });

        // Update URL based on the current section
        if (currentSection) {
            var sectionId = $(currentSection).attr('id');
            var url = '#' + sectionId;
            window.history.pushState({ path: url }, '', url);
        }
    }

    // Call the updateURL function when the page loads
    updateURL();

    // Add event listener for scroll
    $(window).scroll(function() {
        updateURL();
    });

    $('#resumeButton').on('click', function(e){
        $.ajax({
            url: `http://localhost:8888/resume`,
            type: "GET",
            dataType: "json",
            success: function(data){
                console.log(data[0].source);
                window.open(data[0].source,'_blank');
            },
            error: function(data){
                console.log(data);
            }
        })
    });

    // Submit form using AJAX
    $('#contactForm').on('submit', function(e){
        e.preventDefault();
        const firstName = $('#firstnameInput').val();
        const lastName = $('#lastnameInput').val();
        const email = $('#emailInput').val();
        const message = $('#messageInput').val();

        const data = {
            firstName, 
            lastName, 
            email, 
            message
        };

        $.ajax({
            url:`http://localhost:8888/`,
            type: "POST",
            data: data,
            dataType: "json",
            success: function(data){
                console.log(data);
                $('#contactForm').each(function(){
                    this.reset();
                })
            },
            error: function(data){
                console.log("whoops theres an error");
            }
        });
    });

    // Collapse responsive navbar when toggler is visible
    $('.nav-link').click(function() {
        const navbarToggler = $('.navbar-toggler');
        if (navbarToggler.is(':visible')) {
            navbarToggler.click();
        }
    });

    // Activate Bootstrap scrollspy on the main nav element
    $('body').scrollspy({
        target: '#sideNav',
        offset: -40
    });
});
