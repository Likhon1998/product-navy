let menuData = {
    "menu": [
        {
            "label": "Home",
            "url": "index.html",
            "children": []
        },
        {
            "label": "About Us",
            "url": "#",
            "children": [
                {"label": "History of BNFWA", "url": "history.html", "children": []},
                {"label": "Chief Patron's Message", "url": "chief-message.html", "children": []},
                {"label": "President's statement", "url": "president.html", "children": []},
                {"label": "Vision and Mission", "url": "vision-mission.html", "children": []},
                {"label": "Former President", "url": "former-president.html", "children": []},
                {"label": "Organization", "url": "organization.html", "children": []},
            ]
        },
        {
            "label": "What We Do",
            "url": "#",
            "children": [
                {"label": "Role of BNFWA", "url": "role-of-bnfwa.html", "children": []},
                {"label": "BN Ladies Club", "url": "ladies-club.html", "children": []},
                {"label": "Nou Paribar Shishu Niketon School", "url": "shishu-niketon.html", "children": []},
                {"label": "Ashar Alo School", "url": "ashar-alo.html", "children": []},
                {"label": "Day Care Centre", "url": "day-care-centre.html", "children": []}
            ]
        },
        {
            "label": "BNFWA Initiative",
            "url": "#",
            "children": [
                {"label": "Jhinuk Crafting & Training Center (JC & TC)", "url": "je-tc.html", "children": []},
                {"label": "Day Care", "url": "day-care-centre.html", "children": []},
            ]
        },
        // {
        //     "label": "Organization",
        //     "url": "#",
        //     "children": [
        //         {"label": "BNFWA Organization", "url": "#", "children": []},
        //         {"label": "Future Development", "url": "#", "children": []},
        //     ]
        // },

        {
            "label": "Jhinuk Products",
            "url": "products.html",
            "children": []
        },
        {
            "label": "Publication & Media",
            "url": "#",
            "children": [
                {"label": "News and Events", "url": "events.html", "children": []},
                {"label": "Naval Publications", "url": "publications.html", "children": []},
                {"label": "Naval Magazine", "url": "magazine.html", "children": []},
                {"label": "Results & Circular", "url": "notice.html", "children": []},
                {"label": "Photo Gallery", "url": "gallery.html", "children": []}
            ]
        },
        {
            "label": "Contact Us",
            "url": "#",
            "children": []
        },
    ]
}

const VISITOR_COUNTER = `
<div class="col">
    <a href="https://info.flagcounter.com/6qw4"><img
    src="https://s01.flagcounter.com/mini/6qw4/bg_FFFFFF/txt_000000/border_CCCCCC/flags_0/"
    alt="Flag Counter" border="0"></a>
</div>
`;

function toggleLanguage(lang) {
    // alert(lang)
    // Toggle visibility based on the selected language
    if (lang === 'en') {
        $('.lang-en').removeClass('hidden');  // Show English
        $('.lang-bn').addClass('hidden');    // Hide Bengali
        // Update active class on buttons
        $('.lang-btn-en').addClass('active');
        $('.lang-btn-bn').removeClass('active');
    } else if (lang === 'bn') {
        $('.lang-en').addClass('hidden');    // Hide English
        $('.lang-bn').removeClass('hidden'); // Show Bengali
        // Update active class on buttons
        $('.lang-btn-en').removeClass('active');
        $('.lang-btn-bn').addClass('active');
    }

    // Store the preference in localStorage
    localStorage.setItem('preferredLanguage', lang);

}


