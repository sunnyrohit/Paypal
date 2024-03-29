<?php
    $this->start('head');
?>
    
    <script type="text/javascript" src="js/gen_validatorv4.js"></script>

    <script type="text/javascript">
        
        var w = 200;
        var h = 200;
        var left = Number((screen.width/2)-(w/2));
        var tops = Number((screen.height/2)-(h/2));
        
        /*
        var fbConnected = ;
        if (fbConnected) {
            titleString = "Choose a Facebook friend";
        }
        else {
            titleString = "Connect to Facebook";
        }
        */
        $(document).ready(function() {
            /*
            $("#fbconnect").tooltip({placement: "right", trigger: "hover", title: titleString});
            if (fbConnected) {
                $("#fbconnect-link").attr("href", "#");
            }
            */
            
            var frmvalidator  = new Validator("page1form");
            frmvalidator.addValidation("recipient","req","Please enter the recipient's name");
            frmvalidator.addValidation("recipient","maxlen=20",	"Is the recipient's name really more than 20 characters?");
            frmvalidator.addValidation("recipient","alpha_s","Alphabetic chars only");
            
            frmvalidator.addValidation("recipientemail","req","Please enter an email address");
            frmvalidator.addValidation("recipientemail","email","Please enter a proper email address");
        });
        
        /*
        function fbConnect() {
            if (fbConnected) {
                // open friend selector
                return false;
            }
            else {
                return false;
            }
        }
        */
    </script>

    <style type="text/css">
        .recipient-input, .occasion-select {
            width: 259px;
            /*padding: 0;
            margin: 0;
            height: 20px;*/
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .recipient-input {
            width:230px;
            
        }
    
    </style>

<?php
    $this->end();
    $this->start('body');
?>
    <!-- Facebook Integration  -->
    <div id="fb-root"></div>
    
    <script type="text/javascript">
    /*
      window.fbAsyncInit = function() {
        FB.init({
          appId  			: '544973535543605', // Facebook Application ID
          status 			: true, // check login status
          cookie 			: true, // enable cookies to allow the server to access the session
          xfbml  			: true, // parse XFBML
          oauth                     : true,
          channelUrl  : '//localhost/widget/cake/cakephp-master/channel.html', // Channel File
        });
    
    
        FB.getLoginStatus(function(response) {
          if (response.authResponse) {
            $(".connect").attr("class", "bt-fs-dialog");
            $(".fs-dialog-container").show();
            
            $(".bt-fs-dialog").fSelector({
                maxFriendsCount: 1,
                onSubmit: function(response){
                    // example response usage
                    var selected_friends = [];
                    $.each(response, function(k, v){
                        selected_friends[k] = v;
                    });
                    alert(selected_friends);
                }
            });
            
            //alert("logged in");
          } else { 
            //alert("not logged in");
          }
        });
    
      };
      // Load the SDK Asynchronously
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/all.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));            

      jQuery(document).ready(function($){
    
        $(".connect").click(function(){
          FB.login(function(response) {
            if (response.authResponse) {
              location.reload();
              //alert("here");
            } else {
              // User cancelled login or did not fully authorize
              //alert("there");
            }
          }, {scope: ''});
        });
    
      });
    */
    </script>

<?php
    $this->end();
?>

    <div class="row pagination-centered">
        <div class="span12" style='margin:-1em auto 2em'>
            Recipient and Occasion
 <br />
    <img src="img/s1.png" />
        </div>
    </div>
    <br />
    <div class="row pagination-centered">
        <div class="span6">
            <table class="" align="center" width=100%>
                <tbody>
                    <tr>
                        <td style="text-align:center;">
                            <img src="<?php echo $giftDetails['imgSrc']?>" class="img-polaroid" style='width:160px'/>
                        </td>
                        <td>
                             <?php echo $giftDetails['name'], $giftDetails['quantity_str']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:20px; padding-bottom:20px; text-align:center;">
                             Item Price : <?php echo $giftDetails['currency'], " ",$giftDetails['price']; ?>
                        </td>
                        <td>
                             
                        </td>
                    </tr>
                </tbody>
            </table>
            <br/>
            <!--
            <div style="margin-bottom:10px;">
                <a href="">
                    <img src="" />
                     Add more to the gift
                </a>
            </div>
			-->
        </div>
        <div class="span6">
            <form action="Page2" method="post" name="page1form" id="page1form">
                
                <div class="control-group">
                    <label> Who is the gift for? </label>
                    <div class="input-prepend input-append">
                        <input style="height:30px" placeholder="Recipient's Name" class="recipient-input" id="appendedPrependedInput" type="text" name="recipient">
                        <!--
                        <span class="add-on" style="padding: 0px">
                            <a href="javascript:{}" class="connect" id="fbconnect-link">
                                <img id="fbconnect" style="height:29px; width:29px" src="img/facebook_icon_small.jpg" />
                            </a>
                        </span>
                        -->
                    </div>
                    <div class="input-prepend input-append">
                    <input style="height:30px" placeholder="Recipient's Email" class="recipient-input" type="text" name="recipientemail">
                    </div>
                    <!-- Modal -->
                    <!--
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4> Connect to Facebook </h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-dismiss="modal">Select</button>
                        </div>
                    </div>
                    -->    
                </div>
                <div class="control-group">  
                    <label class="control-label" for="occassion">Select Occasion</label>  
                    <div class="controls">  
                        <select id="occassion" class="occasion-select" name="occassion">  
                            <option>Birthday</option>  
                            <option>Anniversary</option>
                            <option>Graduation</option>  
                            <option>Farewell</option>
                            <option>Job promotion</option>
                            <option value='Valentine'>Valentine's</option>
                            <option>Date</option>
                            <option>Wedding</option>  
                            <option>House Warming</option>
                            <option value=''> Just felt like gifting </option>
                        </select>  
                    </div>  
                </div>
                <br />
                <div style="text-align:right; padding-right:10px; margin-top:148px;">
                    <table class="" align="right">
                        <tbody>
                            <tr>
                                <td>
                                    <button type="submit" class="btn-link">
                                        <img src="img/invite.png" />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>