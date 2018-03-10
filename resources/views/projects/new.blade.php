<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ORGNZD.</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/newproject.css') }}">
</head>
<body>
  <div class="content">
    <form action="/project/save" method="post">

    	@csrf

      <div class="header">
        <input type="name" maxlength="150" name="name" placeholder="Untitled project" required>
        <a href="/" id="back-btn">
          <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="400" font-family="Ionicons" letter-spacing="0.875" font-size="28">
                  <g id="Project-creation---2" transform="translate(-324.000000, -48.000000)" fill="#D2D2D2">
                      <text id="ion-plus-round---Ionicons" transform="translate(333.031223, 57.031223) rotate(45.000000) translate(-333.031223, -57.031223) ">
                          <tspan x="322.031223" y="67.5312229"></tspan>
                      </text>
                  </g>
              </g>
          </svg>
        </a>
      </div>

      <div class="line"></div>

      <textarea name="description" placeholder="What's the plan?" id="desc-input" required></textarea>
      <div class="footer">
        <select name="type" id="type-btn">
          <option value="Party">Party</option>
          <option value="Travel">Travel</option>
          <option value="Event">Other Event</option>
        </select>

        <input type="date" maxlength="50" name="duedate" placeholder="Duedate" required id="date-btn">

        <input type="Submit" name="submit" value="Add" id="add-btn">
      </div>
    </form>
  </div>
</body>
</html>
