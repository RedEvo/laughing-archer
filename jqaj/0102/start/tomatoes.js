/**
 * @author David Robinson
 * This is a simple javascript that interrogates the Rotten Tomatoes Database using JSON
 */
'use strict';

$(document).ready(function(){
	$('#movie-lookup').submit(function(e){
		e.preventDefault();
		var $results = $('#movie-results'),
            movie = $('#movie-name').val();
        var apiKey = 'e4zrvab5a7n5parnbz2m5t32';
        var i = 0;
            
//Expected URL Format
//http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=e4zrvab5a7n5parnbz2m5t32&q=Toy+Story+3&page_limit=1

        var requestURL = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=' + apiKey + '&q='
             + movie + '&page_limit=5&callback=?';
        $.getJSON(requestURL, function(films) {
        		$('body').append('<p> Number of films: ' + films.total + '</p>');
        		for(i=0;i<=4;i++){ 
        	    	$('body').append('<p> Title: ' + films.movies[i].title + '</p>');
        	    	$('body').append('<p> Synopsis: ' + films.movies[i].synopsis + '</p>');
        	    	$('body').append('<p> <image src=" ' + films.movies[i].posters.original + '"/></p>');
        	   }
             
          });
 
 
	});
});