<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="border border-2 border-warning m-auto ">
        <div class="fs-4 m-auto text-center">𝔐𝔞𝔥𝔞𝔯𝔞𝔰𝔥𝔱𝔯𝔞 𝔖𝔱𝔞𝔱𝔢 𝔅𝔬𝔞𝔯𝔡 <br>
        𝔖𝔢𝔠𝔬𝔫𝔡𝔞𝔯𝔶 𝔞𝔫𝔡 ℌ𝔦𝔤𝔥𝔢𝔯 𝔖𝔢𝔠𝔬𝔫𝔡𝔞𝔯𝔫 𝔈𝔡𝔲𝔠𝔞𝔱𝔦𝔬𝔫 ,𝔓𝔲𝔫𝔢 <br></div>
        <div class="text-center">This is to certify that</div>
        <form action="Marksheet_Print.php" method="post">
            <div class="fw-bold text-center">           
                <input type="text" name="name" id="name" class="form-control w-50 m-auto border-2 border-dark my-2" placeholder="Student Name required">
            </div>
            <div class="text-center">            
                <input type="text" name="mother_name" class="form-control w-50 m-auto border-2 border-dark my-2" id="mother_name" placeholder="Mother Name">
            </div>
            <div class=" row m-auto ">
            <div class="col-3 border border-2 border-dark  text-center bg-secondary bg-gradient">Division Board</div>
            <div class="col-2 border border-2 border-dark  text-center bg-secondary bg-gradient"> Seat No. </div>
            <div class="col-2 border border-2 border-dark  text-center bg-secondary bg-gradient">Center No.</div>
            <div class="col-3 border border-2 border-dark  text-center bg-secondary bg-gradient">School No.</div>
            <div class="col-2 border border-2 border-dark  text-center bg-secondary bg-gradient">Sr.No of Certificate</div>

            <div class="col-3 border border-2 border-dark fw-bold  text-center">
                <select name="division" id="" class="form-control w-100 m-auto border-2 border-dark my-2">
                    <option value="0">Select Division</option>
                    <option value="Chh.Sambhajinagar">Chh.Sambhajinagar</option>
                    <option value="Nashik">Nashik</option>
                    <option value="Pune">Pune</option>
                </select>
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="seat_no" id="seat_no" class="form-control w-100 m-auto border-2 border-dark my-2" placeholder="Seat No"> 
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="center_no" id="center_no" class="form-control w-100 m-auto border-2 border-dark my-2" placeholder="Center No"> 
            </div>
            <div class="col-3 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="school_no" id="school_no" class="form-control w-100 m-auto border-2 border-dark my-2" placeholder="School No">
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="cert_no" id="cert_no" class="form-control w-100 m-auto border-2 border-dark my-2" placeholder="Cert No"> 
            </div>

            <div class="row">
                <div class="col-6 text-center pt-3 fw-bold">
                    has passed the SECONDARY SCHOOL CERTIFICATE EXAMINATION : 
                </div>
                <div class="col-6">
                    <input type="month" name="examination" id="examination" class="form-control w-50 border-2 border-dark my-2" placeholder="EXAMINATION MONTH YEAR">
                </div>
            </div>
            

            <div class="fw-bold">In Grade Distinction</div>
            <div class="text-center fs-5">With Subject Shown below..</div>

            <div class="col-3 border border-2 border-dark fw-bold  text-center bg-secondary bg-gradient">Main Subject</div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center bg-secondary bg-gradient">Max.Marks</div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center bg-secondary bg-gradient">Marks Obtained</div>
            <div class="col-3 border border-2 border-dark fw-bold  text-center bg-secondary bg-gradient">Grade Subject</div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center bg-secondary bg-gradient">Grade</div>

            <div class="col-3 border border-2 border-dark fw-bold  text-center p-3">
                <div class="fw-bold mb-4">MARATHI</div>
                <div class="fw-bold mb-4">HINDI</div>
                <div class="fw-bold mb-4">ENGLISH</div>
                <div class="fw-bold mb-4">MATHEMATICS</div>
                <div class="fw-bold mb-4">SCIENCE_TECHNOLOGY</div>
                <div class="fw-bold mb-4">SOCIAL_SCIENCES</div>
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center  p-3">
                <div class="fw-bold mb-4">100</div>
                <div class="fw-bold mb-4">100</div>
                <div class="fw-bold mb-4">100</div>
                <div class="fw-bold mb-4">100</div>
                <div class="fw-bold mb-4">100</div>
                <div class="fw-bold mb-4">100</div>
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center p-3">
                <input type="text" name="MARATHI" id="MARATHI" class="form-control mb-2 m-auto border border-dark ">
                <input type="text" name="HINDI" id="HINDI" class="form-control mb-2 m-auto border border-dark ">
                <input type="text" name="ENGLISH" id="ENGLISH" class="form-control mb-2 m-auto border border-dark ">
                <input type="text" name="MATHEMATICS" id="MATHEMATICS" class="form-control mb-2 m-auto border border-dark ">
                <input type="text" name="SCIENCE_TECHNOLOGY" id="SCIENCE_TECHNOLOGY" class="form-control mb-2 m-auto border border-dark ">
                <input type="text" name="SOCIAL_SCIENCES" id="SOCIAL_SCIENCES" class="form-control mb-2 m-auto border border-dark ">
            </div>
            <div class="col-3 border border-2 border-dark fw-bold  text-center p-5">
                ( SCHOOL SUBJECTS ) HEALTH & PHYSICAL EDUCATION <br>
                DEFENCE STUDIES SELF DEVELOPMENT & ART APPRE <br>
            </div>            
            <div class="col-2 border border-2 border-dark fw-bold  text-center p-5">
                <div class="fw-bold mb-4">A</div>
                <div class="fw-bold mb-4">B</div>
                <div class="fw-bold mb-4">C</div>
            </div>
            
            <div class="col-3 border border-2 border-dark fw-bold  text-center">
                Total Marks
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="total_marks" id="total_marks" value="500" class="form-control border border-dark">
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center" >
                <input type="text" name="obtained_marks" id="obtained_marks" class=" fw-bold form-control border border-dark" placeholder="Obt Marks">
            </div>
            <div class="col-3 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="Percentage" id="Percentage" class=" fw-bold form-control border border-dark" placeholder="Percentage &#x2211;">
            </div>
            <div class="col-2 border border-2 border-dark fw-bold  text-center">
                <input type="text" name="grade" id="grade" class=" fw-bold form-control border border-dark" placeholder="Grade">                
            </div>

            <script>            
                var MARATHI,HINDI,ENGLISH,MATHEMATICS;SCIENCE_TECHNOLOGY,SOCIAL_SCIENCES;

                document.getElementById("MARATHI").addEventListener("change",function(){
                    MARATHI= this.value;
                })
                document.getElementById("HINDI").addEventListener("change",function(){
                    HINDI = this.value;
                })
                document.getElementById("ENGLISH").addEventListener("change",function(){
                    ENGLISH = this.value;
                })
                document.getElementById("MATHEMATICS").addEventListener("change",function(){
                    MATHEMATICS = this.value;                    
                })
                document.getElementById("SCIENCE_TECHNOLOGY").addEventListener("change",function(){
                    SCIENCE_TECHNOLOGY = this.value;
                })
                document.getElementById("SOCIAL_SCIENCES").addEventListener("change",function(){
                    SOCIAL_SCIENCES = this.value;
                    let total = Number(MARATHI)+Number(HINDI)+Number(ENGLISH)+Number(MATHEMATICS)+Number(SCIENCE_TECHNOLOGY)+Number(SOCIAL_SCIENCES);
                    document.getElementById("obtained_marks").value=total;
                    let percentage = total / 6;
                    document.getElementById("Percentage").value=percentage;                    
                    if(Number(MARATHI)>=60 && Number(HINDI)>=60 &&Number(ENGLISH)>=60 &&Number(MATHEMATICS)>=60 &&Number(SCIENCE_TECHNOLOGY)>=60 &&Number(SOCIAL_SCIENCES))
                    {
                     document.getElementById("grade").value = "A";
                    }
                    else if(Number(MARATHI)>=45 || Number(MARATHI)<=59 && Number(HINDI)>=60 &&Number(ENGLISH)>=60 &&Number(MATHEMATICS)>=60 &&Number(SCIENCE_TECHNOLOGY)>=60 &&Number(SOCIAL_SCIENCES))
                    {
                     document.getElementById("grade").value = "B";
                    }
                })            
            </script>

            <div class="col-6 border border-2 border-dark fw-bold  text-center">
                Total Marks Obtained (In Words)
            </div>
            <div class="col-6 border border-2 border-dark fw-bold  text-center">
                FOUR HUNDRED AND FIFTYONE
            </div>            
            <div class="col-6 border border-2 border-dark fw-bold  text-center">
                Date Of Birth
            </div>
            <div class="col-6 border border-2 border-dark fw-bold  text-center">
                20/07/2004 <br>(TWENTIETH JULY TWO THOUSAND FOUR)
            </div>

            <div class="col-6 border border-2 border-dark fw-bold  text-center"> place Of Birth</div>
            <div class="col-6 border border-2 border-dark fw-bold  text-center">WADOD TA KANNAD DIST AURNGABAD</div>

            <div class="col-6 border border-2 border-dark fw-bold  text-center"> Additional marks category</div>
            <div class="col-6 border border-2 border-dark fw-bold  text-center"> -</div>
          </div>  
          <div class="text-center my-2">
                <button type="submit" class="btn btn-success w-50">Download Marksheet</button>
            </div>
        </form> 
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>