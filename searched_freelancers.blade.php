@extends('JPEG_project/bootstrapfileformain')
<html>
<head>
  <title>JPEG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('layout.css') }}" />
  <style type="text/css">
    .star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
  </style>
</head>
<body> 
  <div id="main_body">
    <hr style="margin-left: 100px;">
    <br>
    <div style="background-color: #595959; width: 910; margin-left: 150px;  padding-left: 50px;">
      <br>
      @foreach ($freelancer_details as $freelancerdetails)
        <div style="background-color: #cccccc; margin-top: 15px; margin-bottom: 15px; padding-bottom: 30px; margin-right: 50px; color: black;">
          <img style="margin-left: 30px;margin-top: 30px; max-width: 100px" src="images/{{$freelancerdetails->username}}.jpg"   border="50" class="img-square">
          
            <h1 style="margin-left: 20px;">{{$freelancerdetails->fullname}}</h1>
            {{-- <div style="margin-left: 50px;margin-top: -300px;"> --}}
              <div style="margin-left: 200px; margin-top: -130px;">
                <h4>Contact details:</h4> </br>
                Contact number:<b>{{$freelancerdetails->contactno}}</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Email ID:<b>{{$freelancerdetails->emailid}}</b></br></br>
                {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                Interest: <b>{{$freelancerdetails->interest}}</b></br>
                <?php
                  $review_count= DB::table('reviews')->where('review_type','=',"1")->where('username','=',$freelancerdetails->username)->count();
                ?>
                <b>Rating:</b>
             
                    <div class="star-rating">
                    <?php
                    if($review_count>0 && $review_count<=2)
                      { ?>
                        <span class="fa fa-star" data-rating="1"></span>
                       <?php 
                      }
                    if($review_count>2 && $review_count<=4)
                      { ?>
                        <span class="fa fa-star" data-rating="2"></span>
                        <span class="fa fa-star" data-rating="2"></span>
                       <?php
                      }
                     if($review_count>4 && $review_count<=6)
                      { ?>
                        <span class="fa fa-star" data-rating="3"></span>
                        <span class="fa fa-star" data-rating="3"></span>
                        <span class="fa fa-star" data-rating="3"></span>
                       <?php
                      }
                     if($review_count>6 && $review_count<=8)
                      { ?>
                        <span class="fa fa-star" data-rating="4"></span>
                        <span class="fa fa-star" data-rating="4"></span>
                        <span class="fa fa-star" data-rating="4"></span>
                        <span class="fa fa-star" data-rating="4"></span>
                       <?php
                      }
                     if($review_count>8)
                      { ?>
                        <span class="fa fa-star" data-rating="5"></span>
                        <span class="fa fa-star" data-rating="5"></span>
                        <span class="fa fa-star" data-rating="5"></span>
                        <span class="fa fa-star" data-rating="5"></span>
                        <span class="fa fa-star" data-rating="5"></span>
                     <?php } ?>                     
                     <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                    </div>
                  
                <b>Reviews:</b><i>
                
                
                   {{$review_count}} good reviews</i>   
                
                </br>
                <button type="button" class="btn-success btn-lg" style="margin-left: 300px; margin-top: -50px;" data-toggle="modal" data-target="#myModal">Contact Photographer</button><br>
                <?php
                  $review= DB::table('reviews')->select('reviews')->where('review_type','=',"1")->where('username','=',$freelancerdetails->username)->get();
                ?>
                <button type="button" class="btn-info btn-lg" style="margin-left: 300px;" data-toggle="modal" data-target="#myModal2">See Reviews</button><br>
                <div style="margin-top: -90px;">
                  
                <b>Give your reviews:</b>
                  <form action="reviews" method="get">
                    <input type="text" name="review" value="Enter the reviews.">
                    <input type="hidden" name='user_reviewed' value='{{$freelancerdetails->username}}' >
                    <input type="submit" class="btn-sm btn-primary" name="submit">
                  </form>
                </div>
              </div>

            
            
        

        </div>
        
      @endforeach
      <br>
    </div> 
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="color: black;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Contact Freelancer</h4>
        </div>
        <div class="modal-body">
      <form action="store_location_data" method='POST' enctype='multipart/form-data'>
        <div class="form-group">
          {{-- <p>Upload your picture: <input type="file"  name="pic" accept="image/*"></p> --}}
          <label for="comment">Enter your message:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <p><input type="submit" onclick="myFunction()" class="btn btn-primary btn-md" value="Submit"></p>
        <script>
        function myFunction() 
        {
            alert("Your image and message has been sent to the selected studio!");
        }
      </script>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="color: black;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Reviews</h4>
        </div>
        <div class="modal-body">
      <form action="store_location_data" method='POST' enctype='multipart/form-data'>
        <div class="form-group">
          {{-- <p>Upload your picture: <input type="file"  name="pic" accept="image/*"></p> --}}
          <label for="comment">Reviews:</label>
            <p>$review</p>

          {{-- <textarea class="form-control" rows="5" id="comment"></textarea> --}}
        </div>
        <p><input type="submit" onclick="myFunction()" class="btn btn-primary btn-md" value="Submit"></p>
        <script> 
        function myFunction() 
        {
            alert("Your image and message has been sent to the selected studio!");
        }
      </script>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
      
    </div>
  </div>{{-- 
  <script type="text/javascript">
    $(document).ready(function(){
   $(".Reviews").click(function(){ // Click to only happen on announce links
     $("#review").val($(this).data('id'));
     $('#myModal2').modal('show');
   });
});
  </script> --}}
</body>
</html>