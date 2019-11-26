@extends('admin.email-box')
@section('mail-content')
@foreach ($emails as $email)

<div class="mail-box-header">
     <div class="pull-right tooltip-demo">
          <a href="/admin/email/email-compose/{{$email->id}}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
          <a href="/admin/email/email-delete/{{$email->id}}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
     </div>
     <h2>
          View Message
     </h2>
     <div class="mail-tools tooltip-demo m-t-md">
          <h3>
               <span class="font-normal">Subject: </span>{{$email->subject}}
          </h3>
          <h5>
              <span class="pull-right font-normal"> Create at:{{$email->created_at}}</span>
               <span class="font-normal text-navy ">From:  {{$email->email_address}}</span> <br><br>
               <span class="font-normal ">Name:  {{$email->name}}</span><br><br>
               <span class="font-normal ">Phone: {{$email->phone}}</span>
          </h5>
     </div>
</div>
<div class="mail-box">
<div class="mail-body">
     <p>
          {!!html_entity_decode($email->message)!!}
     </p>
</div>

     <div class="mail-body text-right tooltip-demo">
               <a class="btn btn-sm btn-white" href="/admin/email/email-compose/{{$email->id}}"><i class="fa fa-reply"></i> Reply</a>
               <a class="btn btn-sm btn-white" href="/admin/email/email-delete/{{$email->id}}"><i class="fa fa fa-trash-o"></i> Forward</a>
     </div>
     <div class="clearfix"></div>
</div>
@endforeach
@endsection