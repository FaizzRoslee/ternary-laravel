<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        body #container1{
            font-family: Courier, monospace;
            position: relative;
        }
        #container1 {
            width: 100%;
            margin: 0px auto;
        }
        #container1 img{
            width: 100%;
            height: 100%;
        }
        #container2 {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
        }
        table, th, td {

        }
        #container3{
            /*padding: 5%;*/
            margin: 5%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        .text-center{
            text-align: center;
        }


    </style>
</head>
<body>

    <div id="container1">
        <img src="{{asset('media/template-bg.png')}}" alt="" />
        <div id="container2">

            <div id="container3">


                <table style="width:100%">
                    <td colspan="2">

                        <div class="text-center" style="padding: 3%;">
                            <h2><u><strong>INVOICE</strong></u></h2>
                            <br>
                            <h3>TERNARY SOLUTION SDN. BHD. 1366273A</h3> <br>
                            P.O. BOX 19, LOT 4.26, <br>
                            WISMA CENTRAL, JALAN AMPANG. <br>
                            50450, WILAYAH PERSEKUTUAN KUALA LUMPUR. MALAYSIA. <br>
                            +603 – 2164 6288 <br>
                            info@ternarysolution.com <br>
                            www.ternarysolution.com <br>
                        </div>
                    </td>
                    <tr>
                        <td style="border-top: 1px solid">
                            <div style=" padding: 5px;">
                                <strong>Submitted by</strong><br>
                                Staff Number: #070405<br>
                                Name: Muhammad Naim bin Mohd Nasser  <br>
                                Position: Administration <br>
                                Staff Department: Administration <br>
                            </div>
                        </td>
                        <td style="border-top: 1px solid">
                            <div style=" padding: 5px; text-align: left; width: 100%">

                                <strong>Date Created:</strong> 10/07/2020<br>
                                <strong>Payment Details</strong><br>
                                Bank Name: MAYBANK<br>
                                Method: Online Transfer<br>
                                Ref Number: 164324495343 <br>
                            </div>
                        </td>

                    </tr>
                    <tr style="border: 1px solid black">
                        <td style="border-top: 1px solid">
                            <br>
                            <div style=" padding: 5px; text-align: left; width: 100%">

                                <strong>Company Details</strong><br>
                                Company Name: QHREATE SDN. BHD.<br>
                                PIC: WAN BIN DAGU<br>
                                Phone: 0123456789<br>
                            </div>


                        </td>
                        <td style="border-top: 1px solid"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border-top: 1px solid">
                            <br>
                            <div style=" padding: 5px; text-align: left; width: 100%">

                                <strong>DETAILS:</strong><br>
                                COMPANY PROFILE DESIGN 50% DEPOSIT
                            </div>

                        </td>

                    </tr>
                    <tr>
                        <td>
                            <br>
                            <div style=" padding: 5px; text-align: left; width: 100%">

                                <strong>TOTAL AMOUNT PAYABLE:</strong> <br>
                                APPROVED BY:<br>
                            </div>

                        </td>
                        <td>
                            <br>
                            <div style=" padding: 5px; text-align: left; width: 100%">

                                <strong>RM 250.00</strong>  <br>
                                MOHD NIZAR BIN MOHD NASSER  <br>
                            </div>

                        </td>
                    </tr>
                </table>


            </div>

        </div>
    </div>



</body>
</html>
