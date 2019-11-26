@extends('admin.email-box')
@section('mail-content')
<div class="mail-box-header">

     <h2>
          @foreach($emails as $i=>$mail)@endforeach @if(@isset($i))Inbox({{$i+1}})@else Inbox({{0}})@endif
     </h2>
     <div class="mail-tools tooltip-demo m-t-md">
          <div class="btn-group pull-right">
               <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
               <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

          </div>
          <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
     </div>
</div>
<div class="mail-box">
     <table class="table table-hover table-mail">
          <tbody>
               @foreach($emails as $mail )
                    <tr class=" @switch($mail->status) @case(0) unread @break @case(2)read @break @default read @endswitch">
                         {{-- <td class="check-mail">
                         <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                         </td> --}}
                         {{-- <td class="">{{++$mail}}</td> --}}
                    <td class="mail-ontact"><a href="/admin/email/email-view/{{$mail->id}}">{{$mail->name}}</a><span class="label pull-right @switch($mail->categories)  @case(0) label-warning ">Contact @break @case(1) label-danger ">Report @break @case(2) label-info ">Words @break @case(3) label-info ">Adv @break @endswitch </span></td>
                         <td class="mail-subject"><a href="/admin/email/email-view/{{$mail->id}}">{{$mail->subject}}</a></td>
                         {{-- <td class=""><i class="fa fa-paperclip"></i></td> --}}
                         <td class=""> @if($mail->status==0) <a href="/admin/email/email-read/{{$mail->id}}"><i class="fa fa-eye-slash"></i> @else <i class="fa fa-eye"></i> @endif </a></td>
                         @if($mail->status==3) 
                              <td class=""> <a href="/admin/email/email-restore/{{$mail->id}}"><i class="fa fa-tag"> Restore</i></a></td>
                         @else
                              <td class=""> <a href="/admin/email/email-delete/{{$mail->id}}"><i class="fa fa-trash-o"></i></a></td>
                         @endif
                         <td class="text-right mail-date"> @if(date('m-d-Y', strtotime($mail->created_at))==$today) {{date('h:i A',strtotime($mail->created_at))}} @else {{date('m-d-Y', strtotime($mail->created_at))}} @endif </td>
                    </tr>
               @endforeach
          </tbody>
     </table>
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
<script src="{{asset('js/admin/plugins/iCheck/icheck.min.js')}}"></script>


<!-- Page-Level Scripts -->
<script>
      $(document).ready(function(){
          $('.i-checks').iCheck({
          checkboxClass: 'icheckbox_square-green',
          radioClass: 'iradio_square-green',
          });
     });
</script>
@endsection