$(function (){

    /*
    Gets called when a country is selected from the dropdown.
    Attaches the "value" from the dropdown to the URL and extracts the array object using Ajax.
    Calls the WriteResponse function when the array object is successfully taken.
    */
    var getData = function(name){

        // Original URL
        var baseUrl = 'https://restcountries.eu/rest/v2/region/';

        // Clears the page if the blank option is selected
        if (name.value == "") {
                $("#divResult").html("");
                $("#count").html("");
				return;
			}

        // Attaches selection name to base URL
        var regionUrl = baseUrl + name.value;

        // Uses Ajax to obtain data then calls the Write Response function
        $.ajax({
            url: regionUrl,
            type: "GET",
            dataType: 'json',
            error: function (x, y, z) {
            alert(x + '\n' + y + '\n' + z);
            },
            success: function (data) {
                WriteResponse(data);
            }
        });
    }

    // Writes the output
    var WriteResponse = function (data){
        var output = "";
        var numCountries = "";
        var regionArray = data;
        var countryCount = 0;
        output += '<div><table class="table table-striped">';
        output += '<tr><th>Country</th><th>Capital</th><th>Population</th><th>Flag</th></tr>';

        //Printing the loop
        for (var i = 0; i < regionArray.length; i++){
            output += '<tr>';
            output += '<td>' + regionArray[i].name + '</td>';
            output += '<td>' + regionArray[i].capital + '</td>';
            output += '<td>' + regionArray[i].population + '</td>';
            output += '<td>' + '<img src="' + regionArray[i].flag + '" alt"' + regionArray[i].name + '" />' + '</td>';
            output += '</tr>';
            countryCount++;
        }
        
        // End of table and outputs to the div element
        output += "</table></div>";
        $("#divResult").html(output);

        // Adds number of countries to the page
        numCountries = "<h2>Number of Countries: " + countryCount + "</h2>";
        $("#count").html(numCountries);
    }


    //Responds to selected region from the dropdown
    $("#regions").change(function() {
        getData(this);
    });
});
