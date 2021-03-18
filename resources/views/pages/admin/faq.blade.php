@extends('layouts.admin-layout')
@section('page_title')
    {{ "Faq page | "}}{{ config('app.name')}}
@endsection
@section('content')

 <div class="wrapper mb60">
    <div class="container-fluid">
        <div class="row">            
            <div class="col-sm-12">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-primary add-btn-space" data-toggle="modal" data-target="#FaqAddmodal">Add Faq</button>
                </div>
                <h4 class="page-title">Manage FAQs</h4>
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
                        <a href="#incompleted" data-toggle="tab" aria-expanded="false" class="nav-link active">
                           For Educators
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#completed" data-toggle="tab" aria-expanded="false" class="nav-link">
                            For Providers
                        </a>
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
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tr-bg">
                                        <?php $i = 1; ?>
                                        @foreach($educators as $educator)    
                                        <tr>
                                            <td>{{$i}}</td> 
                                            <td>{{$educator->title}}</td>
                                            <td>{{ mb_strimwidth($educator->content,0,150,'...') }}</td>
                                            <td><?php if($educator->status == 1){ echo 'Active'; }else{ echo 'Deleted'; } ?></td>
                                            <td class="edit-grid-icons">
                                                <a href="#FaqViewmodal" class="btn btn-bg3 waves-effect btn-sm m-b-5 FaqView" rel="tooltip" title="View" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal" data-target="#view_faq_content" data-id="<?= $educator->id ?>" data-title="<?= $educator->title ?>"  data-content="<?= $educator->content ?>"><i class="mdi mdi-eye"></i></a>
                                                <a href="#FaqEditmodal" class="btn btn-success waves-effect waves-light btn-sm m-b-5 FaqEdit" rel="tooltip" title="Edit" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal" data-target="#edit_faq_content" data-id="<?= $educator->id ?>" data-title="<?= $educator->title ?>"  data-content="<?= $educator->content ?>"><i class="mdi mdi-square-edit-outline"></i></a>
                                                <a class="btn btn-danger waves-effect waves-light btn-sm m-b-5 deletemodal" rel="tooltip" title="Delete" data-fecth_id="<?= $educator->id ?>"  data-toggle="modal" data-target="#DeleteModelFaq"><i class="mdi mdi-delete-forever"></i></a>
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
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tr-bg">
                                        <?php $j = 1; ?>
                                        @foreach($providers as $provider)    
                                        <tr>
                                            <td>{{$j}}</td> 
                                            <td>{{$provider->title}}</td>
                                            <td>{{ mb_strimwidth($provider->content,0,150,'...') }}</td>
                                            <td><?php if($provider->status == 1){echo 'Active'; }else { echo 'Deleted'; } ?></td>
                                            <td class="edit-grid-icons">
                                                <a href="#FaqViewmodal" class="btn btn-bg3 waves-effect btn-sm m-b-5 FaqView" rel="tooltip" title="View" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal" data-target="#view_faq_content" data-id="<?= $provider->id ?>" data-title="<?= $provider->title ?>"  data-content="<?= $provider->content ?>"><i class="mdi mdi-eye"></i></a>
                                                <a href="#FaqEditmodal" class="btn btn-success waves-effect waves-light btn-sm m-b-5 FaqEdit" rel="tooltip" title="Edit" data-animation="fadein" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a"  data-toggle="modal" data-target="#edit_faq_content" data-id="<?= $provider->id ?>" data-title="<?= $provider->title ?>"  data-content="<?= $provider->content ?>"><i class="mdi mdi-square-edit-outline"></i></a>
                                                <a class="btn btn-danger waves-effect waves-light btn-sm m-b-5 deletemodal" rel="tooltip" title="Delete" data-fecth_id="<?= $provider->id ?>" data-toggle="modal" data-target="#DeleteModelFaq"><i class="mdi mdi-delete-forever"></i></a>
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
<!-- end wrapper -->

<!-- Modal -->
<div id="FaqViewmodal" class="modal-demo updatemodal-demo">
    <div class="modal-header">
        <h5 class="modal-title">Faq</h5>
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
</div>
<!--            <h4 class="custom-modal-title">Modal title</h4>-->
    <div class="custom-modal-text">
        <div class="row">
            <div class="col-sm-12 sup-form">
                <div class="form-group col-sm-12">
                    <span><b>Title :</b></span>
                    <div id="faqTitle"></div>
                    <span><b>Content :</b></span>
                    <div id="faqContent"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="FaqEditmodal" class="modal-demo updatemodal-demo">
    <div class="modal-header">
        <h5 class="modal-title">Edit Faq</h5>
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
    </div>
    <div class="custom-modal-text">                
        <form class="Edit_Faq" id="Edit_Faq" action="{{URL('/editFaq/')}}" method="post">
        @csrf
            <div class="row">
            <!--<div class="col-sm-12 sup-form">-->
                <div class="form-group col-sm-12">
                    <div class="form-group">
                        <label class="control-label mb-10">Title:</label>
                        <input type="hidden" name="faqEditid" id="faqEditid"  value="">
                        <input type="text" name="title" id="title" class="form-control" value="">
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label mb-10">Content:</label>
                        <!--<input type="text" class="form-control" value="">-->
                        <textarea name="content" id="content" class="form-control" aria-describedby=""></textarea>
                    </div>
                    
                    <div class="form-group mb-0 btn-right">
                        <button type="submit" class="btn btn-custom btn-bordred">
                            <div class="loader" style="display: none;"></div>
                            Submit
                        </button>
                    </div>
                </div>
            <!--</div>-->
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="FaqAddmodal" tabindex="-1" role="dialog" aria-labelledby="FaqAddmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Add Faq</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="custom-modal-text pb-0">                
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
<!--                    <br>-->
                    <div class="form-group mb-0 btn-right">
                        <button type="submit" class="btn btn-custom btn-bordred">
                            <div class="loader" style="display: none;"></div>
                            Submit
                        </button>
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
      <div class="custom-modal-text">
          <div class="modal-body">
            Are you sure you want to delete?
          </div>
          <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-primary deletefaq" id="delete" data-id="" value="">Yes</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection