
$(function () {
	var processed_json = new Array();
	var url = "../php/jobs/showJobsByStage.php";

	$.getJSON(url, function(data) {
		// Populate series
		for (i = 0; i < data.length; i++){
			var cantidad = parseInt(data[i].cantidad);
			processed_json.push([data[i].statusJob, cantidad]);
		}

		// draw chart
        $('#stageJobs').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				type: 'pie'
			},

			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: false
					},
					showInLegend: true
				}
			},
			credits: {
			  enabled: false
			},

			title: {
				text: ""
			},

            series: [{
				name: 'Categoría',
                data: processed_json
			}]
		});
	});
})
