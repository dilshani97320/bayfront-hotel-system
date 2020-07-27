<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
	

.form-container{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	background-color: #fff;
	padding: 25px 30px;
	width:1200px;
    margin: auto;
    box-shadow: 0px 2px 18px -4px rgba(0,0,0,0.75);
    height: 130px;
    margin-top: -50px;
    margin-bottom: 40px;
}
.block{
	flex-basis: 200px;
}
.form-field {
  position: relative;
  background-color: #f4f4f4;
  width: 180px;
  margin-top: 10px;
  box-shadow: -1px -1px 1px rgba(0, 0, 0, 0.25);
}

.form-field label {
  color: #666666;
} 

.datepicker, .select-button {
  box-sizing: border-box;
  position: absolute;
  top: 3px;
  right: 4px;
  width: 36px;
  height: 36px;
  border-radius: 5px;
  font-size: 18px;
  text-align: center;
  line-height: 38px;
  color: #000;
}

.form-field input[type='date'],
.form__dropdown select {
  height: 45px;
  width: 180px;
  text-indent: 10px;
  /*padding: 0 0 0 3px;*/
  background-color: #f5f5f5;
  
  border: 2px solid #000;
  /*border: none;*/
}

.form__dropdown {
  box-sizing: border-box;
  display: inline-block;
  width: 45%;
  /*padding: 5px;*/
}

.form__dropdown:last-child {
  /*float: right;*/	
}
.form__submit {
  width: 100%;
  margin-top: 30px;
  height: 45px;
  border: 1px solid transparent;
  font-size: 15px;
  background-color: #000;
  color: white;
  text-transform: uppercase;
  box-shadow: 0px 1px 1px 0 darkgrey;
  border-radius: 5px;
  cursor: pointer;
}

</style>
<body>
	<div class="form-container">
		<div class="block chech-in">
			<label >Check in</label>
           	<div id='check-in' class='form-field'>
                <input type="date" value="" placeholder="9 July, 2016">
                <!-- <div class='datepicker'><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
            </div>
		</div>
		<div class="block check-out">
			<label >Check out</label>
                <div id='check-out' class='form-field'>
                    <input type="date" value="" placeholder="19 July, 2016">
                 	<!-- <div class='datepicker'><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
                </div>
		</div>
		<div class="block num-of-guest">
			<div class='form__dropdown'>
                                <label >Rooms</label>
                                <div class='form-field'> 
                                <select id='adultsAmount'>    
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                </select>
                                <!-- <div class=''><i class="fa fa-caret-down" aria-hidden="true"></i></div> -->
                            </div>
                            </div>
		</div>
		<div class="block num-of-room">
			<div class='form__dropdown'>
                                <label >Guests</label>
                                <br>
                              <div class='form-field'> 
                                <select id='childrenAmount'> 
                                        <option value="" selected="selected">0</option>                        
                                        <option value="1" >1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                </select>
                                <!-- <div class=''><i class="fa fa-caret-down" aria-hidden="true"></i></div> -->
                                </div>
                            </div>
		</div>
		<div class="block search">
			 <input type="submit" id='bookingSubmit' class='form__submit' value='Search rooms'>
		</div>
	</div>
</body>
</html>