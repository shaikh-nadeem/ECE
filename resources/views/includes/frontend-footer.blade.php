        <footer class="footer">
            <div class="container">
                <ul>
                    <li><a href="{{route('frontend-terms')}}">Terms &amp; Conditions</a></li>
                    <li><a href="{{route('frontend-privacyplicy')}}"> Privacy Statement</a></li>
                    <li><a style="color: #FFF">ECE Teacher All Rights Reserved</a></li>
                    <li><a href="{{route('frontend-contact')}}"> Contact</a></li>
                </ul>
            </div>
<!--            <p>ECE Teacher All Rights Reserved</p>-->
        </footer>
    </div>
    
    <!--Home page modal-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username :">                     
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Password :">
                    </div>
                    <div class="form-group">
                        <p>Not registered yet?  <a href="{{route('frontend-hirenow')}}">Click here</a></p>   
                    </div>    

                    <div class="button contactBtn pl-0">
                        <button type="primary-btn">Log in</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    
    <!--Terms and condition Modal-->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <div class="button contactBtn pl-0">
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">Accept</button>
                </div> 
            </div>


          </div>
        </div>
    </div>
    
    <div class="modal fade" id="userSelection" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are you ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="select_user">
                    <a href="#">A Teacher <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <a href="{{route('frontend-hirenow')}}">A Provider <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    </body>
</html>