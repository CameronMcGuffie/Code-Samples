<?php
    /*
        JQuery Page
        Mainly static HTML
    */
?>
            <div id="ppJQueryPopup" class="dvPopupBackground">
                <div class="ppPopup">
                    <h3>JQuery pop-up example.</h3>
                    <p>This is just an example pop-up.</p><br />
                    <div class="row" id="rwPopupButtons">
                        <div class="col colPopupButtons">
                            <div class="btn-group" role="group"><button class="btn btn-primary" type="button" id="btnJQueryPopupOk"><i class="fa fa-check" id="btnVmrEditSave"></i>&nbsp;Ok</button>&nbsp;<button class="btn btn-primary" type="button" id="btnJQueryPopupClose"><i class="fa fa-remove"></i>&nbsp;Close</button></div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="col colButton" style="padding-left:90px;"><button class="btn btn-primary" type="button" id="btnTableAdd">Add</button></div>
                    </div>
                </div> 
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpFormValidation" role="button" href="#clpFormValidation" id="btnclpFormValidation">Form Validation <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpFormValidation">
                    <p>Below I do validation on an e-mail address and show an error if it is invalid. Credit goes to <a href="http://emailregex.com/" target="_blank">E-mail Regex</a> for the Regex.</p>
                    <div class="row rwForm">
                        <div class="col colLabel">E-mail</div>
                        <div class="col colInput"><input type="text" id="txtValidateEmail" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colError" id="dvEmailERR"><i class="fa fa-remove"></i> Please enter a valid e-mail.</div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colSuccess" id="dvEmailOK"><i class="fa fa-check"></i> That e-mail seems valid.</div>
                    </div>
                </div> 
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpPopup" role="button" href="#clpPopup" id="btnclpPopup">Pop-ups <i class="fa fa-angle-down"></i></a>
                <div class="collapse show clpContent" id="clpPopup">
                    <p>This is an example of a good-looking pop-up from JQuery.</p>
                    <div class="row rwForm">
                        <div class="col colButton" style="padding-right:0px;"><button class="btn btn-primary" type="button" id="btnShowJQueryPopup">Show Me</button></div>
                    </div>
                </div> 
            </div>