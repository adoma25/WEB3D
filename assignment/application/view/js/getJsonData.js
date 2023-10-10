$(document).ready(function(){

    //Json request for data from json data file
    $getJSON('./model/data.json', function(jsonObj){
        console.log(jsonObj);
        //Fetch home page main text
        $('#homeMainTitle').html('<h2>' + jsonObj.homePageData[0].title + '<h2>');
        $('#homeMainSubTitle').html('<h2>' + jsonObj.homePageData[0].title + '<h2>');
        $('#homeMainDescription').html('<h2>' + jsonObj.homePageData[0].title + '<h2>');

        //Fetch home page 1st column text
        $('#firstColumnTitle').html('<h2>' + jsonObj.homePageData[1].title + '<h2>');
        $('#firstColumnSubtitle').html('<h2>' + jsonObj.homePageData[1].title + '<h2>');
        $('#firstColumnDescription').html('<h2>' + jsonObj.homePageData[1].title + '<h2>');

        //Fetch home page 2nd column text
        $('#secondColumnTitle').html('<h2>' + jsonObj.homePageData[2].title + '<h2>');
        $('#secondColumnSubtitle').html('<h2>' + jsonObj.homePageData[2].title + '<h2>');
        $('#secondColumnDescription').html('<h2>' + jsonObj.homePageData[2].title + '<h2>');

        //Fetch home page 3rd column text
        $('#thirdColumnTitle').html('<h2>' + jsonObj.homePageData[3].title + '<h2>');
        $('#thirdColumnSubtitle').html('<h2>' + jsonObj.homePageData[3].title + '<h2>');
        $('#thirdColumnDescription').html('<h2>' + jsonObj.homePageData[3].title + '<h2>');


    });

});