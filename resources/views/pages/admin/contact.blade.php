@extends('layouts.admin-layout')
@section('page_title')
    {{ "Faq page | "}}{{ config('app.name')}}
@endsection
@section('content')

 <div class="wrapper mb60">
    <div class="container-fluid">
        <div class="row">            
            <div class="col-sm-12">
                <h4 class="page-title">Manage Contact</h4>
            </div>        
            <div class="col-sm-12">
<!--                @if(session('status'))                                                
                <div class="alert alert-success alert-dismissible"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('status') }}
                </div>
                @endif-->
                <div class="alert alert-success" style="display: none"></div>
                <div class="alert alert-danger" style="display: none"></div>
            </div>
        </div>

        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-xl-12 col-lg-12 mt-md-3">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a href="#incompleted" data-toggle="tab" aria-expanded="false" class="nav-link active">Active Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="#completed" data-toggle="tab" aria-expanded="false" class="nav-link">Replied and Deleted Contacts</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="incompleted">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-bordered">
                                        <thead class="thead-bg">
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Name</th>
                                            <th>Region</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Purpose</th>
                                            <th>Comments</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tr-bg">
                                        <?php $i = 1; ?>
                                        @foreach($activeContacts as $activeContact)    
                                        <tr>
                                            <td>{{$i}}</td> 
                                            <td>{{$activeContact->name}}</td>
                                            <td>{{$activeContact->region}}</td>
                                            <td>{{$activeContact->contact_number}}</td>
                                            <td>{{$activeContact->email}}</td>
                                            <td>{{$activeContact->purpose}}</td>
                                            <td>{{ mb_strimwidth($activeContact->comments,0,50,'...') }}</td>
                                            <td class="edit-grid-icons">
                                                <a href="#ContactViewmodal" class="btn btn-bg3 waves-effect btn-sm m-b-5 ContactView" data-target="#view_reply_content"  rel="tooltip" title="View" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal"
                   data-name="<?= $activeContact->name ?>" 
                   data-region="<?= $activeContact->region ?>"  
                   data-contact_number="<?= $activeContact->contact_number ?>"
                   data-email="<?= $activeContact->email ?>"
                   data-purpose="<?= $activeContact->purpose ?>"
                   data-comments="<?= $activeContact->comments ?>"><i class="mdi mdi-eye"></i></a>
                                                <a href="#ContactReplymodal" class="btn btn-success waves-effect waves-light btn-sm m-b-5 contactReply" rel="tooltip" title="Reply"  data-toggle="modal" data-target="#ContactReplymodal" data-id="<?= $activeContact->id ?>" data-email="<?= $activeContact->email ?>" data-name="<?= $activeContact->name ?>"><i class="mdi mdi-reply"></i></a>
                                                <a class="btn btn-danger waves-effect waves-light btn-sm m-b-5 deleteContactmodal" rel="tooltip" title="Delete" data-fecth_id="<?= $activeContact->id ?>"  data-toggle="modal" data-target="#DeleteModelFaq"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @php $i++ @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="completed">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable1" class="table table-bordered">
                                        <thead class="thead-bg">
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Name</th>
                                            <th>Region</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Purpose</th>
                                            <th>Comments</th>
                                            <th>Reply</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tr-bg">
                                        <?php $j = 1; ?>
                                        @foreach($replyedContacts as $replyedContact)    
                                        <tr>
                                            <td>{{$j}}</td> 
                                            <td>{{$replyedContact->name}}</td>
                                            <td>{{$replyedContact->region}}</td>
                                            <td>{{$replyedContact->contact_number}}</td>
                                            <td>{{$replyedContact->email}}</td>
                                            <td>{{$replyedContact->purpose}}</td>
                                            <td>{{ mb_strimwidth($replyedContact->comments,0,50,'...') }}</td>
                                            <td>{{ mb_strimwidth($replyedContact->reply,0,50,'...') }}</td>
                                            <td><?php if($replyedContact->is_active == 0){ echo 'Replied'; } else { echo "Deleted"; } ?></td>
                                            <td class="edit-grid-icons">
                                                <a href="#ContactViewmodal" class="btn btn-bg3 waves-effect btn-sm m-b-5 ContactView"  data-target="#view_reply_content" rel="tooltip" title="View" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal" 
                   data-name="<?= $replyedContact->name ?>" 
                   data-region="<?= $replyedContact->region ?>"  
                   data-contact_number="<?= $replyedContact->contact_number ?>"
                   data-email="<?= $replyedContact->email ?>"
                   data-purpose="<?= $replyedContact->purpose ?>"
                   data-comments="<?= $replyedContact->comments ?>"><i class="mdi mdi-eye"></i></a>
                                                <!--<a href="#ContactReplymodal" class="btn btn-success waves-effect waves-light btn-sm m-b-5 FaqEdit" rel="tooltip" title="Reply"  data-toggle="modal" data-target="#ContactReplymodal" data-id="<?= $replyedContact->id ?>" data-email="<?= $replyedContact->email ?>" ><i class="mdi mdi-reply"></i></a>-->
                                                <!--<a class="btn btn-danger waves-effect waves-light btn-sm m-b-5 deleteContactmodal" rel="tooltip" title="Delete" data-fecth_id="<?= $replyedContact->id ?>" data-toggle="modal" data-target="#DeleteModelFaq"><i class="mdi mdi-delete-forever"></i></a>-->
                                            </td>
                                        </tr>
                                        @php $j++ @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end col -->
         </div>
    </div> <!-- end container -->
