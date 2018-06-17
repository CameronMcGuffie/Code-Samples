<?php
    /*
        JQuery Page
        Mainly static HTML
    */
?>
            <h3>JQuery</h3>
            <span>This page shows some JQuery stuff I know how to do, it is here to demonstrate ability.</span>
            <div class="dvLargeSpacer"></div>
            <div class="dvHelp">
                <i class="fa fa-info-circle"></i> Please click a heading below to open its contents.
            </div>
            <div class="dvSmallSpacer"></div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpDynamicTable" role="button" href="#clpDynamicTable" id="btnclpDynamicTable">Dynamic Table <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpDynamicTable">
                    <p>Below is a JQuery locally displaying a table locally on the page. Refreshing the page will clear it, I'll do the PHP integration on the PHP page.</p>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>E-mail</th>
                                    <th style="text-align:center;">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="tblDynTable">
                            </tbody>
                        </table>
                    </div>
                    <h4>Add a record</h4>
                    <div class="row rwForm">
                        <div class="col colLabel">Firstname</div>
                        <div class="col colInput"><input type="text" id="txtFirstname" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colLabel">Lastname</div>
                        <div class="col colInput"><input type="text" id="txtLastname" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colLabel">E-mail</div>
                        <div class="col colInput"><input type="text" id="txtEmail" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colButton"><input type="button" value="Add" id="btnTableAdd" /></div>
                    </div>
                </div> 
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpFormValidation" role="button" href="#clpFormValidation" id="btnclpFormValidation">Form Validation <i class="fa fa-angle-down"></i></a>
                <div class="collapse show clpContent" id="clpFormValidation">
                    <p>Below I do validation on an e-mail address and show an error if it is invalid. Credit goes to <a href="http://emailregex.com/" target="_blank">E-mail Regex</a> for the Regex.</p>
                    <div class="row rwForm">
                        <div class="col colLabel">E-mail</div>
                        <div class="col colInput"><input type="text" id="txtValidateEmail" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colError" id="dvEmailERR">Please enter a valid e-mail.</div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colSuccess" id="dvEmailOK">That e-mail seems valid.</div>
                    </div>
                </div> 
            </div>