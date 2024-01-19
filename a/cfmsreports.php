<?php
include 'header.php';
?>


<!--header.php with include-->

<!-- Section One Start -->

<div class="main-wrapper ">
<section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center" data-anijs="if: mouseover, do: fadeIn animated">          
          <h1 class="text-capitalize mt-5 text-lg" style="font-family:calisto MT; font-size:4rem; color:#FFFFFF; text-shadow: 2px 2px #7a49a5;">DOWNLOADS</h1>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!--Section Two Start-->

<section class="section shadow" style="background-color:#fcfafb;">

<div class="container ">
		<div class="row text-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="inline-block">					
					<h1 class="mb-1 animated fadeInUp" style="font-family:calisto MT; color:#000000 !important; font-size:4rem !important;">CFMS-DC DAILY, MONTHLY REPORTS </h1>	
          <p class="mb-1 animated fadeInUp" style="font-family:calisto MT; color:#000000 !important; font-size:2rem !important;">Search by Name or Initials </p>	
				</div>
			</div>
		</div>	

    <div class="row container-fluid" style="margin-top:5rem;margin-right:3rem;margin: left 3rem;">
        <div class="col-12 ">
           <!-- Search input -->
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Type search query">

          <table class="table table-striped table-resposive round shadow" id="dataTable">
            <thead>
              <tr class="text-center bg-dark text-white">
                <th scope="col">S.NO</th>
                <th scope="col">Name of Report</th>
                <th scope="col">Consolidated</th>
                <th scope="col">Download/View</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <th scope="row">1</th>
                <td style="width:25%;">Weekly Report</td>
                <td>11<sup>th</sup> December to 16<sup>th</sup> December, 2023</td>
                <td class="text-center">                                   
                  <button type="button" class="btn btn-success rounded shadow" data-toggle="collapse"><a href="./images/publication/publication.jpg" target="_blank">Download || View</a></button>
                </td>
              </tr>
              
              <tr class="text-center">
                <th scope="row">2</th>
                <td style="width:25%;">Performance Report</td>
                <td>November 2023 <br> As on 30-11-2023</td>
                <td class="text-center">                                   
                  <button type="button" class="btn btn-success rounded shadow" data-toggle="collapse"><a href="./images/publication/units.pdf" target="_blank">Download || View</a></button>
                </td>
              </tr>


              <tr class="text-center">
                <th scope="row">3</th>
                <td style="width:25%;">Monthly Report </td>
                <td>November 2023</td>
                <td class="text-center">                                   
                  <button type="button" class="btn btn-success rounded shadow" data-toggle="collapse"><a href="./images/publication/BAIL NOTIFICATION 2008.pdf" target="_blank">Download || View</a></button>
                </td>
              </tr>


              <tr class="text-center">
                <th scope="row">4</th>
                <td style="width:25%;">Witness Report</td>
                <td>November 2023 <br>As on 30-11-2023</td>
                <td class="text-center">                                   
                  <button type="button" class="btn btn-success rounded shadow" data-toggle="collapse"><a href="./images/publication/unit policy illustration.pdf" target="_blank">Download || View</a></button>
                </td>
              </tr>


                
              
              
            </tbody>
          </table>
          <ul class="pagination" id="pagination"></ul>
        </div>
      </div>        
  </div>
</div>


<!-- Here -->

<!-- here -->


  <div class="row text-center mt-4" style="margin-bottom:6rem;">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="inline-block">					
					<h3 class="animated fadeInUp apply" style="font-family:calisto MT; color:#ffffff !important;"><a href="index.php">Thanks for Visiting <br>Click to Homepage</a></h3>	
				</div>
			</div>
	</div>	
</section>

<script>
    // Function to handle pagination
    function paginate(items, currentPage, perPage) {
        const start = (currentPage - 1) * perPage;
        const end = start + perPage;
        return items.slice(start, end);
    }

    // Function to update table rows based on current page
    function updateTableRows(currentPage, perPage) {
        const rows = $('#dataTable tbody tr');
        const paginatedRows = paginate(rows, currentPage, perPage);

        rows.hide(); // Hide all rows
        paginatedRows.show(); // Show rows for the current page
    }

    // Function to update pagination links
    function updatePaginationLinks(currentPage, totalPages) {
        const pagination = $('#pagination');
        pagination.empty(); // Clear previous pagination links

        // Add Previous Page link
        pagination.append(`<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
                          </li>`);

        // Add Page links
        for (let i = 1; i <= totalPages; i++) {
            pagination.append(`<li class="page-item ${currentPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                              </li>`);
        }

        // Add Next Page link
        pagination.append(`<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
                          </li>`);
    }

    // Function to handle page change
    function changePage(newPage) {
        const totalPages = Math.ceil($('#dataTable tbody tr').length / 20); // Assuming 20 rows per page
        const currentPage = Math.min(Math.max(newPage, 1), totalPages); // Ensure page is within bounds

        updateTableRows(currentPage, 20); // Update table rows
        updatePaginationLinks(currentPage, totalPages); // Update pagination links
    }

    // Initialize table and pagination on page load
    $(document).ready(function () {
        updateTableRows(1, 20); // Initialize with the first page and 20 rows per page
        updatePaginationLinks(1, Math.ceil($('#dataTable tbody tr').length / 4)); // Initialize pagination links
    });

    // Function to handle search input
    $('#searchInput').on('input', function () {
        const searchTerm = $(this).val().toLowerCase();
        const rows = $('#dataTable tbody tr');

        // Filter rows based on search input
        rows.filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
        });

        // Update pagination links after filtering
        updatePaginationLinks(1, Math.ceil(rows.filter(':visible').length / 20));
    });
</script>

<!--Section Two End-->


<!-- Section Two End -->

	<?php
		include 'footer.php';
	?>



  </body>
  </html>