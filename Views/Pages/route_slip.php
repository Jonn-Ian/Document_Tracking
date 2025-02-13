<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Route Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1100px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .form-check {
            margin-bottom: 10px;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
        <h3 class="text-center mb-4">Route Slip</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="fileUpload" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="fileUpload" name="fileUpload">
                </div>
                <div class="col-md-4">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Departments</label>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox1" name="checkbox1"><label class="form-check-label" for="checkbox1">Office of the Administrator</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox2" name="checkbox2"><label class="form-check-label" for="checkbox2">Deputy Admin for AFM</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox3" name="checkbox3"><label class="form-check-label" for="checkbox3">Deputy Admin for Operation</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox4" name="checkbox4"><label class="form-check-label" for="checkbox4">AFMO</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox5" name="checkbox5"><label class="form-check-label" for="checkbox5">PPDO</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox6" name="checkbox6"><label class="form-check-label" for="checkbox6">OP Center</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox7" name="checkbox7"><label class="form-check-label" for="checkbox7">FMS</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox8" name="checkbox8"><label class="form-check-label" for="checkbox8">GAS</label></div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox9" name="checkbox9"><label class="form-check-label" for="checkbox9">ROCS</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox10" name="checkbox10"><label class="form-check-label" for="checkbox10">RAD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox11" name="checkbox11"><label class="form-check-label" for="checkbox11">ASMD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox12" name="checkbox12"><label class="form-check-label" for="checkbox12">HRMDD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox13" name="checkbox13"><label class="form-check-label" for="checkbox13">Board Sec</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox14" name="checkbox14"><label class="form-check-label" for="checkbox14">Legal</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox15" name="checkbox15"><label class="form-check-label" for="checkbox15">Internal Audit</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox16" name="checkbox16"><label class="form-check-label" for="checkbox16">MPC</label></div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox17" name="checkbox17"><label class="form-check-label" for="checkbox17">Accounting</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox18" name="checkbox18"><label class="form-check-label" for="checkbox18">Budget</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox19" name="checkbox19"><label class="form-check-label" for="checkbox19">Cash</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox20" name="checkbox20"><label class="form-check-label" for="checkbox20">PPMD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox21" name="checkbox21"><label class="form-check-label" for="checkbox21">RMD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox22" name="checkbox22"><label class="form-check-label" for="checkbox22">PPDD</label></div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox23" name="checkbox23"><label class="form-check-label" for="checkbox23">PDMU</label></div>
                        
                        <div class="form-check d-flex align-items-center">
                        <input type="checkbox" class="form-check-input me-2" id="checkbox24">
                        <label class="form-check-label me-2" for="checkbox24">Other</label>
                        <input type="text" class="form-control other-input" id="otherDepartment" placeholder="Specify department">
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-5">
                        <label class="form-label">Purpose</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose1" name="purpose1">
                            <label class="form-check-label" for="purpose1">For Appropriate Action</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose2" name="purpose2">
                            <label class="form-check-label" for="purpose2">For Information / Reference</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose3" name="purpose3">
                            <label class="form-check-label" for="purpose3">For Initial / Signature</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose4" name="purpose4">
                            <label class="form-check-label" for="purpose4">For Approval</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label"></label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose5" name="purpose5">
                            <label class="form-check-label" for="purpose5">For Comments / Recommendation</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose6" name="purpose6">
                            <label class="form-check-label" for="purpose6">As requested</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose7" name="purpose7">
                            <label class="form-check-label" for="purpose7">For Review</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="purpose8" name="purpose8">
                            <label class="form-check-label" for="purpose8">Returned with Thanks</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                <div class="col-md-12">
                    <label for="remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter your remarks here..."></textarea>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>
