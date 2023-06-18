var optionsmlto = {
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

var fusemlto = new Fuse(airports, optionsmlto)


var acmlto = $('#to_city_ml')
    .on('click', function (e) {
        e.stopPropagation();
    })
    .on('focus keyup', search)
    .on('keydown', onKeyDown);

var wrapmlto = $('<div>')
    .addClass('autocomplete-wrapper-mlto')
    .insertBefore(acmlto)
    .append(acmlto);

var listmlto = $('<div>')
    .addClass('autocomplete-results-mlto')
    .on('click', '.autocomplete-result-mlto', function (e) {
        e.preventDefault();
        e.stopPropagation();
        selectIndexMlto($(this).data('index'));
    })
    .appendTo(wrapmlto);

$(document)
    .on('mouseover', '.autocomplete-result-mlto', function (e) {
        var index = parseInt($(this).data('index'), 10);
        if (!isNaN(index)) {
            listmlto.attr('data-highlight', index);
        }
    })
    .on('click', clearResultsMlto);

function clearResultsMlto() {
    results = [];
    numResults = 0;
    listmlto.empty();
}

function selectIndexMlto(index) {
    if (results.length >= index + 1) {
        acmlto.val(results[index].city);
        $('#to_city_ml_short').val((results[index].iata) + ', ' + (results[index].name));
        clearResultsMlto();
    }
}

var results = [];
var numResults = 0;
var selectedIndexMlto = -1;

function search(e) {
    if (e.which === 38 || e.which === 13 || e.which === 40) {
        return;
    }

    if (acmlto.val().length > 0) {
        results = _.take(fusemlto.search(acmlto.val()), 7);
        numResults = results.length;

        var divs = results.map(function (r, i) {
            return '<div class="autocomplete-result-mlto" data-index="' + i + '">'
                + '<div><b>' + r.iata + '</b> - ' + r.name + '</div>'
                + '<div class="autocomplete-location-mlto">' + r.city + ', ' + r.country + '</div>'
                + '</div>';
        });

        selectedIndexMlto = -1;
        listmlto.html(divs.join(''))
            .attr('data-highlight', selectedIndexMlto);

    } else {
        numResults = 0;
        listmlto.empty();
    }
}

function onKeyDown(e) {
    switch (e.which) {
        case 38: // up
            selectedIndexMlto--;
            if (selectedIndexMlto <= -1) {
                selectedIndexMlto = -1;
            }
            listmlto.attr('data-highlight', selectedIndexMlto);
            break;
        case 13: // enter
            selectIndexMlto(selectedIndexMlto);
            break;
        case 9: // enter
            selectIndexMlto(selectedIndexMlto);
            e.stopPropagation();
            return;
        case 40: // down
            selectedIndexMlto++;
            if (selectedIndexMlto >= numResults) {
                selectedIndexMlto = numResults - 1;
            }
            listmlto.attr('data-highlight', selectedIndexMlto);
            break;

        default: return; // exit this handler for other keys
    }
    e.stopPropagation();
    e.preventDefault(); // prevent the default action (scroll / move caret)
}