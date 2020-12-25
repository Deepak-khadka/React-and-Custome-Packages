@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@section('content')
     <div class="container">
           <div class="row">
               <div class="col-4">
                   <label for="test">Select Test</label>
                   <select class="form-control" name="test_id" id="test">
                       @foreach($test as $key => $t)
                           <option class="form-control" value="{{$key}}">{{$t}}</option>
                       @endforeach
                   </select>
               </div>
           </div>
     </div>
    @endsection
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>

    $(document).ready(function (){
        $('#test').select2({
            placeholder:'Select User ',
        });
    })
</script>
