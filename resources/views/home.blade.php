 @extends('layout.default')

 @section('title','Homepage')

 @section('contentStarter_Page')
 <!-- Content Header (Page header) -->
 <div class="card-header">
     <h3 class="card-title">SE_CAMP_FORM</h3>
 </div>
 <div class="card-body">
     <div class="form-group">
         <label for="exampleInputFirst_Name">First Name</label>
         <input type="FName" class="form-control" id="exampleInputFirst_Name " placeholder="ExampleInputFirst Name">
     </div>
     <div class="form-group">
         <label for="exampleInputLast_Name">Last Name</label>
         <input type="LName" class="form-control" id="exampleInputLast_Name" placeholder="ExampleInputLast Name">
     </div>
     <div class="form-group">
         <label for="exampleInputFile">File_Picture input</label>
         <div class="input-group">
             <div class="custom-file">
                 <input type="file" class="custom-file-input" id="exampleInputFile">
                 <label class="custom-file-label" for="exampleInputFile">Choose File_Picture</label>
             </div>
             <div class="input-group-append">
                 <span class="input-group-text">Upload</span>
             </div>
         </div>
     </div>
     <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Check me out</label>
     </div>
 </div>
 <!-- /.card-body -->
 <div class="card-body">
     <!-- Date dd/mm/yyyy -->
     <div class="form-group">
         <label>Date masks:</label>

         <div class="input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
             </div>
             <input type="text" class="form-control" data-inputmask-alias="datetime"
                 data-inputmask-inputformat="dd/mm/yyyy" data-mask>
         </div>
         <!-- /.input group -->
     </div>

     <!-- /.form group -->
     <!-- phone mask -->
     <div class="form-group">
         <label>US phone mask:</label>

         <div class="input-group">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-phone"></i></span>
             </div>
             <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
         </div>
         <!-- /.input group -->
     </div>

     <!-- /.form group -->



     <!-- /.card-body -->
 </div>
 <div class="card-footer">
     <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 @endsection