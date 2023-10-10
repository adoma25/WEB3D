$(document).ready(function(){

    //Json request for data from json data file
    $.getJSON('./model/data.json', function(jsonObj){
        //Fetch home page main text
        $('#homeMainTitle').html('<h2>' + jsonObj.homePageData[0].title + '</h2>');
        $('#homeMainSubtitle').html('<h3>' + jsonObj.homePageData[0].subtitle + '</h3>');
        $('#homeMainDescription').html('<p>' + jsonObj.homePageData[0].description + '</p>');

        //Fetch home page 1st column text
        $('#firstColumnTitle').html('<h2>' + jsonObj.homePageData[1].title + '<h2>');
        $('#firstColumnSubtitle').html('<h3>' + jsonObj.homePageData[1].subtitle + '</h3>');
        $('#firstColumnDescription').html('<p>' + jsonObj.homePageData[1].description + '</p>');

        //Fetch home page 2nd column textzez
        $('#secondColumnTitle').html('<h2>' + jsonObj.homePageData[2].title + '<h2>');
        $('#secondColumnSubtitle').html('<h3>' + jsonObj.homePageData[2].subtitle + '</h3>');
        $('#secondColumnDescription').html('<p>' + jsonObj.homePageData[2].description + '</p>');

        //Fetch home page 3rd column text
        $('#thirdColumnTitle').html('<h2>' + jsonObj.homePageData[3].title + '<h2>');
        $('#thirdColumnSubtitle').html('<h3>' + jsonObj.homePageData[3].subtitle + '</h3>');
        $('#thirdColumnDescription').html('<p>' + jsonObj.homePageData[3].description + '</p>');


    });

});