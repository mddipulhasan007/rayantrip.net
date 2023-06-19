$(() => {
    var createSlick = () => {
        let slider = $(".slider");

        slider.not('.slick-initialized').slick({
            autoplay: true,
            infinite: true,
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        adaptiveHeight: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    createSlick();

    $(window).on('resize orientationchange', createSlick);
})




$(() => {
    var createSlick = () => {
        let slider = $(".offer-slider");

        slider.not('.slick-initialized').slick({
            autoplay: false,
            infinite: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        adaptiveHeight: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    createSlick();

    $(window).on('resize orientationchange', createSlick);
})


$(() => {
    var createSlick = () => {
        let slider = $(".items-slider");

        slider.not('.slick-initialized').slick({
            autoplay: false,
            infinite: true,
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        adaptiveHeight: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    createSlick();

    $(window).on('resize orientationchange', createSlick);
})



function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}


$(".selected-curr").on("click", function () {

    $(".currency-popup").toggleClass("d-block")

});



$(function () {
    var dateFormat = "yy-mm-dd",
        from = $("#from")
            .datepicker({
                dateFormat: "dd MM yy",
            })
            .on("change", function () {
                to.datepicker("option", "minDate", getDate(this));
            }),
        fromml = $("#fromml")
            .datepicker({
                dateFormat: "dd MM yy",
            })
            .on("change", function () {
                to.datepicker("option", "minDate", getDate(this));
            }),
        to = $("#to").datepicker({
            dateFormat: "dd MM yy",
        })
            .on("change", function () {
                from.datepicker("option", "maxDate", getDate(this));
                fromml.datepicker("option", "maxDate", getDate(this));
            });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }

    $("#showTo").click(function () {
        $("#from").datepicker("show");
    });

    $("#showTo").click(function () {
        $("#fromml").datepicker("show");
    });
});


$(document).ready(function () {
    $(".region-list-bdt").click(function () {
        $(".bdt-carrency").removeClass("d-none");
        $(".aed-carrency").addClass("d-none");
        $(".usd-carrency").addClass("d-none");
    });
    $(".region-list-aed").click(function () {
        $(".bdt-carrency").addClass("d-none");
        $(".aed-carrency").removeClass("d-none");
        $(".usd-carrency").addClass("d-none");
    });
    $(".region-list-usd").click(function () {
        $(".bdt-carrency").addClass("d-none");
        $(".aed-carrency").addClass("d-none");
        $(".usd-carrency").removeClass("d-none");
    });

    // $(".travel-class-fly").click(function () {
    //     $(".travelllers-class-select-popup").removeClass("d-none");
    // });
    $(".trav_count").click(function () {
        $(".travelllers-class-select-popup").removeClass("d-none");
    });
    $(".trav-sec").click(function () {
        $(".travelllers-class-select-popup").removeClass("d-none");
    });

    $("i.close-popup-btn").click(function () {
        $(this).parent().parent().addClass("d-none");
    });

    $(".apply-btn").click(function () {
        $(this).parent().addClass("d-none");
    });

    $(".return-script-blank").click(function () {
        $(".return-fly").addClass("return-open");
        $(".return-fly").removeClass("blank");
        $(".round-way-active").addClass("active");
        $(".one-way-active").removeClass("active");
    });

    $(".close-return").click(function () {
        $(".return-fly").removeClass("return-open");
        $(".return-fly").addClass("blank");
        $(".round-way-active").removeClass("active");
        $(".one-way-active").addClass("active");
    });

    $(".round-way-active").click(function () {
        $(".return-fly").addClass("return-open");
        $(".return-fly").removeClass("blank");
        $(".multi-way-active").removeClass("active");
        $(".faq-row-main").addClass("d-none");
    });

    $(".one-way-active").click(function () {
        $(".return-fly").removeClass("return-open");
        $(".return-fly").addClass("blank");
        $(".multi-way-active").removeClass("active");
        $(".faq-row-main").addClass("d-none");
    });

    $(".multi-way-active").click(function () {
        $(".faq-row-main").removeClass("d-none");
    });

    $(".showmore").click(function () {
        $(".show-more").addClass("d-none");
        $(".show-less").removeClass("d-none");
    });

    $(window).on('load', function () {
        // $("#js-loader").fadeOut(); これだけでOK

        // codepen用
        function loaderClose() {
            $("#js-loader").fadeOut();
        }
        setTimeout(loaderClose, 3000);

    });

    $(window).on('load', function () {
        // $("#js-loader").fadeOut(); これだけでOK

        // codepen用
        function loaderClose() {
            $("#js-loader-hotel").fadeOut();
        }
        setTimeout(loaderClose, 1000);

    });


    // $("body").click(function () {
    //     $(".travelllers-class-select-popup").hide();
    // });

});



function imposeMinMax(el) {
    if (el.value != '') {
        if (parseInt(el.value) < parseInt(el.min)) {
            el.value = el.min;
        }
        if (parseInt(el.value) > parseInt(el.max)) {
            el.value = el.max;
        }
    }
}


var index = 0;
var interval;
var timeout;
var stopFlag = false;

function clearAll() {
    clearTimeout(timeout);
    clearInterval(interval);
}


function modIn(el) {
    var inId = el.id;
    if (inId.charAt(0) == 'p') {
        var targetId = inId.charAt(2);
        var maxValue = Number(document.getElementById(targetId).max);
        var actValue = Number(document.getElementById(targetId).value);
        index = actValue;
        if (actValue < maxValue) {
            stopFlag = false;
            document.getElementById(targetId).value++;
        } else {
            stopFlag = true;
        }
        timeout = setTimeout(function () {
            interval = setInterval(function () {
                if (index + 1 >= maxValue) {
                    index = 0;
                    stopFlag = true;
                }
                if (stopFlag == false) {
                    document.getElementById(targetId).value++;
                }
                index++;
            }, 100);
        }, 500);
        imposeMinMax(document.getElementById(targetId));
    }
    if (inId.charAt(0) == 'm') {
        var targetId = inId.charAt(2);
        var minValue = Number(document.getElementById(targetId).min);
        var actValue = Number(document.getElementById(targetId).value);
        index = actValue;
        if (actValue > minValue) {
            stopFlag = false;
            document.getElementById(targetId).value--;
        } else {
            stopFlag = true;
        }
        timeout = setTimeout(function () {
            interval = setInterval(function () {
                if (index - 1 <= minValue) {
                    index = 0;
                    stopFlag = true;
                }
                if (stopFlag == false) {
                    document.getElementById(targetId).value--;
                }
                index--;
            }, 100);
        }, 500);
        imposeMinMax(document.getElementById(targetId));
    }
}



function addition() {
    var a = document.getElementById("A").value;
    var b = document.getElementById("B").value;
    var c = document.getElementById("C").value;
    var x = parseInt(a) + parseInt(b) + parseInt(c);
    // document.getElementById("trav_count") = x;
    $('#trav_count').val(x);
}




var faqs_row = 0;
function addfaqs() {
    html = '<ul class="one-round-sec" id="faqs-row' + faqs_row + '">';
    html += '<li class="from-fly"><label for="from_city">Flying from</label><input class="form-control" id="from_city" type="text" value="Dhaka" name="from_city" /><input class="form-control" id="from_city_short_apt_name" type="text" value="DAC, Hazrat Shahjalal International Airport Bangladesh" name="from_city_short_apt_name" /></li>';
    html += '<li class="to-fly"><i class="fa-solid fa-arrow-right-arrow-left exchange-icon"></i><label for="to_city">Flying to</label><input class="form-control" id="to_city" type="text" value="Coxs Bazar" name="to_city" /><input class="form-control" id="to_city_short_apt_name" type="text" value="CXB, Coxs Bazar" name="to_city_short_apt_name" /></li>';
    html += '<li class="departure-fly departure-fly-multi"><label for="from">Depart on</label><input type="text" class="form-control" id="from" name="dept_date_from" value="11 Jun 2023, Saturday" placeholder="11 Jun 2023, Saturday" /></li>';
    html += '<li class="travel-class-fly hover-none"><a href="javascript:void(0)" class="btn btn-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa-regular fa-trash-can"></i> Delete</a></li>';

    html += '</ul>';

    $('#faqs').append(html);

    faqs_row++;
}






function format(item, state) {
    if (!item.id) {
        return item.text;
    }
    var countryUrl = "https://hatscripts.github.io/circle-flags/flags/";
    var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
    var url = state ? stateUrl : countryUrl;
    var img = $("<img>", {
        class: "img-flag",
        width: 26,
        src: url + item.element.value.toLowerCase() + ".svg"
    });
    var span = $("<span>", {
        text: " " + item.text
    });
    span.prepend(img);
    return span;
}

$(document).ready(function () {
    $("#countries").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });
});

$(document).ready(function () {
    $("#countries_nat").select2({
        templateResult: function (item) {
            return format(item, false);
        }
    });
});