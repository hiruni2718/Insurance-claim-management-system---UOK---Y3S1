<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="mature.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    

    <title>Maturity Claim Registration Form </title> 
</head>
<body>
    <div class="container">
    <!-- <div style= "
    /* background: rgb(33, 96, 231);  */
    padding: 20px;  
    position: relative; 
    left: 20px; 
    top: 0px;  
    height: 1500px; 
    width: 80%; 
    overflow-y: auto;"> -->
   
    <div class="container">

        <h1>Maturity Claim Registration Form</h1>
        <form name="mature" class="mature-form" onsubmit="return formValidation()">
            <table>

                <tr><td>Policyholder details</td></tr>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="nic">NIC:</label></td>
                    <td><input type="text" id="nic" name="nic" required></td>
                </tr>
                <tr>
                    <td><label for="contact_no">Contact Number:</label></td>
                    <td><input type="text" id="contact_no" name="contact_no" required></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>

                <tr><td>Claim details</td></tr>

                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                
                <tr>
                    <td>Policy ID:</td>
                    <td><input type="text" name="policy_id" required></td>
                </tr>
                <tr>
                    <td>Premium Amount:</td>
                    <td><input type="text" name="premium_amount" required></td>
                </tr>
                <tr>
                    <td>Claim Amount:</td>
                    <td><input type="text" name="claim_amount" required></td>
                </tr>
                <tr>
                    <td>Upload policy document:</td>
                    <td class="file-upload"><input type="file" name="death_certificate" required></td>
                </tr>

                <tr><td>Bank details</td></tr>

                <tr>
                    <td><label for="bank">Bank name:</label></td>
                    <td>
                        <select id="bank" name="bank" required>
                            <option value="" disabled selected>Select gender</option>
                            <option value="BOC">BOC</option>
                            <option value="DFCC">DFCC</option>
                            <option value="People's bank">People's bank</option>
                            <option value="Sampath bank">Sampath bank</option>
                            <option value="Seylan bank">Seylan bank</option>
                            <option value="HNB">HNB</option>
                            <option value="HSBC">HSBC</option>
                            <option value="Commercial bank">Commercial bank</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="bank_account_no">Bank Account Number:</label></td>
                    <td><input type="text" id="bank_account_no" name="bank_account_no" required></td>
                </tr>
                <tr>
                    <td><label for="branch">Branch:</label></td>
                    <td><input type="text" id="branch" name="branch" required></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="prove" name="prove" value="">
                    <label for="prove">I hereby declare that the information given above is true and accurate to the best of my knowledge.</label>
                    </td>
                    </tr>
                <!-- <tr>
                    <td>Signature:</td>
                    <td><input type="text" name="signature" required></td>
                </tr> -->
                <tr></tr>
                <tr></tr>
                <tr>
                    <td colspan="1"><input type="submit" class="submit" value="Submit" /></td>
                  </tr>
            </table>
            </form>
     </div>
</div>
    <script src="mature.js"></script>
</body>
</html>