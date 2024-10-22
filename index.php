<!DOCTYPE html>
<html>
<head>
    <title>SDG Website</title>
    <!-- Bootstrap 3.4.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <style type="text/css">
        .col-sm-3{
            padding: 5px;
        }

        .sdg-logo-container{
            width: 200px;
        }
        .sdg-logo{
            width: 200px;
            position: absolute;
            bottom: 5px;

        }

        .title{
            font-family: 'Oswald', sans-serif;
            font-size: 48px;
            font-weight: bold;
        }

        .text-overlay{
            font-family: 'Oswald', sans-serif;
            font-size: 28px;
            font-weight: bold;
            color: #ffffff;
        }

        .text-overlay-p{
            font-family: 'Oswald', sans-serif;
            font-size: 16px;
            color: #ffffff;
        }


        /* SDG 1 */
        .sdg1-container{
            height: 380px;
            background-image: url('assets/img/sdg1/sdg1-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;

        }
      
        .sdg1-bg{
            height: 380px;
            background: linear-gradient(rgba(229,36,59,0), rgba(229,36,59,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg1-bg:hover {
            background: rgba(229,36,59,1);
        }

        /* SDG 2 */
        .sdg2-container{
            height: 380px;
            background-image: url('assets/img/sdg2/zero-hunger-gray.png');
            /* background: linear-gradient(rgba(221,166,58,1), rgba(221,166,58,1) 95%); */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg2-bg{
            height: 380px;
            background: linear-gradient(rgba(221,166,58,0), rgba(221,166,58,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg2-bg:hover {
            background: rgba(221,166,58,1);
        }

    
        /* SDG 3 */
        .sdg3-container{
            height: 380px;
            background-image: url('assets/img/sdg3/good-health-gray.jpg');
            /* background: linear-gradient(rgba(76,159,56,1), rgba(76,159,56,1) 95%); */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg3-bg{
            height: 380px;
            background: linear-gradient(rgba(76,159,56,0), rgba(76,159,56,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg3-bg:hover {
            background: rgba(76,159,56,1);
        }



        /* SDG 4 */
        .sdg4-container{
            height: 380px;
            background-image: url('assets/img/sdg4/education-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg4-bg{
            height: 380px;
            background: linear-gradient(rgba(197,25,45,0) , rgba(197,25,45,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg4-bg:hover{
            background: rgba(197,25,45,1);
        }


        /* SDG 5 */
        .sdg5-container{
            height: 380px;
            background-image: url('assets/img/sdg5/sdg5-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg5-bg{
            height: 380px;
            background: linear-gradient(rgba(255,58,33,0) , rgba(255,58,33,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg5-bg:hover{
            background: rgba(255,58,33,1);
        }

        /* SDG 6 */
        .sdg6-container{
            height: 380px;
            background-image: url('assets/img/sdg6/clean-water-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg6-bg{
            height: 380px;
            background: linear-gradient(rgba(38,189,226,0) , rgba(38,189,226,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg6-bg:hover{
            background: rgba(38,189,226,1);
        }

        /* SDG 7 */
        .sdg7-container{
            height: 380px;
            background-image: url('assets/img/sdg7/energy-carig-gray.jpg');
            /* background: linear-gradient(rgba(252,195,11,1), rgba(252,195,11,1) 95%); */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg7-bg{
            height: 380px;
            background: linear-gradient(rgba(252,195,11,0), rgba(252,195,11,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg7-bg:hover {
            background: rgba(221,166,58,1);
        }

        /* SDG 8 */
        .sdg8-container{
            height: 380px;
            background: linear-gradient(rgba(162,25,66,1), rgba(162,25,66,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg8-bg{
            height: 380px;
            background: linear-gradient(rgba(162,25,66,0), rgba(162,25,66,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg8-bg:hover {
            background: rgba(162,25,66,1);
        }

        /* SDG 9 */
        .sdg9-container{
            height: 380px;
            background: linear-gradient(rgba(253,105,37,1), rgba(253,105,37,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg9-bg{
            height: 380px;
            background: linear-gradient(rgba(253,105,37,0), rgba(253,105,37,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg9-bg:hover {
            background: rgba(253,105,37,1);
        }

        /* SDG 10 */
        .sdg10-container{
            height: 380px;
            background: linear-gradient(rgba(221,19,103,1), rgba(221,19,103,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg10-bg{
            height: 380px;
            background: linear-gradient(rgba(221,19,103,0), rgba(221,19,103,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg10-bg:hover {
            background: rgba(221,19,103,1);
        }

        /* SDG 11 */
        .sdg11-container{
            height: 380px;
            background: linear-gradient(rgba(253,157,36,1), rgba(253,157,36,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg11-bg{
            height: 380px;
            background: linear-gradient(rgba(253,157,36,0), rgba(253,157,36,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg11-bg:hover {
            background: rgba(253,157,36,1);
        }

        /* SDG 12 */
        .sdg12-container{
            height: 380px;
            background: linear-gradient(rgba(191,139,46,1), rgba(191,139,46,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg12-bg{
            height: 380px;
            background: linear-gradient(rgba(191,139,46,0), rgba(191,139,46,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg12-bg:hover {
            background: rgba(191,139,46,1);
        }

        /* SDG 13 */
        .sdg13-container{
            height: 380px;
            background: linear-gradient(rgba(63,126,68,1), rgba(63,126,68,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .sdg13-bg{
            height: 380px;
            background: linear-gradient(rgba(63,126,68,0), rgba(63,126,68,1) 95%);
            transition: backgrounf 0.15s;
            position: relative;
        }

        .sdg13-bg:hover {
            background: rgba(63,126,68,1);
        }

        /* SDG 14 */
        .sdg14-container{
            height: 380px;
            background-image: url('assets/img/sdg14/fisheries-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg14-bg{
            height: 380px;
            background: linear-gradient(rgba(10,151,217,0) , rgba(10,151,217,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg14-bg:hover{
            background: rgba(10,151,217,1);
        }

        /* SDG 15 */
        .sdg15-container{
            height: 380px;
/*            background-image: url('assets/img/fisheries-gray.jpg');*/
            background: linear-gradient(rgba(86,192,43,1) , rgba(86,192,43,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg15-bg{
            height: 380px;
            background: linear-gradient(rgba(86,192,43,0) , rgba(86,192,43,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg15-bg:hover{
            background: rgba(86,192,43,1);
        }

        /* SDG 16 */
        .sdg16-container{
            height: 380px;
/*            background-image: url('assets/img/fisheries-gray.jpg');*/
            background: linear-gradient(rgba(0,104,157,1) , rgba(0,104,157,1) 95%);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg16-bg{
            height: 380px;
            background: linear-gradient(rgba(0,104,157,0) , rgba(0,104,157,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg16-bg:hover{
            background: rgba(0,104,157,1);
        }

        /* SDG 17 */
        .sdg17-container{
            height: 380px;
            background-image: url('assets/img/sdg17/icsa4-gray.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sdg17-bg{
            height: 380px;
            background: linear-gradient(rgba(25,72,106,0) , rgba(25,72,106,1) 95%);
            transition: backgrounf 0.15s;
        }

        .sdg17-bg:hover{
            background: rgba(25,72,106,1);
        }


        /* transition */
        .sdg1-overlay, .sdg2-overlay, .sdg3-overlay, .sdg4-overlay, .sdg5-overlay, .sdg6-overlay,.sdg7-overlay,.sdg8-overlay, .sdg9-overlay, .sdg10-overlay, .sdg11-overlay, .sdg12-overlay, .sdg13-overlay,.sdg14-overlay, .sdg15-overlay, .sdg16-overlay, .sdg17-overlay{
            position: absolute;
            bottom: 100%;
            padding: 15px;
            overflow: hidden;
            width: 95%;
            height: 0;
        }


        .sdg1-bg:hover .sdg1-overlay, .sdg2-bg:hover .sdg2-overlay, .sdg3-bg:hover .sdg3-overlay, .sdg4-bg:hover .sdg4-overlay, .sdg5-bg:hover .sdg5-overlay, .sdg6-bg:hover .sdg6-overlay, .sdg7-bg:hover .sdg7-overlay,.sdg8-bg:hover .sdg8-overlay, .sdg9-bg:hover .sdg9-overlay, .sdg10-bg:hover .sdg10-overlay,.sdg11-bg:hover .sdg11-overlay,.sdg12-bg:hover .sdg12-overlay, .sdg13-bg:hover .sdg13-overlay, .sdg14-bg:hover .sdg14-overlay, .sdg15-bg:hover .sdg15-overlay,  .sdg16-bg:hover .sdg16-overlay,.sdg17-bg:hover .sdg17-overlay, .sdg14-bg:hover .sdg14-overlay{
            bottom: 0;
            height: 100%;
        }

        .sdg1-bg:hover .sdg-logo, .sdg2-bg:hover .sdg-logo, .sdg3-bg:hover .sdg-logo, .sdg4-bg:hover .sdg-logo, .sdg5-bg:hover .sdg-logo, .sdg6-bg:hover .sdg-logo,.sdg7-bg:hover .sdg-logo,.sdg8-bg:hover .sdg-logo,.sdg9-bg:hover .sdg-logo,.sdg10-bg:hover .sdg-logo,.sdg11-bg:hover .sdg-logo,.sdg12-bg:hover .sdg-logo,.sdg13-bg:hover .sdg-logo, .sdg14-bg:hover .sdg-logo,  .sdg15-bg:hover .sdg-logo, .sdg16-bg:hover .sdg-logo, .sdg17-bg:hover .sdg-logo {
            width: 210px;
        }



        @media only screen and (max-width: 991px) {
            .sdg-logo{
                 width: 160px;
            }
            .sdg1-bg:hover .sdg-logo, .sdg2-bg:hover .sdg-logo, .sdg3-bg:hover .sdg-logo, .sdg4-bg:hover .sdg-logo, .sdg5-bg:hover .sdg-logo, .sdg6-bg:hover .sdg-logo, .sdg7-bg:hover .sdg-logo, .sdg8-bg:hover .sdg-logo, .sdg9-bg:hover .sdg-logo, .sdg10-bg:hover .sdg-logo, .sdg11-bg:hover .sdg-logo, .sdg12-bg:hover .sdg-logo, .sdg13-bg:hover .sdg-logo, .sdg14-bg:hover .sdg-logo, .sdg15-bg:hover .sdg-logo, .sdg16-bg:hover .sdg-logo, .sdg17-bg:hover .sdg-logo {
                width: 160px;
            }
            .text-overlay{
                font-size: 32px;
            }

            .text-overlay-p{
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 765px) {
           .sdg1-container, .sdg2-container, .sdg3-container, .sdg4-container, .sdg5-container, .sdg6-container, .sdg7-container, .sdg8-container,   .sdg9-container, .sdg10-container, .sdg11-container, .sdg12-container, .sdg13-container,  .sdg14-container, .sdg15-container, .sdg16-container,  .sdg17-container, .sdg1-bg, .sdg2-bg, .sdg3-bg, .sdg4-bg, .sdg5-bg, .sdg6-bg, .sdg7-bg,  .sdg8-bg,  .sdg9-bg, .sdg10-bg,  .sdg11-bg,  .sdg12-bg, .sdg13-bg,  .sdg14-bg,  .sdg15-bg,  .sdg16-bg, .sdg17-bg {
                height: 300px;
                background-size: 100%;
            }
            .sdg1-bg{
                background: linear-gradient(to left, rgba(229,36,59,0), rgba(229,36,59,1) 85%);
            }
            .sdg4-bg{
                background: linear-gradient(to left, rgba(197,25,45,0) , rgba(197,25,45,1) 85%);
            }
            .sdg5-bg{
                background: linear-gradient(to left, rgba(255,58,33,0) , rgba(255,58,33,1) 85%);
            }
            .sdg6-bg{
                background: linear-gradient(to left, rgba(38,189,226,0) , rgba(38,189,226,1) 85%);
            }

            .sdg14-bg{
                background: linear-gradient(to left, rgba(10,151,217,0) , rgba(10,151,217,1) 85%);
            }

            .sdg17-bg{
                background: linear-gradient(to left, rgba(25,72,106,0) , rgba(25,72,106,1) 85%);
            }
        }

        @media only screen and (max-width: 500px) {
           .sdg1-container, .sdg2-container, .sdg3-container, .sdg4-container, .sdg5-container, .sdg6-container, .sdg7-container, .sdg8-container, .sdg9-container, .sdg10-container, .sdg11-container, .sdg12-container, .sdg13-container,.sdg14-container, .sdg15-container, .sdg16-container, .sdg17-container, .sdg1-bg, .sdg2-bg, .sdg3-bg, .sdg4-bg, .sdg5-bg, .sdg6-bg, .sdg7-bg,  .sdg8-bg,  .sdg9-bg, .sdg10-bg,  .sdg11-bg,  .sdg12-bg, .sdg13-bg,  .sdg14-bg,  .sdg15-bg,  .sdg16-bg, .sdg17-bg {
                height: 180px;
                background-size: 100%;
            }
           
            .sdg-logo{
                 width: 150px;
            }

            .sdg1-overlay, .sdg2-overlay, .sdg3-overlay, .sdg4-overlay, .sdg5-overlay, .sdg6-overlay, .sdg7-overlay, .sdg8-overlay, .sdg9-overlay, .sdg10-overlay, .sdg11-overlay, .sdg12-overlay, .sdg13-overlay, .sdg14-overlay, .sdg15-overlay, .sdg17-overlay{
                position: absolute;
            }
            .sdg1-bg:hover .sdg1-overlay, .sdg2-bg:hover .sdg2-overlay, .sdg3-bg:hover .sdg3-overlay,.sdg4-bg:hover .sdg4-overlay, .sdg5-bg:hover .sdg5-overlay, .sdg6-bg:hover .sdg6-overlay, .sdg7-bg:hover .sdg7-overlay, .sdg8-bg:hover .sdg8-overlay, .sdg9-bg:hover .sdg9-overlay, .sdg10-bg:hover .sdg10-overlay, .sdg11-bg:hover .sdg11-overlay, .sdg12-bg:hover .sdg12-overlay, .sdg13-bg:hover .sdg13-overlay, .sdg14-bg:hover .sdg14-overlay, .sdg15-bg:hover .sdg15-overlay, .sdg16-bg:hover .sdg16-overlay, .sdg17-bg:hover .sdg17-overlay{
                bottom: 0;
                height: 0;
            }


        }

    </style>
</head>
<body>
    <div class="container">
        <div>
             <h1 class="title">CSU and the Sustainable Development Goals</h1>
             <p>Cagayan State University (CSU) exemplifies an organization committed to achieving the Sustainable Development Goals (SDGs) of the United Nation. With a vision to be a global center of excellence in the arts, culture, agriculture and fisheries, and the sciences, CSU continues to create significant strides towards achieving the United Nations Sustainable Development Goals (SDGs). Its provision of quality instruction, engagement in innovative and creative research, delivery of responsive public service, and engagement in productive industry and community, reflect its dedication to the SDGs. By integrating sustainability and social responsibility into every aspect of its institution, CSU is not only shaping the future but leading the way in creating a more equitable and sustainable world for all.</p>
             <hr>
        </div>
        <div class="row">
            <!-- SDG 1 -->
            <div class="col-sm-3">
                <a href="pages/sdg1.php">
                <div class="sdg1-container">
                    <div class="sdg1-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg1/sdg1.png" alt="Goal 1" class="sdg-logo">
                        </div>
                        <div class="sdg1-overlay">
                            <h2 class="text-overlay">No Poverty</h2>
                            <p class="text-overlay-p">End poverty at all forms</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 2 -->
            <div class="col-sm-3">
                <a href="pages/sdg2.php">
                <div class="sdg2-container">
                    <div class="sdg2-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg2/sdg2.png" alt="Goal 2" class="sdg-logo">
                        </div>
                        <div class="sdg2-overlay">
                            <h2 class="text-overlay">Zero Hunger</h2>
                            <p class="text-overlay-p">End hunger, achieve food security and improved nutrition and promote sustainable agriculture</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 3 -->
            <div class="col-sm-3">
                <a href="pages/sdg3.php">
                <div class="sdg3-container">
                    <div class="sdg3-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg3/sdg3.png" alt="Goa3 " class="sdg-logo">
                        </div>
                        <div class="sdg3-overlay">
                            <h2 class="text-overlay">Good Health and Well Being</h2>
                            <p class="text-overlay-p">Ensure healthy lives and promote well-being for all at all ages</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 4 -->
            <div class="col-sm-3">
                <a href="pages/sdg4.php">
                <div class="sdg4-container">
                    <div class="sdg4-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg4/sdg4.png" alt="Goal 4" class="sdg-logo">
                        </div>
                        <div class="sdg4-overlay">
                            <h2 class="text-overlay">Quality Education</h2>
                            <p class="text-overlay-p">Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 5 -->
            <div class="col-sm-3">
                <a href="pages/sdg5.php">
                <div class="sdg5-container">
                    <div class="sdg5-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg5/sdg5.png" alt="Goal 5" class="sdg-logo">
                        </div>
                        <div class="sdg5-overlay">
                            <h2 class="text-overlay">Gender Equality</h2>
                            <p class="text-overlay-p">Achieve gender equality and empower all women and girls</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 6 -->
            <div class="col-sm-3">
                <a href="pages/sdg6.php">
                <div class="sdg6-container">
                    <div class="sdg6-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg6/sdg6.png" alt="Goal 6" class="sdg-logo">
                        </div>
                        <div class="sdg6-overlay">
                            <h2 class="text-overlay">Clean Water and Sanitation</h2>
                            <p class="text-overlay-p">Ensure availability and sustainable management of water and sanitation for all</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 7 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg5.html"> -->
                <div class="sdg7-container">
                    <div class="sdg7-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg7/sdg7.png" alt="Goal 7" class="sdg-logo">
                        </div>
                        <div class="sdg7-overlay">
                            <h2 class="text-overlay">Affordable and Clean Energy</h2>
                            <p class="text-overlay-p">Ensure access to affordable, reliable, sustainable and modern energy for all</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 8 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg8.html"> -->
                <div class="sdg8-container">
                    <div class="sdg8-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg8/sdg8.png" alt="Goal 8" class="sdg-logo">
                        </div>
                        <div class="sdg8-overlay">
                            <h2 class="text-overlay">Decent Work and Economic Growth</h2>
                            <p class="text-overlay-p"  style="font-size: 12px;">Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 9 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg5.html"> -->
                <div class="sdg9-container">
                    <div class="sdg9-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg9/sdg9.png" alt="Goal 9" class="sdg-logo">
                        </div>
                        <div class="sdg9-overlay">
                            <h2 class="text-overlay">Industry, Innovation and Instrastructure</h2>
                            <p class="text-overlay-p"  style="font-size: 12px;">Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 10 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg8.html"> -->
                <div class="sdg10-container">
                    <div class="sdg10-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg10/sdg10.png" alt="Goal 10" class="sdg-logo">
                        </div>
                        <div class="sdg10-overlay">
                            <h2 class="text-overlay">Decent Work and Economic Growth</h2>
                            <p class="text-overlay-p" style="font-size: 12px;">Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>


             <!-- SDG 11 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg5.html"> -->
                <div class="sdg11-container">
                    <div class="sdg11-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg11/sdg11.png" alt="Goal 11" class="sdg-logo">
                        </div>
                        <div class="sdg11-overlay">
                            <h2 class="text-overlay">Sustainable Cities and Communities</h2>
                            <p class="text-overlay-p">Make cities and human settlements inclusive, safe, resilient and sustainable</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 12 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg8.html"> -->
                <div class="sdg12-container">
                    <div class="sdg12-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg12/sdg12.png" alt="Goal 12" class="sdg-logo">
                        </div>
                        <div class="sdg12-overlay">
                            <h2 class="text-overlay">Responsible Consumption and Production</h2>
                            <p class="text-overlay-p"  style="font-size: 12px;">Ensure sustainable consumption and production patterns</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 13 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg8.html"> -->
                <div class="sdg13-container">
                    <div class="sdg13-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg13/sdg13.png" alt="Goal 13" class="sdg-logo">
                        </div>
                        <div class="sdg13-overlay">
                            <h2 class="text-overlay">Climate Action</h2>
                            <p class="text-overlay-p">Take urgent action to combat climate change and its impacts</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 14 -->
            <div class="col-sm-3">
                <a href="pages/sdg14.php">
                <div class="sdg14-container">
                    <div class="sdg14-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg14/sdg14.png" alt="Goal 14" class="sdg-logo">
                        </div>
                        <div class="sdg14-overlay">
                            <h2 class="text-overlay">Life Below Water</h2>
                            <p class="text-overlay-p">Conserve and sustainably use the oceans, seas and marine resources for sustainable development</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 15 -->
            <div class="col-sm-3">
                <a href="pages/sdg15.php">
                <div class="sdg15-container">
                    <div class="sdg15-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg15/sdg15.png" alt="Goal 15" class="sdg-logo">
                        </div>
                        <div class="sdg15-overlay">
                            <h2 class="text-overlay">Life on Land</h2>
                            <p class="text-overlay-p" style="font-size: 12px;">Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- SDG 16 -->
            <div class="col-sm-3">
                <!-- <a href="pages/sdg15.html"> -->
                <div class="sdg16-container">
                    <div class="sdg16-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg16/sdg16.png" alt="Goal 16" class="sdg-logo">
                        </div>
                        <div class="sdg16-overlay">
                            <h2 class="text-overlay">Promote just, peaceful and inclusive societies</h2>
                            <p class="text-overlay-p" style="font-size: 12px;">Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels</p>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <!-- SDG 17 -->
            <div class="col-sm-3">
                <a href="pages/sdg17.php">
                <div class="sdg17-container">
                    <div class="sdg17-bg">
                        <div class="sdg-logo-container">
                            <img src="assets/sdg-icons/sdg17/sdg17.png" alt="Goal 16" class="sdg-logo">
                        </div>
                        <div class="sdg17-overlay">
                            <h2 class="text-overlay">Partnerships for the Goals</h2>
                            <p class="text-overlay-p" style="font-size: 12px;">Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <br><br><br>
    </div>

    <footer>
       
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</body>
</html>