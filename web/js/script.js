document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        
    });
});

// language

$(document).ready(function() {
    $('.lang-item').click(function() {
        // Remove 'selected' class from all items
        $('.lang-item').removeClass('selected');
        
        // Add 'selected' class to the clicked item
        $(this).addClass('selected');
        
        // Clone the clicked item and append it to the selected-lang container
        var selectedItem = $(this).clone();
        $('.selected-lang').empty().append(selectedItem);
    });
});

// active nav link

const navLinks = document.querySelectorAll(".navbar a");
const currentUrl = window.location.href;

navLinks.forEach((link) => {
    if (link.href === currentUrl) {
        link.classList.add("activeLink");
    }
});

// $(document).ready(function() {
//     var currentUrl = window.location.href;

//     $(".navbar li a").each(function() {
//         if ($(this).attr("href") === currentUrl) {
//             $(this).addClass("activeLink");
//         }
//     });
// });

// active link for sidebar

$(document).ready(function() {
    $('.sidebar .navbar-mobile .nav-mob-item .nav-mob-link,.drop-mob-link-2,.drop-mob-link-3').each(function() {
        if ($(this).attr('href') === window.location.pathname) {
            $(this).addClass('activeLinkSide');
        }
        $(this).on('click', function(event) {
            event.preventDefault();
            $('.sidebar .navbar-mobile .nav-mob-item .nav-mob-link,.drop-mob-link-2,.drop-mob-link-3').removeClass('activeLinkSide');
            $(this).addClass('activeLinkSide');
            window.location.href = $(this).attr('href');
        });
    });
});

// mobile menu

$(document).ready(function() {
    $('#menuToggle').click(function() {
        $('.sidebar').toggleClass('active');
    });

    $('#closeSidebar').click(function() {
        $('.sidebar').removeClass('active');
    });

});

// searchUp open

$(document).ready(function() {
    const $searchUpForm = $("#searchUpForm");
    const $searchToggleIcon = $("#searchToggleIcon");

    function toggleSearchUp() {
        $searchUpForm.toggleClass("active-search");
    }

    $searchToggleIcon.on("click", function() {
        toggleSearchUp();
    });

    $(document).on("click", function(event) {
        if (!$searchUpForm.is(event.target) && !$searchToggleIcon.is(event.target) && $searchUpForm.has(event.target).length === 0 && $searchToggleIcon.has(event.target).length === 0) {
            $searchUpForm.removeClass("active-search");
        }
    });
});

// header slider

document.addEventListener("DOMContentLoaded",function() {
    var swiper = new Swiper(".headerSwiper", {
        spaceBetween: 30,
        effect: "fade",
        speed:1000,
        loop:true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".header-pagination",
          clickable: true,      
        },
        autoplay: {
            delay: 5000, 
        },      
    });
    AOS.init();
})

// header title animate

// Cilents slider

var clientSwiper = new Swiper(".clients-slide", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    slidesPerGroupSkip: 1,
    spaceBetween: 30,
    loop:true,
    pagination: {
        el: ".clients-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 4000, 
        disableOnInteraction: false, 
    },
    breakpoints: {
        992: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            slidesPerGroupSkip: 1,
            spaceBetween:50,
        },
        
    }
});


// question answer 

$(document).ready(function() {
    $('.question').click(function() {
        var currentQuestion = $(this).parent();
        var currentAnswer = currentQuestion.find('.answer');
        var currentPlusIcon = currentQuestion.find('.plus i');

        $('.quest-ans-item').each(function() {
            if (!$(this).is(currentQuestion) && $(this).hasClass('show')) {
                $(this).removeClass('show');
                var otherPlusIcon = $(this).find('.plus i');
                otherPlusIcon.removeClass('bi-dash-lg').addClass('bi-plus-lg');
            }
        });

        currentQuestion.toggleClass('show');
        currentAnswer.toggleClass('show');

        if (currentQuestion.hasClass('show')) {
            currentPlusIcon.removeClass('bi-plus-lg').addClass('bi-dash-lg');
        } else {
            currentPlusIcon.removeClass('bi-dash-lg').addClass('bi-plus-lg');
        }
    });
});

// brands swiper

var swiper = new Swiper('.brandsSwiper', {
    slidesPerView: 1,
    // spaceBetween:80,
    loop:true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 4000, // Specify the time interval between slides in milliseconds (e.g., 5000ms = 5 seconds)
        disableOnInteraction: false, // Set to false to continue autoplay after user interaction
    },
    breakpoints: {
        525: {
            slidesPerView:6,
            spaceBetween:35,
        },
        350: {
            slidesPerView:3,
            spaceBetween:30,
        }
    }
  
 
});


///////////////////

$('body').on('click', '#editeBlog', function(e) {
    e.preventDefault(e);
    var id = $('.sortableTable tr.active').attr('data-id');
    editeBlog(id);
});
function editeBlog(id) {
    if (id) {
        jQuery.ajax({
            url: "/admin/news-edite?id=" + id,
            success: function(result) {
                jQuery(".modals").html(result);
            }
        });
    }
}
$('body').on('click','.table tr',function(){
    $('body').find('.table-bordered').find('tr').removeClass('active');
    $(this).addClass('active');
})

