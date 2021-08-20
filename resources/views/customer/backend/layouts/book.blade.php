
<link rel="stylesheet" href="{{url('/css/login.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
            <div class="hotel_reserve_box">
         <h3> Hotel Reservation Form </h3><br>
         <form action="{{route('booking_list')}}"method="post">
             @csrf
             <div class="form-group">
                 <label>Room/Suite Type</label>
                 <select class="form-control" name="room_type"id="room_type" onchange="finalCost()">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Standard </option>
                     <option value="2"> Deluxe </option>
                     <option value="3"> Superior Deluxe </option>
                     <option value="4"> Premier Deluxe  </option>
                     <option value="5"> Executive Suite </option>
                     <option value="6"> Junior Suite </option>
                     <option value="7"> Honeymoon Suite </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of room/suite</label>
                 <select class="form-control" name="room_number" id="room_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" name="person_number" id="person_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" name="child_number" id="child_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Restaurant facilities?</label>
                 <select class="form-control" name="res_facilities"id="res_facilities" onchange="finalCost()">
                     <option value="0" selected> Do you want restaurant facilities? </option>
                     <option value="2"> Yes </option>
                     <option value="0"> No </option>
                 </select>
             </div><br>
             <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Submit  </button>
    	</div>
             
         </form>
     </div>
                



            </div>
        </div>
    </div>
</body>
<style>
    #output {
    /* background-color: #c5edf3; */
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 2px solid #009688;
    font-family: sans-serif;
    line-height: 1.8;
}
#newPublish {
    /* background-color: #c5edf3; */
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 2px solid #009688;
    font-family: sans-serif;
    line-height: 1.8;
}
.box {
    /* background-color: #f7f7f7; */
    margin-top: 60px;
    margin-bottom: 50px;
    padding: 40px 60px;
}
#details_info {
    /* background-color: #f7f7f7; */
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 1px solid #cccccc;
    font-family: sans-serif;
    line-height: 1.8;
    margin-left: 90px;
}
.box3 {
    margin-top: 80px;
    margin-left: 150px;
    margin-right: 150px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: gainsboro;
}
.box11 {
    margin-top: 80px;
    margin-left: 250px;
    margin-right: 250px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: gainsboro;
    line-height: 2.5;
}
.web_design_box {
    margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: #d9edf7;
    box-shadow: 3px 5px 10px #318f86;
}
.hotel_reserve_box {
    margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    /* background-color: #c6badc; */
    box-shadow: 3px 5px 10px #7527b0;
}
.online_food_delivery_box {
    margin-top: 50px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 20px 40px;
    background-color: #d4c0b9;
    box-shadow: 3px 5px 10px #714c4a;
}
.result_box {
    margin-top: 15%;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 20px 40px;
    background-color: #d4c0b9;
    box-shadow: 3px 5px 10px #8BC34A;
}
.result_box_text {
    color: #232222;
    font-size: 20px;
    text-align: center;
    padding-top:10px;
}
.result_box_text span {
    color: #614136;
    font-size: 26px;
    text-align: center;
}
</style>
