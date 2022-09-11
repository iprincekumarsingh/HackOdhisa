<!DOCTYPE html>
<html>
  <head>
    <title>Yoga Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      height: 50px;
      width: 600px;
      align-self: center;
      margin: auto;
      margin-top: 430px;
      
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #6675df; 
      }
      .banner {
      position: relative;
      height: 150px;
      background-color: #6675df;  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-radius: 5px;
      }
      .banner::after {
      content: "";
      
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #6675df;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #6675df;
      color: #6675df;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #6675df;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #6675df;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #6675df;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #6675df;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">

          <h1>Update Your Profile</h1>
        </div>

        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="Enter Full Name" />

          </div>
        </div>

        <div class="item">
          <p>Date of Birth</p>
          <input type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="item">
          <p>Enter Your 12 digit number</p>
          <input type="email" name="email"/>
         </div>

        <div class="question">
          <p>Gender</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_1" name="gender"/>
              <label for="radio_1" class="radio"><span>Male</span></label>
            </div>
            <div>
              <input type="radio" value="none" id="radio_2" name="gender"/>
              <label for="radio_2" class="radio"><span>Female</span></label>
            </div>
          </div>
        </div>

        <div class="item">
          <p>Address</p>
          <input type="text" name="name" placeholder="Street address" required/>
          <input type="text" name="name" placeholder="Street address line 2" required/>
          <div class="city-item">
            <input type="text" name="name" placeholder="City" required/>
            <input type="text" name="name" placeholder="Region" required/>
            <input type="text" name="name" placeholder="Postal / Zip code" required/>
            <select required>
              <option value="">Country</option>
              <option value="1">India</option>

            </select>
          </div>
        </div>
        <div class="item">
          <p>Blood Group </p>
          <select required>
            <option value="">Blood Group</option>
            <option value="1">A+</option>
            <option value="2">B+</option>
            <option value="2">A-</option>
            <option value="2">B-</option>
            <option value="2">AB+</option>
            <option value="2">AB-</option>
            <option value="2">O+</option>
            <option value="2">O-</option>
          </select>
        </div>

        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
    <br>
    <br>
  </body>
</html>