
<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>bmshospital</title>

    <style>
      html,
      body {
        min-height: 100%;
      }
      body,
      div,
      form,
      input,
      select,
      textarea,
      label,
      p {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
      }
      h1 {
        position: absolute;
        margin: 0;
        font-size: 34px;
        color: rgb(255, 255, 255);
        z-index: 2;
        line-height: 83px;
      }
      textarea {
        width: calc(100% - 12px);
        padding: 5px;
      }
      .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 20px;
      }
      form {
        width: 100%;
        padding: 20px;
        border-radius: 6px;
        background: rgb(255, 255, 255);
        box-shadow: 0 0 8px #669999;
      }
      .banner {
        position: relative;
        height: 300px;
        background-image: url("Images/BMSHOSPITAL.jpg");
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .logo {
        width: 300px;
        height: auto;
      }
      .banner::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.2);
        position: absolute;
        width: 100%;
        height: 100%;
      }
      input,
      select,
      textarea {
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
      textarea {
        width: calc(100% - 12px);
        padding: 5px;
      }
      .item span {
        color: red;
      }
      .flax {
        display: flex;
        justify-content: space-around;
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
        background: #669999;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }
      button:hover {
        background: #669999;
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form  method="post">
   <a href="index.php"><img src="Images/logo.png" alt="bmshospital" class="logo" /></a>
        <div class="banner">
          <h1
            style="
              color: rgb(66, 65, 65);
              text-shadow: 2px 2px #669999;
              font-stretch: expanded;
            "
          >
            <b>Book an Appointment</b>
          </h1>
        </div>
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" required />
        </div>
        <div class="item">
          <label for="email">Email Address<span>*</span></label>
          <input id="email" type="email" name="email" required />
        </div>

        <div class="item">
          <label for="phone">Phone<span>*</span></label>
          <input
            id="phone"
            type="number"
            placeholder="(XXX) XXX-XXXX"
            name="phone"
            required
          />
        </div>
        <!-- <div class="item">
          <label for="bdate">Date<span>*</span></label>
          <input id="bdate" type="date" name="bdate" required />
          <i class="fas fa-calendar-alt"></i>
        </div> -->
        <div class="flax">
          <div class="item">
            <p>Start Time</p>
            <select>
              <option selected value="" label="time" namr ="time"></option>
              <option value="9A">9 AM</option>
              <option value="10A">10 AM</option>
              <option value="11A">11 Am</option>
              <option value="12P">12 Pm</option>
              <option value="1P">1 Pm</option>
              <option value="2P">2 Pm</option>
              <option value="3P">3 Pm</option>
              <option value="4P">4 Pm</option>
              <option value="5P">5 Pm</option>
            </select>
          </div>
          <div class="item" style="display: flex; width: 1cm">
            <label for="Labtest">Lab test<span>*</span></label>
            <select id="Labtest" name="Labtest" required>
              <optgroup label="Select reason"></optgroup>
              <option value="">COMPLETE BLOOD COUNT</option>
              <option value="HEMOGLOBIN TEST">HEMOGLOBIN TEST</option>
              <option value="URINALYSIS">URINALYSIS</option>
              <option value="THYROID STIMULATING HORMONE">
                THYROID STIMULATING HORMONE
              </option>
              <option value="PROTHROMBIN TIME">PROTHROMBIN TIME</option>
            </select>
          </div>
          <div class="btn-block">
            <button type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
