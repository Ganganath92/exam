<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Avatar Image</th>
                  <th scope="col">First Name</th>
                  <th scope="col">HostingContracts</th>
                </tr>
              </thead>
              <tbody>
              <% loop $Customers %>
                <tr>
                  <th scope="row">$Pos</th>
                  <td>$Avatar.FillMax(150,150)</td>
                  <td>$FirstName</td>
                  <td>$HostingContracts</td>
                </tr>
               <% end_loop %>
              </tbody>
            </table>
		<div class="content">$Content</div>
	</article>
		$Form
		$CommentsForm
</div>
