<!DOCTYPE html>

<html>
<head>
   <meta charset='utf-8' />
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>Page Title</title>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- cdn -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!-- local imports -->
   <link rel='stylesheet' type='text/css' media='screen' href='template/style.css' />
   <!-- font-awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
   <div id='header'>
      <div id= "food_icon">
         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
            <!-- <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDUwLjk5OCA1MC45OTgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUwLjk5OCA1MC45OTg7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzguNjc4LDQ3LjgwM2MwLjUzNiwwLjUzNywyLjExNC0wLjE3LDIuNjUxLTAuNzA3bDAuODg0LTAuODg0YzAuNTM3LTAuNTM3LDEuMjQ0LTIuMTE1LDAuNzA3LTIuNjUyTDI5LjYyOSwzMC45NDcgICAgbC0zLjQ3NSwzLjY2MUwzOC42NzgsNDcuODAzeiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0xNi42MzksMTguNjE2YzEuNzI5LTMuMDA3LDAuODE1LTYuNjUyLTEuOTA4LTkuMzc1QzExLjUxMyw2LjAyNCw0LjU2NSwyLjg3NywxLjM0OCw2LjA5NSAgICBjLTMuMjE4LDMuMjE4LTAuMDcxLDEwLjE2NiwzLjE0NiwxMy4zODNjMi42NzEsMi42NzEsNi4yMywzLjYwMyw5LjIwNSwyLjAwNGw2LjI5OCw2LjYzOGwzLjMyNy0zLjE1N0wxNi42MzksMTguNjE2eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0zMy4wMTIsMTguNTIzTDYuNjMxLDQzLjU2Yy0wLjUzNywwLjUzNywwLjE3LDIuMTE1LDAuNzA3LDIuNjUybDAuODg0LDAuODg0YzAuNDAyLDAuNDAyLDEuMzg2LDAuODk4LDIuMDgxLDAuODk4ICAgIGMwLjIzNCwwLDAuNDM2LTAuMDU4LDAuNTcxLTAuMTkxbDI1LjEyOS0yNi40NzljMC43MDIsMC4zNDUsMS40MzcsMC41NCwyLjE4MSwwLjYwN2MyLjIyOSwwLjIwNCw0LjU1My0wLjc3Myw2LjQyMi0yLjY0MiAgICBjNi4zMzYtNi4zMzUsNy40NzMtNy43Myw1LjUyOC0xMC4xNzFsLTcuNDc5LDcuMTY4Yy0wLjE2NywwLjE2Ny0wLjQwMiwwLjI2OS0wLjY0LDAuMjY5Yy0wLjIxMywwLTAuNDA5LTAuMDgxLTAuNTU0LTAuMjI3ICAgIGwtMC4yLTAuMTk5Yy0wLjE0Ni0wLjE0Ni0wLjIyNi0wLjM0My0wLjIyNi0wLjU1NWMwLjAwMS0wLjIzNiwwLjEwMi0wLjQ3MSwwLjI3Ni0wLjY0Nmw2Ljc4OS03Ljk2NSAgICBjLTAuMTYtMC4xNi0wLjMxMy0wLjMxMy0wLjQ4NS0wLjQ4NWMtMC4yOTEtMC4yOTEtMC41NjItMC41NjMtMC44MTgtMC44MjJsLTcuOTk1LDYuODJjLTAuMTQ2LDAuMTQ4LTAuMzgxLDAuMjQ5LTAuNjE3LDAuMjQ5ICAgIGMtMC4yMTMsMC0wLjQwOS0wLjA4MS0wLjU1NC0wLjIyN2wtMC4yLTAuMTk5Yy0wLjE0Ni0wLjE0Ni0wLjIyNi0wLjM0My0wLjIyNi0wLjU1NWMwLjAwMS0wLjIzNiwwLjEwMi0wLjQ3MSwwLjI3Ni0wLjY0NiAgICBsNy4xMzItNy40NDJjLTIuMzAxLTEuNjcyLTMuNjk5LTAuMjc4LTkuODExLDUuODMzYy0yLjAzMywyLjAzMy0zLjAxLDQuNjA0LTIuNTU5LDcuMDAzICAgIEMzMi4zNzcsMTcuMTkxLDMyLjYyOSwxNy44NzIsMzMuMDEyLDE4LjUyM3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> -->
            
            <!-- <a href="https://icons8.com">Icon pack by Icons8</a> -->
            <img src="https://png.icons8.com/ios/50/ffffff/dining-room-filled.png" style="width: 24px; height: 26px;">
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
         </div>
         <div class="vl"></div>
         <div class="pageNavHolder">
            <ul>
               <li><a href="#test1" class = "menu_selection active">Test Menu 1</a></li>
               <li><a href="#test2" class = "menu_selection">Test Menu 2</a></li>
               <li><a href="#test3" class = "menu_selection">Test Menu 3</a></li>
               <li><a href="#test4" class = "menu_selection">Test Menu 4</a></li>
            </ul>
         </div>
          
         </ul>
      </div>
   </div>
</body>
</html>

<script>
$(document).ready(function (){
    $('.pageNavHolder').on('click', 'li', function(){
        $('.pageNavHolder li.active').removeClass("active");
        $(this).addClass('active');
    });
});
</script>