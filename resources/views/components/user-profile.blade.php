<div class="row">
  <div class="col-md-2">
    @if(!empty($user->pic_path))
    <img src="{{asset('01-progress.gif')}}" data-src="{{url($user->pic_path)}}" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="100%">
    @else
      @if(strtolower($user->gender) == 'male')
        <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user.png" class="img-thumbnail" width="100%">
      @else
        <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user-female.png" class="img-thumbnail" width="100%">
      @endif
    @endif
    @if(\Auth::user()->role == 'admin')
    <div class="rows" style="font-size:10px;margin-top:5%;">
      <input type="hidden" id="picPath" name="pic_path">
      <input type="hidden" id="userIdPic" name="user_id" value="{{$user->id}}">
      @component('components.file-uploader',['upload_type'=>'profile'])
      @endcomponent
    </div>
   <div>
     <button class="btn btn-xs btn-success pull-right" role="button" id="btnBlockChain"><i class="material-icons">print</i>Send To BlockChain</button>
   </div>
    @endif
  </div>
  <div class="col-md-10" id="main-container">
    <div id="stname"><h3>{{$user->name}}</h3></div>
      <h3>
      <span class="label label-danger">{{ucfirst($user->role)}}</span> <span class="label label-primary">{{ucfirst($user->gender)}}</span>
      @if ($user->role == 'teacher' && $user->section_id > 0)
        <small>Class Teacher of Section: <span class="label label-info">{{ucfirst($user->section->section_number)}}</span></small>
      @endif
      
      @if($user->role == "student")
       <button class="btn btn-xs btn-success pull-right" role="button" id="btnPrint"><i class="material-icons">print</i> Print Profile</button>
       <div class="visible-print-block" id="profile-content">
       <div class="row">
          <div class="col-md-12">
            <div class="col-xs-8">
              <h2>{{$user->section->class->school->name}}</h2>
              <div style="font-size: 10px;">{{$user->section->class->school->about}}</div>
            </div>
            <div class="col-xs-4">
              <h3>Student Profile</h3>
              <div style="font-size: 10px;">Printing Date: {{Carbon\Carbon::now()->format('d/m/Y')}}</div>
            </div>
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col-md-12">
            <p class="bg-primary" style="text-align:center;">
              Academic Information
            </p>
            <div class="col-xs-9">
              <table class="table">
                <tr>
                  <td>Student ID:</td>
                  <td>{{$user->student_code}}</td>
                  <td>Student's Name:</td>
                  <td>{{$user->name}}</td>
                </tr>
                <tr>
                  <td>Class:</td>
                  <td>{{$user->section->class->class_number}}</td>
                  <td>Section:</td>
                  <td>{{$user->section->section_number}}</td>
                </tr>
                <tr>
                  <td>Session:</td>
                  <td>{{$user->studentInfo['session']}}</td>
                  <td>Version:</td>
                  <td>{{$user->studentInfo['version']}}</td>
                </tr>
                <tr>
                  <td>Group:</td>
                  <td>{{$user->studentInfo['group']}}</td>
                  <td colspan="2"></td>
                </tr>
              </table>
            </div>
            <div class="col-xs-3">
              @if(!empty($user->pic_path))
              <img src="{{asset('01-progress.gif')}}" data-src="{{url($user->pic_path)}}" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              @else
              @if(strtolower($user->gender) == 'male')
                <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user.png" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              @else
                <img src="{{asset('01-progress.gif')}}" data-src="https://png.icons8.com/dusk/200/000000/user-female.png" class="img-thumbnail" id="my-profile" alt="Profile Picture" width="120px" height="120px">
              @endif
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="bg-primary" style="text-align:center;">
              Personal details
            </p>
            <div class="col-xs-12">
              <table class="table">
                <tr>
                  <td>Email:</td>
                  <td>{{$user->email}}</td>
                  <td>Contact Number</td>
                  <td>{{$user->phone_number}}</td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td>{{$user->gender}}</td>
                  <td>Blood Group:</td>
                  <td>{{$user->blood_group}}</td>
                </tr>
                <tr>
                  <td>Nationality:</td>
                  <td>{{$user->nationality}}</td>
                  <td>Birthday:</td>
                  <td>{{Carbon\Carbon::parse($user->birthday)->format('d/m/Y')}}</td>
                </tr>
                <tr>
                  <td>Religion:</td>
                  <td>{{$user->studentInfo['religion']}}</td>
                  <td>Father Name:</td>
                  <td>{{$user->studentInfo['father_name']}}</td>
                </tr>
                <tr>
                  <td>Mother Name:</td>
                  <td>{{$user->studentInfo['mother_name']}}</td>
                  <td>Address:</td>
                  <td>{{$user->address}}</td>
                </tr>
                <tr>
                  <td>Phone Number:</td>
                  <td>{{$user->phone_number}}</td>
                  <td>Father's Phone Number:</td>
                  <td>{{$user->studentInfo['father_phone_number']}}</td>
                </tr>
                <tr>
                  <td>Father's National ID:</td>
                  <td>{{$user->studentInfo['father_national_id']}}</td>
                  <td>Father's Occupation:</td>
                  <td>{{$user->studentInfo['father_occupation']}}</td>
                </tr>
                <tr>
                  <td>Father's Designation:</td>
                  <td>{{$user->studentInfo['father_designation']}}</td>
                  <td>Father's Annual Income:</td>
                  <td>{{$user->studentInfo['father_annual_income']}}</td>
                </tr>
                <tr>
                  <td>Mother's Phone Number:</td>
                  <td>{{$user->studentInfo['mother_phone_number']}}</td>
                  <td>Mother's National ID:</td>
                  <td>{{$user->studentInfo['mother_national_id']}}</td>
                </tr>
                <tr>
                  <td>Mother's Occupation:</td>
                  <td>{{$user->studentInfo['mother_occupation']}}</td>
                  <td>Mother's Designation:</td>
                  <td>{{$user->studentInfo['mother_designation']}}</td>
                </tr>
                <tr>
                  <td>Mother's Annual Income:</td>
                  <td>{{$user->studentInfo['mother_annual_income']}}</td>
                  <td>About:</td>
                  <td>{{$user->about}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
       </div>
       <script>
        $("#btnPrint").on("click", function () {
            var tableContent = $('#profile-content').html();
            var printWindow = window.open('', '', 'height=720,width=1280');
            printWindow.document.write('<html><head>');
            printWindow.document.write('<link href="{{url('css/app.css')}}" rel="stylesheet">');
            printWindow.document.write('</head><body>');
            printWindow.document.write('<div class="container"><div class="col-md-12" id="academic-part">');
            printWindow.document.write(tableContent);
            printWindow.document.write('</div></div></body></html>');
            printWindow.document.close();
            // var academicPart = printWindow.document.getElementById("academic-part");
            // academicPart.appendChild(resultTable);
            printWindow.print();
          });

        $("#btnBlockChain").on("click", function () {
            var x;
            if (confirm("Are you sure?") === true) {
                 setvalue();
            } else {
                x = "You pressed Cancel!";
                alert(x);
            }
        });
        </script>
      @endif
     </h3>
    <div class="table-responsive" style="margin-top: 3%;">
    <table class="table table-bordered table-striped">
      <tbody>
        <tr>
          @if($user->role == "student")
          <td><b>Code:</b></td>
          <td id="stdId">{{$user->student_code}}</td>
          <td><b>Session:</b></td>
          <td>{{$user->studentInfo['session']}}</td>
          @else
          <td><b>Code:</b></td>
          <td id="stdIdx">{{$user->student_code}}</td>
          <td><b>About:</b></td>
          <td>{{$user->about}}</td>
          @endif
        </tr>
        @if($user->role == "student")
        <tr>
          <td><b>Class:</b></td>
          <td>{{$user->section->class->class_number}}</td>
          <td><b>Section:</b></td>
          <td>{{$user->section->section_number}}</td>
        </tr>
        <tr>
          <td><b>Version:</b></td>
          <td>{{$user->studentInfo['version']}}</td>
          <td><b>Blood Group:</b></td>
          <td>{{$user->blood_group}}</td>
        </tr>
        <tr>
          <td><b>Group:</b></td>
          <td>{{$user->studentInfo['group']}}</td>
          <td><b>Birthday:</b></td>
          <td>{{Carbon\Carbon::parse($user->birthday)->format('d/m/Y')}}</td>
        </tr>
        @endif
        <tr>
          <td><b>Nationality:</b></td>
          <td>{{$user->nationality}}</td>
          <td><b>Religion:</b></td>
          <td>{{$user->studentInfo['religion']}}</td>
        </tr>
        @if($user->role == "student")
        <tr>
          <td><b>Father Name:</b></td>
          <td>{{$user->studentInfo['father_name']}}</td>
          <td><b>Mother Name:</b></td>
          <td>{{$user->studentInfo['mother_name']}}</td>
        </tr>
        @endif
        <tr>
          <td><b>Address:</b></td>
          <td>{{$user->address}}</td>
          <td><b>Phone Number:</b></td>
          <td>{{$user->phone_number}}</td>
        </tr>
        @if($user->role == "student")
        <tr>
          <td><b>Father's Phone Number:</b></td>
          <td>{{$user->studentInfo['father_phone_number']}}</td>
          <td><b>Father's National ID:</b></td>
          <td>{{$user->studentInfo['father_national_id']}}</td>
        </tr>
        <tr>
          <td><b>Father's Occupation:</b></td>
          <td>{{$user->studentInfo['father_occupation']}}</td>
          <td><b>Father's Designation:</b></td>
          <td>{{$user->studentInfo['father_designation']}}</td>
        </tr>
        <tr>
          <td><b>Father's Annual Income:</b></td>
          <td>{{$user->studentInfo['father_annual_income']}}</td>
          <td><b>Mother's Phone Number:</b></td>
          <td>{{$user->studentInfo['mother_phone_number']}}</td>
        </tr>
        <tr>
          <td><b>Mother's National ID:</b></td>
          <td>{{$user->studentInfo['mother_national_id']}}</td>
          <td><b>Mother's Occupation:</b></td>
          <td>{{$user->studentInfo['mother_occupation']}}</td>
        </tr>
        <tr>
          <td><b>Mother's Designation:</b></td>
          <td>{{$user->studentInfo['mother_designation']}}</td>
          <td><b>Mother's Annual Income:</b></td>
          <td>{{$user->studentInfo['mother_annual_income']}}</td>
        </tr>
        <tr>
          <td><b>About:</b></td>
          <td colspan="3">{{$user->about}}</td>
        </tr>
        @endif
      </tbody>
    </table>
    </div>
  </div>
</div>
<script>
    window.onload = function () {
// check to see if user has metamask addon installed on his browser. check to make sure web3 is defined
        if (typeof web3 === 'undefined') {
            document.getElementById('metamask').innerHTML = 'You need <a href="https://metamask.io/">MetaMask</a> browser plugin to run this example'
        }
// call the getvalue function here
        //   setvalue();
       // getvalue();
    }

    // function to add student diploma letter to the blockchain
    function setvalue() {

        var abi = [
            {
                "constant": false,
                "inputs": [
                    {
                        "name": "_address",
                        "type": "address"
                    },
                    {
                        "name": "_sId",
                        "type": "uint256"
                    },
                    {
                        "name": "_fName",
                        "type": "string"
                    },
                    {
                        "name": "_lName",
                        "type": "string"
                    },
                    {
                        "name": "_schoolName",
                        "type": "string"
                    },
                    {
                        "name": "_country",
                        "type": "string"
                    },
                    {
                        "name": "_sdescription",
                        "type": "string"
                    }
                ],
                "name": "setStudent",
                "outputs": [],
                "payable": false,
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "constant": true,
                "inputs": [],
                "name": "countStudents",
                "outputs": [
                    {
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "payable": false,
                "stateMutability": "view",
                "type": "function"
            },
            {
                "constant": true,
                "inputs": [
                    {
                        "name": "_address",
                        "type": "address"
                    }
                ],
                "name": "getStudent",
                "outputs": [
                    {
                        "name": "",
                        "type": "uint256"
                    },
                    {
                        "name": "",
                        "type": "string"
                    },
                    {
                        "name": "",
                        "type": "string"
                    },
                    {
                        "name": "",
                        "type": "string"
                    },
                    {
                        "name": "",
                        "type": "string"
                    },
                    {
                        "name": "",
                        "type": "string"
                    }
                ],
                "payable": false,
                "stateMutability": "view",
                "type": "function"
            },
            {
                "constant": true,
                "inputs": [],
                "name": "getStudent",
                "outputs": [
                    {
                        "name": "",
                        "type": "address[]"
                    }
                ],
                "payable": false,
                "stateMutability": "view",
                "type": "function"
            },
            {
                "constant": true,
                "inputs": [
                    {
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "name": "studentAccts",
                "outputs": [
                    {
                        "name": "",
                        "type": "address"
                    }
                ],
                "payable": false,
                "stateMutability": "view",
                "type": "function"
            }
        ]

        //contract address
        var contractaddress = '0xfc9263ec5e8fac93673b19eec4df5d6524752197';
        //instantiate and connect to contract address via Abi

        var myAbi = web3.eth.contract(abi);
        var myfunction = myAbi.at(contractaddress);
        //call the set function of our Diploma contract

        var studId = document.getElementById('stdId').innerText;
        var data = web3.sha3(studId);

        console.log(data);

        var stdId = data;
        var str = document.getElementById('stname').innerText;
        const arr = str.split(/ (.*)/);
        var fiName = arr[0];
        var lName = arr[1];
        var lSchool = "College Mont Morency";
        var lCountry = "Canada";
        var lDescription = "To Whom It May Concern, I certified the diploma is correct. Mr Bick Dad the Dean";

        myfunction.setStudent(stdId, stdId, fiName, lName, lSchool, lCountry, lDescription, (err, res) => {
            console.log("this is my result", res);
        });

    }

</script>