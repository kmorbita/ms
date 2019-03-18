<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						Item List
					</h2>
					<div class="button-demo" align="right">
						<!-- <button type="button" class="btn bg-dict waves-effect"><i class="material-icons">add</i> ADD</button> -->
						<button type="button" class="btn bg-dict waves-effect" data-toggle="modal" data-target="#defaultModal">
							<i class="material-icons">add</i>
							<span>ADD ITEM</span>
						</button>
					</div>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover dataTable js-exportable">
							<thead>
								<tr>
									<th>No#.</th>
									<th>Item Code</th>
									<th>Item Description</th>
									<th>Serial Number</th>
									<th>Model</th>
									<th>Brand</th>
									<th>RR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Computer</td>
									<td>Computer Sample</td>
									<td>FKJSB89HG92938</td>
									<td>sample model</td>
									<td>ASUS</td>
									<td>From supplier</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dict">
				<h4 class="modal-title" id="defaultModalLabel">ADD NEW ITEM</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" id="none" class="form-control">
							<label class="form-label">Item Code</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" id="none" class="form-control">
							<label class="form-label">Item Description</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" id="none" class="form-control">
							<label class="form-label">Serial Number</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" id="none" class="form-control">
							<label class="form-label">Model</label>
						</div>
					</div>

					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" id="none" class="form-control">
							<label class="form-label">Brand</label>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn bg-dict waves-effect">SAVE</button>
				<button type="button" class="btn bg-dict waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>