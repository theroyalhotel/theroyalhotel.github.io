@extends('admin.email-box')
@section('mail-content')

<div class="mail-box-header">
     <div class="pull-right tooltip-demo">
          <a href="/admin/email" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
     </div>
     <h2>
          Compse mail
     </h2>
</div>
<div class="mail-box">
     <div class="mail-body">

          <form class="form-horizontal" action={{url('/admin/email/email-send') }} method="POST">
               @csrf
               <div class="form-group"><label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10"><input type="hidden" name="name" class="form-control @error('name') is-invalid @enderror" value=""></div>
                    <div class="col-sm-10"><input type="hidden" name="phone" class="form-control @error('phone') is-invalid @enderror" value=""></div>
               </div>
               <div class="form-group"><label class="col-sm-2 control-label">To:</label>
                    <div class="col-sm-10"><input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value=""></div>
               </div>            
               <div class="form-group"><label class="col-sm-2 control-label">Subject:</label>
                    <div class="col-sm-10"><input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" value=""></div>
                    <div class="col-sm-10"><input type="hidden" name="categories" class="form-control" value="2"></div>
                    <div class="col-sm-10"><input type="hidden" name="status" class="form-control" value="4"></div>
                    <div class="col-sm-10"><input type="hidden" name="hotel" class="form-control" value="1"></div>
               </div>
               <div class="form-group"> <label class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="message" id="detail"></textarea>
                    </div>
                </div>
                    
               <div class="clearfix"></div>
               <div class="mail-body text-right tooltip-demo">
                    <button class="btn btn-sm btn-primary" type="submit" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i>Send</button>
               </div>
               <div class="clearfix"></div>
          </form>
     </div>
</div>
        
         
@endsection

@section('js')
<script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FooTable -->
<script src="{{asset('js/admin/plugins/footable/footable.all.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
<script src="{{asset('js/admin/inspinia.js')}}"></script>
<script src="{{asset('js/admin/plugins/pace/pace.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script src="{{asset('js/post.js')}}"></script>

<script>
     $(document).ready(function(){
          $('.summernote').summernote();
     });
</script>

<!-- Page-Level Scripts -->
@endsection