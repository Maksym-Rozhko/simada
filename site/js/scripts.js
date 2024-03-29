document.addEventListener('DOMContentLoaded', () => {
    const smoothScrollToElems = (links) => {
        const anchorsLink = document.querySelectorAll(links);
      
        if (anchorsLink) {
            const smoothScroll = (anchors) => {
                for (let anchor of anchors) {
                    const blockID = anchor.getAttribute('href');
    
                    anchor.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (document.querySelector(blockID)) {
                            document.querySelector(blockID).scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        } else {
                            try {
                                localStorage.setItem('scrollTo', 'getStartedSteps');
                            } catch (error) {}
                            window.location.href = '/';
                        }
                    });
                };
            };
            
            smoothScroll(anchorsLink);
        }
    };
    
    smoothScrollToElems('a.scroll-link');

    new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 40,
        centeredSlides: true,
        speed: 1000,
        mousewheel: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
    });

    const modal = new GraphModal();

    const forms = document.querySelectorAll('.form');

    const inputTime = document.querySelector('.graph-modal .form input[type="time"]');
    const inputDate = document.querySelector('.graph-modal .form input[type="date"]');
    
    const date = new Date();

    const currentTime = [date.getHours(), date.getMinutes()].map(function (x) {
        return x < 10 ? "0" + x : x;
    }).join(":");       
    const currentDate = [date.getFullYear(), date.getMonth() + 1, date.getDate()].map(function (x) {
        return x < 10 ? "0" + x : x;
    }).join("-");    

    if (forms) {
        forms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                if (modal.isOpen) {
                    modal.close('form');
                }
                
                $.ajax({
                    url: $(".graph-modal form").attr("action"),
                    data: $(".graph-modal form").serialize(),
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    context: document.body,
                    success: function () {
                        modal.open('thanks');
                        form.reset();
                        setTimeout(function(){
                            location.reload();
                        }, 2000)
                    },
                    error: function () {
                    },
                });
                
                inputTime.value = currentTime;
                inputDate.value = currentDate;
            });
        });
    }

    // inputTime.value = currentTime;
    // inputDate.value = currentDate;
    // inputDate.setAttribute('min', currentDate);
});