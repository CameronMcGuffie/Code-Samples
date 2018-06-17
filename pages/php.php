<?php
    /*
        PHP Page
    */
?>
            <h3>PHP</h3>
            <span>This page incorporates everything together with PHP to show what I can do.</span>
            <div class="dvLargeSpacer"></div>
            <div class="dvHelp">
                <i class="fa fa-info-circle"></i> Please click a heading below to open its contents.
            </div>
            <div class="dvSmallSpacer"></div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpPHPAddCookie" role="button" href="#clpPHPAddCookie" id="btnclpPHPAddCookie">Add / Update Cookie <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpPHPAddCookie">
                    <p>This is an example of creating a cookie. JQuery post's to the API which sets the cookie. Add some content to go in the cookie.</p>
                    <div class="row rwForm">
                        <div class="col colLabel">Content</div>
                        <div class="col colInput"><input type="text" id="txtAddCookieValue" value="<?php echo time(); ?>" /></div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colButton" style="padding-right:0px;"><button class="btn btn-primary" type="button" id="btnAddCookie">Create</button></div>
                    </div>
                    <div class="dvTinySpacer"></div>
                    <div class="row rwForm">
                        <div class="col colError" id="dvAddCookieERR"><i class="fa fa-remove"></i> An unexpected error occured.</div>
                    </div>
                    <div class="row rwForm">
                        <div class="col colSuccess" id="dvAddCookieOK"><i class="fa fa-check"></i> Cookie created.</div>
                    </div>
                </div> 
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpViewCookie" role="button" href="#clpViewCookie" id="btnclpViewCookie">View Cookie <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpViewCookie">
                    <p>This is an example of getting content from a cookie.</p>
                    <div style="text-align:center;" id="lblViewCookieContent">Press Get Content</div>
                    <div class="dvSmallSpacer"></div>
                    <div class="row rwForm">
                        <div class="col colButton" style="padding-right:0px;"><button class="btn btn-primary" type="button" id="btnViewCookie">Get Content</button></div>
                    </div>
                </div> 
            </div>