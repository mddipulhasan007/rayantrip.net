var optionsh = {
    shouldSort: true,
    threshold: 0.4,
    maxPatternLength: 32,
    keys: [{
        name: 'iata',
        weight: 0.5
    }, {
        name: 'name',
        weight: 0.3
    }, {
        name: 'city',
        weight: 0.2
    }]
};

var fuse = new Fuse(hotels, optionsh)


var ach = $('#from_city_hotel')
    .on('click', function (e) {
        e.stopPropagation();
    })
    .on('focus keyup', search)
    .on('keydown', onKeyDown);

var wraph = $('<div>')
    .addClass('autocomplete-wrapper-hotel')
    .insertBefore(ach)
    .append(ach);

var listh = $('<div>')
    .addClass('autocomplete-results-hotel')
    .on('click', '.autocomplete-result-hotel', function (e) {
        e.preventDefault();
        e.stopPropagation();
        selectIndexh($(this).data('index'));
    })
    .appendTo(wraph);

$(document)
    .on('mouseover', '.autocomplete-result-hotel', function (e) {
        var index = parseInt($(this).data('index'), 10);
        if (!isNaN(index)) {
            listh.attr('data-highlight', index);
        }
    })
    .on('click', clearResultsh);

function clearResultsh() {
    results = [];
    numResults = 0;
    listh.empty();
}

function selectIndexh(index) {
    if (results.length >= index + 1) {
        ach.val(results[index].name);
        $('#hotel_city_name').val(results[index].city);
        clearResultsh();
    }
}

var results = [];
var numResults = 0;
var selectedIndexh = -1;

function search(e) {
    if (e.which === 38 || e.which === 13 || e.which === 40) {
        return;
    }

    if (ach.val().length > 0) {
        results = _.take(fuse.search(ach.val()), 7);
        numResults = results.length;

        var divs = results.map(function (r, i) {
            return '<div class="autocomplete-result-hotel" data-index="' + i + '">'
                + '<div> ' + r.name + '</div>'
                + '<div class="autocomplete-location-hotel">' + r.city + '</div>'
                + '</div>';
        });

        selectedIndexh = -1;
        listh.html(divs.join(''))
            .attr('data-highlight', selectedIndexh);

    } else {
        numResults = 0;
        listh.empty();
    }
}

function onKeyDown(e) {
    switch (e.which) {
        case 38: // up
            selectedIndexh--;
            if (selectedIndexh <= -1) {
                selectedIndexh = -1;
            }
            listh.attr('data-highlight', selectedIndexh);
            break;
        case 13: // enter
            selectIndexh(selectedIndexh);
            break;
        case 9: // enter
            selectIndexh(selectedIndexh);
            e.stopPropagation();
            return;
        case 40: // down
            selectedIndexh++;
            if (selectedIndexh >= numResults) {
                selectedIndexh = numResults - 1;
            }
            listh.attr('data-highlight', selectedIndexh);
            break;

        default: return; // exit this handler for other keys
    }
    e.stopPropagation();
    e.preventDefault(); // prevent the default action (scroll / move caret)
}