(function ($) {

    $(document).ready(function () {

        // $(".footer-copyright .row").append(VISITOR_COUNTER);


        $(document).on('click', function (e) {
            // console.log(e.target.className)
            if (e.target.className === "floating-menu-wrapper") {
                $("body").removeClass("floating-menu-activated");
            }
        });


        $('body').addClass('preloader-site');

        //Fixed Nav
        // var offset = 100;
        // jQuery(window).scroll(function () {
        //     if (jQuery(this).scrollTop() > offset) {
        //         jQuery('.site-header').addClass("fixed-header");
        //         jQuery('.header-logo img').attr("src", "assets/images/logo.svg");
        //
        //     } else if (jQuery(this).scrollTop() < offset) {
        //         jQuery('.site-header').removeClass("fixed-header");
        //         jQuery('body').removeClass("mobile-menu-activated");
        //         jQuery('.header-logo img').attr("src", "assets/images/logo-home.svg");
        //     }
        // });

        $(".product-item").on("click", function (e) {
            e.preventDefault(); // Prevent default link behavior

            // Get the HTML content of the clicked product item
            let productContent = $(this).html();
            // console.log(productContent);

            // Display the product content in the modal
            $("#modal-product-content").html(productContent);

            // Extract the product name from the <h3> element inside the clicked product item
            let productName = $(this).find("h3").text().trim();

            // Set the product name in the hidden input field
            $("#product_name").val(productName);
        });

        // Simulate menu data
        let currentLevel = 1;

        // Function to render a menu level dynamically
        function renderMenu(level, parentLabel = null, menuItems) {
            let menuContainer = $('#menu-container');
            let levelContainerId = `level-${level}`;

            // Check if this level already exists
            let menuLevel = $(`#${levelContainerId}`);
            if (menuLevel.length === 0) {
                // Create a new level container
                menuLevel = $('<div></div>', {id: levelContainerId, class: 'menu-level'});
                menuContainer.append(menuLevel);
            } else {
                menuLevel.empty(); // Clear it if it exists
            }

            if (parentLabel) {
                menuLevel.append(`<div class="back-button" data-level="${level}"><i class="fa-solid fa-arrow-left"></i> ${parentLabel.label}</div>`);
            }

            // Populate the menu items
            menuItems.forEach(item => {
                menuLevel.append(`<a href="${item.url}" class="menu-item" data-label="${item.label}" data-level="${level}">${item.label} ${item.children.length > 0 ? "<i class='fa fa-chevron-right'></i>" : ""}</a>`);
            });

            // Show this menu level, sliding it in
            setTimeout(function () {
                menuLevel.removeClass('outgoing-label hidden-label').addClass('visible-label');
            }, (100))

        }

        // Function to hide the current level and show the next level
        function navigateForward(current, next) {
            $(`#level-${current}`).removeClass('visible-label').addClass('outgoing-label');
            setTimeout(function () {
                $(`#level-${next}`).removeClass('hidden-label').addClass('visible-label');
            }, (100))
        }

        // Function to hide the current level and go back to the previous level
        function navigateBack(current, previous) {
            $(`#level-${current}`).removeClass('visible-label').addClass('hidden-label');
            $(`#level-${previous}`).removeClass('outgoing-label').addClass('visible-label');
        }

        // Function to find a menu item by label recursively
        function findItemByLabel(menuItems, label) {
            for (let item of menuItems) {
                if (item.label === label) return item;
                if (item.children && item.children.length > 0) {
                    let found = findItemByLabel(item.children, label);
                    if (found) return found;
                }
            }
            return null;
        }

        // Handle clicking on menu items
        $(document).on('click', '.menu-item', function () {
            let level = parseInt($(this).attr('data-level'));
            let label = $(this).attr('data-label');

            // Find the clicked item in the data
            let selectedItem = findItemByLabel(menuData.menu, label);

            // If the selected item has children, render the next level
            if (selectedItem && selectedItem.children.length > 0) {
                renderMenu(level + 1, selectedItem, selectedItem.children);
                navigateForward(level, level + 1);
                currentLevel = level + 1;
            }
        });

        // Handle back button click
        $(document).on('click', '.back-button', function () {
            let level = parseInt($(this).attr('data-level'));
            navigateBack(level, level - 1);
            currentLevel = level - 1;
        });

        // Initial render of the first level menu
        renderMenu(1, null, menuData.menu);


        $(document).on('keydown', function (event) {
            if (event.key === "Escape") { // Check if the pressed key is "Esc"
                $("body").removeClass("floating-menu-activated");
            }
        });


        // On page load, check if the user has a preferred language stored
        const savedLang = localStorage.getItem('preferredLanguage') || 'bn'; // Default to English if no preference
        toggleLanguage(savedLang);


        $('.floating-menu-trigger').on('click', function () {
            $('body').toggleClass('floating-menu-activated');
        });

        $(".close-floating-menu").on('click', function () {
            $("body").removeClass("floating-menu-activated");
        });


    });

    $(window).on('load', function () {
        $('.preloader-wrapper').fadeOut();
        $('body').removeClass('preloader-site');
    });


})(jQuery);


