<div class="form-group">
    <div class="modal fade text-left" id="inlineForm" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">AJOUTER UNE QUESTION</h4>
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
</div>