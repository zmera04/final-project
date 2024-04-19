/*!
* Start Bootstrap - Resume v7.0.6 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

$(document).ready(function(){
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
            url:`http://localhost:8888/#contactme`,
            type: "POST",
            data: data,
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log("whoops theres an error");
            }
        })
    })
    $()
})

/*
    $.ajax({
        url: `http://localhost:8888/#resume`,
        type: "GET",
        dataType: "json",
        success: function(data){
            console.log("success");
        },
        error: function(data){
            console.log("an error has occurred");
        }
    })
*/
