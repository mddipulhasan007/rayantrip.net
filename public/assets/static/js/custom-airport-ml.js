var optionsml = {
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

var fuseml = new Fuse(airportsml, optionsml)


var acml = $('#from_city_mlt')
    .on('click', function (e) {
        e.stopPropagation();
    })
    .on('focus keyup', search)
    .on('keydown', onKeyDown);

var wrapml = $('<div>')
    .addClass('autocomplete-wrapper-ml')
    .insertBefore(acml)
    .append(acml);

var listml = $('<div>')
    .addClass('autocomplete-results-ml')
    .on('click', '.autocomplete-result-ml', function (e) {
        e.preventDefault();
        e.stopPropagation();
        selectIndexMl($(this).data('index'));
    })
    .appendTo(wrapml);

$(document)
    .on('mouseover', '.autocomplete-result-ml', function (e) {
        var index = parseInt($(this).data('index'), 10);
        if (!isNaN(index)) {
            listml.attr('data-highlight', index);
        }
    })
    .on('click', clearResultsMl);

function clearResultsMl() {
    results = [];
    numResults = 0;
    listml.empty();
}

function selectIndexMl(index) {
    if (results.length >= index + 1) {
        acml.val(results[index].city);
        $('#from_city_mlt_short').val((results[index].iata) + ', ' + (results[index].name));
        clearResultsMl();
    }
}

var results = [];
var numResults = 0;
var selectedIndexMl = -1;

function search(e) {
    if (e.which === 38 || e.which === 13 || e.which === 40) {
        return;
    }

    if (acml.val().length > 0) {
        results = _.take(fuseml.search(acml.val()), 7);
        numResults = results.length;

        var divs = results.map(function (r, i) {
            return '<div class="autocomplete-result-ml" data-index="' + i + '">'
                + '<div><b>' + r.iata + '</b> - ' + r.name + '</div>'
                + '<div class="autocomplete-location-ml">' + r.city + ', ' + r.country + '</div>'
                + '</div>';
        });

        selectedIndexMl = -1;
        listml.html(divs.join(''))
            .attr('data-highlight', selectedIndexMl);

    } else {
        numResults = 0;
        listml.empty();
    }
}

function onKeyDown(e) {
    switch (e.which) {
        case 38: // up
            selectedIndexMl--;
            if (selectedIndexMl <= -1) {
                selectedIndexMl = -1;
            }
            listml.attr('data-highlight', selectedIndexMl);
            break;
        case 13: // enter
            selectIndexMl(selectedIndexMl);
            break;
        case 9: // enter
            selectIndexMl(selectedIndexMl);
            e.stopPropagation();
            return;
        case 40: // down
            selectedIndexMl++;
            if (selectedIndexMl >= numResults) {
                selectedIndexMl = numResults - 1;
            }
            listml.attr('data-highlight', selectedIndexMl);
            break;

        default: return; // exit this handler for other keys
    }
    e.stopPropagation();
    e.preventDefault(); // prevent the default action (scroll / move caret)
}