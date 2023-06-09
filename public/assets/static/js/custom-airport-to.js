var optionsto = {
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

var fuseto = new Fuse(airportsto, optionsto)


var acto = $('#to_city')
    .on('click', function (e) {
        e.stopPropagation();
    })
    .on('focus keyup', search)
    .on('keydown', onKeyDown);

var wrapto = $('<div>')
    .addClass('autocomplete-wrapper-to')
    .insertBefore(acto)
    .append(acto);

var listto = $('<div>')
    .addClass('autocomplete-results-to')
    .on('click', '.autocomplete-result-to', function (e) {
        e.preventDefault();
        e.stopPropagation();
        selectIndexTo($(this).data('index'));
    })
    .appendTo(wrapto);

$(document)
    .on('mouseover', '.autocomplete-result-to', function (e) {
        var index = parseInt($(this).data('index'), 10);
        if (!isNaN(index)) {
            listto.attr('data-highlight', index);
        }
    })
    .on('click', clearResultsTo);

function clearResultsTo() {
    results = [];
    numResults = 0;
    listto.empty();
}

function selectIndexTo(index) {
    if (results.length >= index + 1) {
        acto.val(results[index].city);
        $('#to_city_short_apt_name').val((results[index].iata) + ', ' + (results[index].name));
        clearResultsTo();
    }
}

var results = [];
var numResults = 0;
var selectedIndexTo = -1;

function search(e) {
    if (e.which === 38 || e.which === 13 || e.which === 40) {
        return;
    }

    if (acto.val().length > 0) {
        results = _.take(fuseto.search(acto.val()), 7);
        numResults = results.length;

        var divs = results.map(function (r, i) {
            return '<div class="autocomplete-result-to" data-index="' + i + '">'
                + '<div><b>' + r.iata + '</b> - ' + r.name + '</div>'
                + '<div class="autocomplete-location-to">' + r.city + ', ' + r.country + '</div>'
                + '</div>';
        });

        selectedIndexTo = -1;
        listto.html(divs.join(''))
            .attr('data-highlight', selectedIndexTo);

    } else {
        numResults = 0;
        listto.empty();
    }
}

function onKeyDown(e) {
    switch (e.which) {
        case 38: // up
            selectedIndexTo--;
            if (selectedIndexTo <= -1) {
                selectedIndexTo = -1;
            }
            listto.attr('data-highlight', selectedIndexTo);
            break;
        case 13: // enter
            selectIndexTo(selectedIndexTo);
            break;
        case 9: // enter
            selectIndexTo(selectedIndexTo);
            e.stopPropagation();
            return;
        case 40: // down
            selectedIndexTo++;
            if (selectedIndexTo >= numResults) {
                selectedIndexTo = numResults - 1;
            }
            listto.attr('data-highlight', selectedIndexTo);
            break;

        default: return; // exit this handler for other keys
    }
    e.stopPropagation();
    e.preventDefault(); // prevent the default action (scroll / move caret)
}