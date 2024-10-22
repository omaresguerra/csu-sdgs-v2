<!DOCTYPE html>
<html>
<head>
    <title>SDG 3: Good Health and Well Being</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        .sdg-logo{
            width: 39%;
            padding-bottom: 4px;
            position: relative;
        }

        .title{
            font-family: 'Oswald', sans-serif;
            font-size: 48px;
            font-weight: bold;
        }

        .sdg-banner{
            width: 100%;
        }

        .sidenav-title{
            font-family: 'Oswald', sans-serif;
            font-size: 24px;
            font-weight: bold;
            padding-bottom: 5px;
            color: #000;
        }

        .panel-title{
            color: #fff;
        }

        a:hover{
            text-decoration: none;
        }

        .metric-title{
            font-family: 'Oswald', sans-serif;
            font-weight: bold;
            margin-top: 0px;
            color: rgba(229,36,59,1);
            padding-top: 20px;
        }

        .hr-metric{
            border: solid 2px rgba(229,36,59,1);  
            width: 100px; 
            margin-left: 0;
            margin-top: 0;
        }


        .sdg-border{
            border-color: rgba(229,36,59,1);
        }

        .sdg-heading{
            background-color: rgba(229,36,59,1);
            padding: 10px;
        }
        

        @media only screen and (max-width: 991px) {
           .sdg-logo{
                width: 85%;
           }
           .title{
                font-size: 40px;
            }
        }


        @media only screen and (max-width: 768px) {
           .sdg-logo{
                width: 24%;
           }
        }


    </style>
</head>
<body>
    <div class="container">
       
        <div class="row">
            <!-- SDG 1 -->
            <div class="col-sm-9">
                <h1 class="title">Goal 3: Ensure healthy lives and promote well-being for all at all ages</h1>
                <hr>
                <img src="../assets/img/sdg1/SDG-1-2-1024x3011111111.jpg" alt="Goal 1" class="sdg-banner">
                <br><br>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.                    <br><br>
                    Cagayan State University recognizes the importance of tackling poverty and has taken several initiatives in order to contribute to this goal, such as financial aid for the less-privileged students and support to communities through engagement and outreach program. Scholarships, grants, and financial aid programs are offered to ensure that no deserving student is deprived of education due to financial constraints. These initiatives aim to empower individuals, uplift communities, and promote sustainable development.
                    <br><br>
                </p>
            </div>

            <div class="col-sm-3">
                <?php include 'nav.php'; ?>
                
            </div>


        </div>

    </div>

    <footer>
       
    </footer>

   <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</body>
</html>