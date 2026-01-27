<div id="items-container"></div>

$data['getLocation'] = $getLocation;
	    $data['getTimeRange'] = $timeNo;
	    //$data['getVehicle'] = $getVehicle;
	    $data['getCurrentDate'] = $getStartDateRequest;
	    $data['getEndDate'] = $getEndDateRequest;
	    
<input type="text" name="getTimeRange" value="<?php echo $getTimeRange ?>" >
<input type="text" name="getVehicle" value="<?php echo $getVehicle ?>" >
<input type="text" name="getCurrentDate" value="<?php echo $getCurrentDate ?>" >
<input type="text" name="getEndDate" value="<?php echo $getEndDate ?>" >

              <div id="pagination-container">
        <button id="prev-btn">Previous</button>
        <button id="next-btn">Next</button>
    </div>
               <script>
        $(document).ready(function () {
            var currentPage = 1;
            var getTimeRange = $("input[name='getTimeRange']").val();
            var getVehicle = $("input[name='getVehicle']").val();
            var getCurrentDate = $("input[name='getCurrentDate']").val();
            var getEndDate = $("input[name='getEndDate']").val();
            loadItems(currentPage);

            function loadItems(page) {
                $.ajax({
                    url: 'loadViewDataPage.php',
                    type: 'POST',
                    data: {page: page,getTimeRange: getTimeRange,getVehicle: getVehicle,getCurrentDate: getCurrentDate,getEndDate: getEndDate},
                    success: function (response) {
                        $('#items-container').html(response.items_html);
                        currentPage = page;
                    }
                });
            }

            $('#prev-btn').on('click', function () {
                if (currentPage > 1) {
                    loadItems(currentPage - 1);
                }
            });

            $('#next-btn').on('click', function () {
                loadItems(currentPage + 1);
            });
        });
    </script>
              
               
            


              


