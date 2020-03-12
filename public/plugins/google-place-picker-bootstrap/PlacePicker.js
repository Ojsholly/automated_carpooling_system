"use strict";
var $placePicker = null,
    $modal = null,
    n = null,
    btnClass = "btn btn-secondary btn-sm",
    placePickerMap = null,
    marker = false,
    service = null,
    geocoder = null,
    result = null;
$.fn.PlacePicker = function (t) {
    n = {
        key: null,
        title: null,
        center: {
            lat: -34.397,
            lng: 150.644
        },
        zoom: 18,
        success: function () {}
    };
    var params = $.extend(n, t);
    $placePicker = this;
    $(this).wrap("<div class='input-group mb-3'></div>");
    $(this).closest("div").hover(function () {
            var left = $(this).offset().left + $(this).width() - 40;
            var top = $(this).offset().top + 5;
            var btn = $('<div class="placePickerUIButton" title="Pick location from map"><div class="' + params.btnClass + '"><i class="fa fa-map"></i></div></div>');
            $(this).append(btn);
            btn.click(function () {
                if ($(".content-body").find(".modal.placePicker").length == 0) {
                    $(".content-body").append('<div class="modal fade in placePicker" role="dialog"><style>.pac-container{ z-index: 10000; }</style><div class="modal-dialog modal-lg" style="width: 90%;"><div class="modal-content"><div class="modal-header"><h4 class="modal-title">Place Picker</h4><button type="button" class="close" data-dismiss="modal">Ã—</button></div><div class="modal-body" style="padding: 0px;"><div class="row"><div class="col-md-12" style="padding: 10px;position: absolute;z-index: 1;background: #fff;width: 30%;margin-left: 20px;margin-top: 4px;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"><div class="input-group input-group-sm" style="width: 100%;"> <input type="text" class="form-control pull-right autocomplete" placeholder="Search here or pick a location on map" style="border: 1px solid #dddddd;" autocomplete="off"></div><div class="address_content" style="display: none"><div class="address" style="margin-top: 10px;display: block;padding: 9.5px;font-size: 13px;color: #333;background-color: #f5f5f5;border: 1px solid #ccc;border-radius: 4px;max-height: 50vh;overflow-x: hidden;overflow-y: scroll;text-align: left;"></div><div class="row"><div class="col-md-6"><div class="btn btn-sm btn-default" style="width: 100%;margin-top: 10px;margin-bottom: 10px;" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</div></div><div class="col-md-6"><div class="btn btn-sm btn-success placePickerSubmit" style="width: 100%;margin-top: 10px;margin-bottom: 10px;"><i class="fa fa-check"></i> Select</div></div></div></div></div><div class="col-md-12"><div id="placePickerMap" style="height:calc( 80vh );width:100%"></div></div></div></div></div></div></div>');
                }
                result = null;
                $modal = $(".placePicker");
                $modal.modal("show");
                $(".placePicker").find(".address").html("");
                $(".placePicker").find(".address_content").hide();
                $(".placePicker").find(".autocomplete").val("");
                placePickerMap = null
                marker = false;
                if (!(typeof google === 'object' && typeof google.maps === 'object')) {
                    $.getScript('https://maps.googleapis.com/maps/api/js?key=' + params.key + '&libraries=places', function () {
                        initPlacePickerMap(params)
                    });
                } else {
                    initPlacePickerMap(params)
                }
                if (params.title != null) {
                    $modal.find(".modal-title").html(params.title);
                }
                $(".placePickerSubmit").click(function () {
                    var place = $(".placePicker").find(".autocomplete");
                    params.success(convertAddress(), place);
                    $modal.modal("hide")
                });
                $modal.on('hidden.bs.modal', function () {
                    $("body").find(".modal.placePicker").remove();
                })
            });
        },
        function () {
            $("body").find(".placePickerUIButton").remove();
        });


};

function initPlacePickerMap(params) {
    service = new google.maps.Geocoder;
    geocoder = new google.maps.Geocoder;
    setTimeout(function () {
        var loc = new google.maps.LatLng(params.center.lat, params.center.lng);
        placePickerMap = new google.maps.Map(document.getElementById('placePickerMap'), {
            center: loc,
            zoom: params.zoom
        });
        service = new google.maps.places.PlacesService(placePickerMap);
        var autocomplete = new google.maps.places.Autocomplete(document.getElementsByClassName("autocomplete")[0]);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {

            var place = autocomplete.getPlace();

            if (typeof place.address_components !== 'undefined') {
                placePickerMap.panTo(place.geometry.location)
                if (marker === false) {
                    marker = new google.maps.Marker({
                        position: place.geometry.location,
                        map: placePickerMap,
                        draggable: true
                    });
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        markerLocation();
                    });
                } else {
                    marker.setPosition(place.geometry.location);
                }
                markerLocation();
            }

        });

        google.maps.event.addListener(placePickerMap, 'click', function (event) {
            var clickedLocation = event.latLng;
            if (marker === false) {
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: placePickerMap,
                    draggable: true
                });
                google.maps.event.addListener(marker, 'dragend', function (event) {
                    markerLocation();
                });
            } else {
                marker.setPosition(clickedLocation);
            }
            markerLocation();
        });
    }, 1000);
}

function markerLocation() {
    var currentLocation = marker.getPosition();
    geocoder.geocode({
        'location': currentLocation
    }, function (results, status) {
        if (status === 'OK') {
            if (results[0]) {
                result = results[0];
                var cont = "<h6 style='font-weight:600;font-size: 16px;padding-bottom: 10px;'>" + result.formatted_address + "</h6>";
                $(result.address_components).each(function (key, value) {
                    cont += "<b>" + value.types.join(', ') + "</b> : " + value.long_name + "<br>";
                });
                $(".address").html(cont);
                $(".address_content").show();
            }
        }
    });
}

function convertAddress() {
    var data = [];
    data["country"] = "";
    data["administrative_area_level_2"] = "";
    data["postal_code"] = "";
    data["sublocality_level_1"] = "";
    data["sublocality_level_2"] = "";
    data["route"] = "";
    data["locality"] = "";
    data["formatted_address"] = result.formatted_address;
    $(result.address_components).each(function (i, address) {
        $(address.types).each(function (j, type) {
            if (type == "country") {
                data[type] = address.short_name;
            } else {
                data[type] = address.long_name;
            }
        });
    });
    return data;
}
