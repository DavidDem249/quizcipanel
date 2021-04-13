<div>
    
    {{--<div class="main-content container-fluid">
        <!-- <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">
            	LES PROPOSITIONS DE LA QUESTION 
            </p>
        </div>  -->
        <section class="section">
        	<div class="row mb-4">
                <div class="col-md-12">
                	<div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">LES PROPOSITIONS DE LA QUESTION</h4>
                            <div class="d-flex ">
                                <button class="btn btn-info btn-outline-info" style="border-radius: 20px;" type="button" class="close" data-bs-toggle="modal" data-bs-target="#inlineForm">
	                            	Add question 
	                        	</button>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>LIBELE</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($getProposition as $data)
	                                        <tr>
	                                            <td>5</td>
	                                            <td>Proposition</td>
	                                            <td>
	                                                <span class="badge bg-success">Active</span>
	                                            </td>
	                                        </tr>
	                                    @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>--}}

</div>


{{--<div class="form-group">
    <div class="modal fade text-left" id="inlineForm" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">AJOUTER UNE PROPOSITION</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="helpInputTop">LIBELLE</label>
                            
                            <input name="question" type="text" class="form-control" id="helpInputTop">
                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">Status</label>
                            
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect">
                                    <option>Choisissez un status</option>
                                    <option value="1">Correct</option>
                                    <option value="0">Incorrect</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">SORTIR</span>
                        </button>

                        {{--<button type="button" class="btn btn-primary ml-1"
                            data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">ENREGISTRER</span>
                        </button>--}}
                        <input type="submit" value="ENREGISTRER" class="btn btn-primary ml-1">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>--}}