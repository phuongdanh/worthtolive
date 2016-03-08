<?php if (!defined('SYSPATH')) die('Request not found!'); $pathforsite = 'http://localhost/worthtolive/public/site/'; ?>

<div class="clr"></div>
<div class="content_wrapper">
    <div class="col-md-4 col-sm-4 content_left">
        <img src="<?php echo $pathforsite; ?>images/user1.jpg" width="100%">
        <span>The Half Heart</span>
        <h6>Thehalfheart@gmail.com</h6>
    </div>
    <div class="col-md-8 cl-sm-8 content_right">
        <div id="container">

            <ul class="tabs"> 
                <li class="active" rel="tab1"> My articles</li>
                <li rel="tab2">Add new article</li>
                <li rel="tab3"> Halo</li>
                <li rel="tab4"> Portal</li>
            </ul>

            <div class="tab_container"> 

                <div id="tab1" class="tab_content"> 
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>cfhfduuuuuuuuuuuuuuuuuuuuuuuu uuuuuuuuuuuuuuuuuuuuuuuuuuj</td>
                                    <td>john@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td><i class="fa fa-remove"></i>&nbsp;&nbsp;<i class="fa fa-pencil"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clr"></div>
                </div><!-- #tab1 -->

                <div id="tab2" class="tab_content"> 
                    <table class="table">
                        <tbody>
                        <form class="form-horizontal" role="form">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Content:</label>
                                        <div class="col-sm-10">
                                            <textarea type="" class="form-control" id="content" placeholder="Tap to compose"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Title">Title:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </form>
                        </tbody>
                    </table>
                </div><!-- #tab2 -->

                <div id="tab3" class="tab_content"> 

                    <p><img src="images/halo.jpg"> <br />
                        <strong>
                            Halo: Reach is the culmination of the superlative combat, sensational
                            multiplayer, and seamless online integration that are the hallmarks
                            of this superb series.
                        </strong>
                    </p>

                </div><!-- #tab3 -->

                <div id="tab4" class="tab_content"> 

                    <p><img src="images/portal.jpg"> <br />
                        <strong>
                            Portal 2 is an action shooter game from Valve Software that draws 
                            from the original formula of innovative gameplay, story, and music,
                            which earned the original Portal more than 70 industry accolades.
                        </strong>
                    </p>

                </div><!-- #tab4 --> 

            </div> <!-- .tab_container --> 

        </div> <!-- #container -->
    </div>
    <div class="clr"></div>
</div>