

<?php

session_start();
if(isset($_SESSION['name'])){

}
else{
  header ('Location: log.php');
}

?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <title>car</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        

        }

        h4 {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
      

        .container {
            display: grid;
            align-content: center;
            grid-template-columns: auto ;
            gap: 10px;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            padding: 10px;
        }

        .container>div {
            background-color: rgb(215, 227, 230);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        h1 {
            text-align: center;
            color: #333;

        }
       

        label {
            display: block;
            margin-top: 2px;
            font-size: 20px;
        }

        input {
            width: 100%;
            max-width: 300px;
            padding: 5px;
            margin-top: 2px;
            margin-bottom: 2px;

        }

        button {
            background-color: #3498db;
            color: #fff;
            margin: 5px;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        #searchDiv{
            padding-left: 30px;
        }



        /*--------------------------------------------------------------*/



        @media screen and (min-width: 530px) {
            .container{
            grid-template-columns: auto auto ;}
            #searchDiv{
            padding-left: 20px;
        }
}
@media screen and (min-width: 800px) {
            .container{
            grid-template-columns: auto auto auto;}
            #searchDiv {
            grid-column: 1 / 4;
            align-content: center;
            text-align: center;
            align-items: center;
        }
        #searchDiv{
            padding-left: 300px;
        }
}


#back:link, #back:visited {
 
    background-color: #3498db;
            color: #fff;
            margin: 5px;
            padding: 10px 15px;
            border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

#back:hover, #back:active {
   background-color: #2980b9;
}
#head{
    
}
#back{
   
   position: fixed;
   top: 10px;
   left: 20px; 
}




    </style>
</head>

<body>
    <div id="head">
<a  href="mainpage.php" id="back">Back</a>
<br>
    <h1>Wellcome to Car table</h1></div>

    <div class="container">
        <div class="search">
            <h4>Search</h4>
            <label>Car Name</label>
            <input type="text" id="carName">
            <br>
            <button id="searchButton">Search</button>
            <br><br>
        </div>
        <div class="insert">
            <form id="insertForm">
                <h4>Insert</h4>
                <label>Name</label>
                <input type="text" name="first" >
                <br>
                <label>Model</label>
                <input type="text" name="model" >
                <br>
                <label>year</label>
                <input type="number" name="year" >
                <br>
                <label>made</label>
                <input type="text" name="made" >
                <br>
                
                <button type="submit" id="insertButton">Insert</button>
            </form>
        </div>
        <div class="update">
            <form id="updateForm">
            <h4>Update</h4>
            <label>Name</label>
            <input type="text"  name="updatefirst">
            <br>
            <label>Model</label>
            <input type="text" name="updatemodel">
            <br>
            <label>Year</label>
            <input type="number" name="updatesyear">
            <br>
            <label>Made</label>
            <input type="text" name="updatemade">
            <br>
            
            <button type="submit" id="updateButton">Update</button>
        </form>
        </div>
        <div id="searchDiv"></div>
    
    </div>

    <script>
        $(document).ready(function () {
            $.post("car.php", function (data, status) {
                $("#searchDiv").html(data);
            });



            $("#searchButton").click(function () {
                $.post("carSearch.php", {
                        carName: $("#carName").val()
                    },
                    function (data, status) {
                        $("#searchDiv").html(data);
                    });
            });

            $("#insertButton").click(function (event) {
       
        var formData = $("#insertForm").serialize();

        // Check if any of the form fields are empty
        if ($("#insertForm input").filter(function () {
            return $(this).val().trim() === "";
        }).length > 0) {
            alert("Please fill in all the information");
            return;
        }
                $.post("carInsert.php", formData, function (data, status) {
                    $("#searchDiv").html(data);
                });
            });

          

            $("#updateButton").click(function (event) {
            var formData = $("#updateForm").serialize();

            // Check if the ID is provided
            if ($("#updateForm input[name='updatefirst']").val().trim() === "") {
                alert("Please fill in the name");
                return;
            }

            $.post("carUpdate.php", formData, function (data, status) {
                $("#searchDiv").html(data);
            });
        });
          

    

        });
    </script>
</body>

</html>
