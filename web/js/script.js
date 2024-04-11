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

$(document).ready(function() {
    const activeNavItem = window.location.pathname;
    $('.nav-down a').each(function() {
        if ($(this).attr('href').includes(activeNavItem)) {
            $(this).addClass('active-linkPage');
        }
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

    $('#dropMobItem').click(function() {
        $('.drop-mob-div').toggleClass('open')
    })
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
        // autoplay: {
        //     delay: 5000, 
        // },
      
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

const questions = document.querySelectorAll('.question');

questions.forEach(question => {
    question.addEventListener('click', () => {
        const currentQuestion = question.parentElement;
        const currentAnswer = currentQuestion.querySelector('.answer');
        const currentPlusIcon = currentQuestion.querySelector('.plus i');

        document.querySelectorAll('.quest-ans-item').forEach(item => {
            if (item !== currentQuestion && item.classList.contains('show')) {
                item.classList.remove('show');
                const otherPlusIcon = item.querySelector('.plus i');
                otherPlusIcon.classList.remove('bi-dash-lg');
                otherPlusIcon.classList.add('bi-plus-lg');
            }
        });

        currentQuestion.classList.toggle('show');
        currentAnswer.classList.toggle('show');

        if (currentQuestion.classList.contains('show')) {
            currentPlusIcon.classList.remove('bi-plus-lg');
            currentPlusIcon.classList.add('bi-dash-lg');
        } else {
            currentPlusIcon.classList.remove('bi-dash-lg');
            currentPlusIcon.classList.add('bi-plus-lg');
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