</div>

<!-- Modal -->
<div id="ContactViewmodal" class="modal-demo updatemodal-demo">
    <div class="modal-header">
        <h5 class="modal-title">Contact Details</h5>
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
</div>
    <div class="custom-modal-text">
        <div class="row">
            <div class="col-sm-12 sup-form">
                <div class="form-group col-sm-12">
                    <span><b>Name :</b></span>
                    <span id="contactName"></span><br>
                    <span><b>Region :</b></span>
                    <span id="contactRegion"></span><br>
                    <span><b>Number :</b></span>
                    <span id="contactNumber"></span><br>
                    <span><b>Email :</b></span>
                    <span id="contactEmail"></span><br>
                    <span><b>Purpose :</b></span>
                    <span id="contactPurpose"></span><br>
                    <span><b>Comments :</b></span>
                    <span id="contactComment"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ContactReplymodal" tabindex="-1" role="dialog" aria-labelledby="FaqAddmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Reply To</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="custom-modal-text pb-0">                
        <form class="contact_reply" id="contact_reply" action="{{URL('/replycontact/')}}" method="post">
        @csrf
            <div class="row">
                <div class="form-group col-sm-12 mb-0">
                    <div class="form-group">
                        <input type="hidden" name="id" id="contactreplyId" value="">                        
                        <input type="hidden" name="name" id="contactreplyname" value="">                        
                        <input type="hidden" name="email" id="contactreplyEmail" value="">                        
                        <label class="control-label mb-10">Reply to:</label>
                        <input type="text" name="email" id="contactreplyEmail1" class="form-control" value="" disabled="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Reply Message:</label>
                        <textarea name="reply" id="reply" class="form-control" aria-describedby=""></textarea>
                    </div>
<!--                    <br>-->
                    <div class="form-group mb-0 btn-right">
                        <button type="submit" class="btn btn-custom btn-bordred">
                            <div class="loader" style="display: none;"></div>
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="FaqAddmodal" tabindex="-1" role="dialog" aria-labelledby="FaqAddmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="custom-modal-text">                
        <form class="add_Faq" id="add_Faq" action="{{URL('/addFaq/')}}" method="post">
        @csrf
            <div class="row">
            <!--<div class="col-sm-12 sup-form">-->
                <div class="form-group col-sm-12">
                    <div class="form-group">
                        <label class="control-label mb-10">Category <span>*</span></label>
                        <div class="btn-group bootstrap-select">
                            <select class="category" id="category" name="category" data-style="form-control btn-default btn-outline" tabindex="-98">
                                <option value>Select Category</option>
                                <option value="educators">Educators</option>
                                <option value="providers">Providers</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Title:<span>*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Content:<span>*</span></label>
                        <!--<input type="text" class="form-control" value="">-->
                        <textarea name="content" id="content" class="form-control" aria-describedby=""></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-custom btn-bordred">Submit</button>
                    </div>
                </div>
            <!--</div>-->
            </div>
        </form>
    </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="DeleteModelFaq" tabindex="-1" role="dialog" aria-labelledby="FaqAddmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="custom-modal-text pb-0">
          <div class="modal-body">
            Are you sure you want to delete?
          </div>
          <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-primary deletecontact" id="delete" data-id="" value="">Yes</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection